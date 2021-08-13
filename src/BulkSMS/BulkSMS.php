<?php


namespace Loecos\Bulksms\BulkSMS;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Loecos\Bulksms\BulkSMS\Validation\PhoneNumberValidationFactory;
use Loecos\Bulksms\Configuration;

class BulkSMS extends Client
{

   private $configuration;

   public function __construct(Configuration $configuration)
   {
       $this->configuration = $configuration;
       parent::__construct();
   }

   public function sendMessage($number,$message)
   {
       $params = [
           'api_key' => $this->configuration->getApiKey(),
           'password' => $this->configuration->getPassword(),
           'message' => $message,
           'sender' => $this->configuration->getSender(),
           'phone' => $this->validated($number)

       ];
       try {
           $response = $this->post($this->configuration->getBaseEndpoint(), ['form_params' => $params]);
       } catch (GuzzleException $e) {
           throw new RequestException($e->getMessage());
       }
       return  json_decode($response->getBody()->getContents());
   }

   private function validated($number)
   {
       $validator = PhoneNumberValidationFactory::makeValidator($this->configuration->getMobileSp());
       return $validator->validated($number);
   }

}
