<?php


namespace Loecos\Bulksms\BulkSMS\Validation\MobileOperator;


use Loecos\Bulksms\BulkSMS\Validation\IPhoneNumberValidation;

class LMT implements IPhoneNumberValidation
{

    public function validated($number): string
    {
        $number = preg_replace('/\+/', "",$number);
        if(!preg_match('/^((237)?6((9[0-9]{7})|(5[5-9][0-9]{6})|(8[6-9][0-9]{6})))$/', $number)){
            throw new ValidationException("Invalid number format");
        }
        return $number;

    }
}
