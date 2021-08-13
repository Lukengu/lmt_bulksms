<?php


namespace Loecos\Bulksms\BulkSMS\Validation;


interface IPhoneNumberValidation
{
    /**
     * @param $number
     * @return string
     */
    public function validated($number): string;
}
