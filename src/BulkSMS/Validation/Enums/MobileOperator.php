<?php


namespace Loecos\Bulksms\BulkSMS\Validation\Enums;
use ReflectionClass;

abstract class MobileOperator extends Enum
{
    const LMT= "LMT";
}
abstract class Enum {
    static function getKeys(){
        $class = new ReflectionClass(get_called_class());
        return array_keys($class->getConstants());
    }
}
