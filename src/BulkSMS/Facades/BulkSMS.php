<?php


namespace Loecos\Bulksms\BulkSMS\Facades;
use Illuminate\Support\Facades\Facade;

class BulkSMS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bulksms';
    }

}
