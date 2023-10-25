<?php

namespace App\Controllers;

class Appointment extends BaseController
{
  public function index(): string
  {
    $curl = \Config\Services::curlrequest(['baseURI' => BASE_URL_ENDPOINT]);
    $response = $curl->post(
      '/get-drop-in-navigator-list',
      [
        'form_params' => [
          'user_id' => 96
        ],
        'headers' => [
          "Authorization" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM"
        ],
        'verify' => false,
        'allow_redirects' => false
      ]
    );
    $body = $response->getBody();
    $content = ['appointment' => $body];
    $data['pageTitle'] = 'Book Appointment';
    $data['pageContent'] = view('appointment/drop-in-request/index', $content);
    $data['renderScripts'] = view('appointment/drop-in-request/scripts');
    return view('render', $data);
  }
}
