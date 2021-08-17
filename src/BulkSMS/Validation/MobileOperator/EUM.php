<?php


namespace Loecos\Bulksms\BulkSMS\Validation\MobileOperator;


use Loecos\Bulksms\BulkSMS\Validation\Exceptions\ValidationException;
use Loecos\Bulksms\BulkSMS\Validation\IPhoneNumberValidation;

class EUM implements IPhoneNumberValidation
{
    /**
     * @param $number
     * @return string
     * @throws ValidationException
     */
    public function validated($number): string
    {
        $number = preg_replace('/\+/', "",$number);
        if(!preg_match('/^((237)?(6([5-9][0-9]{7}))|((242|243)[0-9]{6}))$/', $number)){
            throw new ValidationException("Invalid number format");
        }
        return $number;

    }
}
