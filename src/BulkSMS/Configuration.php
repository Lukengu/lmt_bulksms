<?php


namespace Loecos\Bulksms;


use Loecos\Bulksms\BulkSMS\Exceptions\ConfigurationException;

class Configuration
{

    private $base_endpoint;
    private $api_version;
    private $api_key;
    private $api_password;
    private $sender;
    private $mobile_sp;


    public function __construct()
    {
        $config = config('bulksms');
        if(!$config) {
            throw new ConfigurationException("Configuration not set");
        }

        if(!isset($config['base_endpoint'])){
            throw new ConfigurationException("Base Api Url required");
        }
        $this->base_endpoint = $config['base_endpoint'];

        if(!isset($config['api_key'])){
            throw new ConfigurationException("Api key required");
        }
        $this->api_key = $config['api_key'];

        if(!isset($config['api_key'])){
            throw new ConfigurationException("Api key required");
        }


        if(!isset($config['api_password'])){
            throw new ConfigurationException("Api Password");
        }
        $this->api_password = $config['api_password'];

        if(!isset($config['api_version'])){
            throw new ConfigurationException("Api Version is required");
        }
        $this->api_version = $config['api_version'];
        if(!isset($config['mobile_sp'])){
            throw new ConfigurationException("Service provider required");
        }
        $this->mobile_sp = $config['mobile_sp'];
        $this->base_endpoint = sprintf($this->base_endpoint, $this->api_version);

    }

    /**
     * @return string
     */
    public function getBaseEndpoint()
    {
        return $this->base_endpoint;
    }



    /**
     * @return mixed
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }



    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->api_key;
    }



    /**
     * @return mixed
     */
    public function getApiPassword()
    {
        return $this->api_password;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return mixed
     */
    public function getMobileSp()
    {
        return $this->mobile_sp;
    }




}
