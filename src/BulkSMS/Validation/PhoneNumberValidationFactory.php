<?php


namespace Loecos\Bulksms\BulkSMS\Validation;


use Loecos\Bulksms\BulkSMS\Validation\Enums\MobileOperator;
use Loecos\Bulksms\BulkSMS\Validation\MobileOperator\OM;

class PhoneNumberValidationFactory
{
    /**
     * @param String $provider
     * @return IPhoneNumberValidation
     */
    public static function makeValidator(String $provider): IPhoneNumberValidation
    {
        switch($provider)
        {
            case MobileOperator::OM:
                return new OM();
            case MobileOperator::MOMO:
                return new MOMO();
            case MobileOperator::EUM:
                return new EUM();
        }
    }

}
