<?php


namespace Loecos\Bulksms\BulkSMS\Validation;


use Loecos\Bulksms\BulkSMS\Validation\Enums\MobileOperator;
use Loecos\Bulksms\BulkSMS\Validation\MobileOperator\LMT;

class PhoneNumberValidationFactory
{
    public function makeValidator(String $provider): IPhoneNumberValidation
    {
        switch($provider)
        {
            case MobileOperator::LMT:
                return new LMT();
        }
    }

}
