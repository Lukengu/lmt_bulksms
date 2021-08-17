<?php


namespace Loecos\Bulksms\BulkSMS\Validation\Enums;
use ReflectionClass;

abstract class MobileOperator extends Enum
{
    const OM = "OM";
    const MOMO= "MOMO";
    const EUM = "EUM";
}
abstract class Enum {
    static function getKeys(){
        $class = new ReflectionClass(get_called_class());
        return array_keys($class->getConstants());
    }
}
