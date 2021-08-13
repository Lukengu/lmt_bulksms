<?php


namespace Loecos\Bulksms\BulkSMS\Validation;


interface IPhoneNumberValidation
{
    public function validated($number): string;
}
