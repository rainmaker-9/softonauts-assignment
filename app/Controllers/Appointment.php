<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use DateTimeZone;
use IntlTimeZone;
use stdClass;

class Appointment extends BaseController
{
  public function index(): string
  {
    $navigators = [];
    $navigator_details = $this->getNavigatorDetailsById();
    if ($navigator_details->code === 200 && $navigator_details->status === true) {
      foreach ($navigator_details->submit_sample_navigator_list as $navigator) {
        $navigator->time_slots = [];
        foreach ($navigator->location_id as $location) {
          $loc = new stdClass;
          $loc->location = $location;
          $time_slots = $this->getTimeSlotsByLocationId($location);
          if ($time_slots->code === 200) {
            $loc->slots = $time_slots->timeslots;
            $navigator->time_slots[] = $loc;
          }
        }
        $navigators[] = $navigator;
      }
    }
    $content = ['navigators' => $navigators];
    $data['pageTitle'] = 'Appointment Slots';
    $data['pageContent'] = view('appointment/drop-in-request/index', $content);
    $data['renderStyles'] = view('appointment/drop-in-request/styles');
    $data['renderScripts'] = view('appointment/drop-in-request/scripts');
    return view('render', $data);
  }

  public function bookAppointment()
  {
    $req = $this->request;
    if (!empty($req->getGet('location')) && !empty($req->getGet('date')) && !empty($req->getGet('time'))) {
      $location = filter_var($req->getGet('location'), FILTER_SANITIZE_NUMBER_INT);
      if ($location !== false) {
        $dt = $req->getGet('date');
        $date = new Time(strval($req->getGet('date') . $req->getGet('time')), new DateTimeZone(app_timezone()));
        $navigators = $this->getNavigatorDetailsById();
        if ($navigators->code === 200 && $navigators->status === true && count($navigators->submit_sample_navigator_list) > 0) {
          session()->setFlashdata('location', $location);
          session()->setFlashdata('date', $dt);
          session()->setFlashdata('time', $req->getGet('time'));
          $navigator =  $navigators->submit_sample_navigator_list[0];
          session()->setFlashdata('navigator', $navigator);
          $key = array_search($location, $navigator->location_id);
          if ($key !== false) {
            $location = $navigator->navigator_location[$key];
          }
          $content = ['location' => $location, 'date' => $date, 'navigator' => $navigator];
          $data['pageTitle'] = 'Appointment Slots';
          $data['pageContent'] = view('appointment/book-appointment/index', $content);
          $data['renderScripts'] = view('appointment/book-appointment/scripts');
          return view('render', $data);
        } else {
          return http_response_code(500);
        }
      } else {
        return http_response_code(500);
      }
    } else {
      return redirect()->to("/drop-in");
    }
  }

  public function bookAppointmentPost()
  {
    $flashData = session()->getFlashdata();
    if (!empty($flashData) && !empty($this->request->getPost('appointment_type'))) {
      $data = [
        'user_id' => AUTH_USER_ID,
        'location_id' => $flashData['location'],
        'appointment_type' => $this->request->getPost('appointment_type'),
        'appointment_date' => $flashData['date'],
        'appointment_time' => $flashData['time'],
        'appointment_field' => 1
      ];
      $curl = \Config\Services::curlrequest(['baseURI' => BASE_URL_ENDPOINT_NEW]);
      $response_apt = $curl->post(
        'https://idsqi.com/isdqi-api/book-appointment',
        [
          'form_params' => $data,
          'headers' => [
            "Authorization" => AUTH_HEADER_JWT
          ],
          'verify' => false,
          'allow_redirects' => false
        ]
      );
      $body = json_decode($response_apt->getBody());
      if ($body->code === 200) {
        $content = [
          'status' => $body->status,
          'message' => $body->status ? "Appointment booked successfully." : "Failed to book appointment."
        ];
        $data['pageTitle'] = 'Appointment Status';
        $data['pageContent'] = view('appointment/apt-booked/index', $content);
        return view('render', $data);
      } else {
      }
    } else {
      $content = ['status' => false, 'message' => 'Something went wrong.'];
      $data['pageTitle'] = 'Appointment Status';
      $data['pageContent'] = view('appointment/apt-booked/index', $content);
      return view('render', $data);
    }
  }

  private function getNavigatorDetailsById(int $navigator_id = AUTH_USER_ID): stdClass
  {
    $curl = \Config\Services::curlrequest(['baseURI' => BASE_URL_ENDPOINT_NEW]);
    $response_apt = $curl->post(
      'get-submit-sample-navigator-list',
      [
        'form_params' => [
          'user_id' => $navigator_id
        ],
        'headers' => [
          "Authorization" => AUTH_HEADER_JWT
        ],
        'verify' => false,
        'allow_redirects' => false
      ]
    );
    return json_decode($response_apt->getBody());
  }

  private function getTimeSlotsByLocationId(int $location): stdClass
  {
    $curl = \Config\Services::curlrequest(['baseURI' => BASE_URL_ENDPOINT_NEW]);
    $response_time_slots = $curl->post(
      'https://idsqi.com/isdqi-api/get-time-slots',
      [
        'form_params' => [
          'location_id' => $location
        ],
        'headers' => [
          "Authorization" => AUTH_HEADER_JWT
        ],
        'verify' => false,
        'allow_redirects' => false
      ]
    );
    return json_decode($response_time_slots->getBody());
  }
}
