<?php


namespace Loecos\Bulksms\BulkSMS;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Loecos\Bulksms\BulkSMS\Exceptions\RequestException;
use Loecos\Bulksms\BulkSMS\Validation\PhoneNumberValidationFactory;
use Loecos\Bulksms\BulkSMS\Configuration;

class BulkSMS extends Client
{

   private $configuration;

    /**
     * BulkSMS constructor.
     * @param \Loecos\Bulksms\BulkSMS\Configuration $configuration
     */
   public function __construct(Configuration $configuration)
   {
       $this->configuration = $configuration;
       parent::__construct();
   }

    /**
     * @param $number
     * @param $message
     * @return mixed
     * @throws RequestException
     */

   public function sendMessage($number,$message)
   {
       $params = [
           'api_key' => $this->configuration->getApiKey(),
           'password' => $this->configuration->getApiPassword(),
           'message' => $message,
           'sender' => $this->configuration->getSender(),
           'phone' => $number

       ];
       try {
           $response = $this->post($this->configuration->getBaseEndpoint(), ['form_params' => $params]);
       } catch (GuzzleException $e) {
           throw new RequestException($e->getMessage());
       }
       return  json_decode($response->getBody()->getContents());
   }

    /**
     * @param $number
     * @return string
     */
   private function validated($number)
   {
       //$validator = PhoneNumberValidationFactory::makeValidator($this->configuration->getMobileSp());
      // return $validator->validated($number);
   }

}
