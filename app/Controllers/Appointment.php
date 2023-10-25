<?php

namespace App\Controllers;

class Appointment extends BaseController
{
  public function index(): string
  {
    $curl = \Config\Services::curlrequest(['baseURI' => BASE_URL_ENDPOINT_NEW]);
    $response = $curl->post(
      'get-submit-sample-navigator-list',
      [
        'form_params' => [
          'user_id' => 43467
        ],
        'headers' => [
          "Authorization" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6NTI5NDd9.CKU4Kis4s280vG4gcd8ZDcDt4onZhCKuZsH56_bqD1k"
        ],
        'verify' => false,
        'allow_redirects' => false
      ]
    );
    $body = strpos($response->header('content-type'), 'application/json') === false ? json_decode($response->getBody()) : $response->getBody();
    $content = ['navigators' => $body];
    $data['pageTitle'] = 'Book Appointment';
    $data['pageContent'] = view('appointment/drop-in-request/index', $content);
    $data['renderScripts'] = view('appointment/drop-in-request/scripts');
    return view('render', $data);
  }
}
