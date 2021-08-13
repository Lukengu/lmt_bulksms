<?php
return [
    /*
  |--------------------------------------------------------------------------
  | Default configuratiion
  |--------------------------------------------------------------------------
  */
    'api_version' => env('BULKSMS_API_VERSION', 'v1'),
    'sms_sender' => env('BULKSMS_SENDER', 'MOLOGAME'),
    'base_endpoint' => env('BULKSMS_BASE_ENDPOINT', 'https:://app lmtgroup com/bulksms/api/%s/push'),
    'api_key' => env('BULKSMS_API_KEY', 'YOUR API KEY'),
    'api_password' => env('BULKSMS_API_PASSWORD', 'YOUR API PASSWORD'),
    'mobile_sp' => env('BULKSMS_SP', 'LMT'),

];
