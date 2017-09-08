<?php
/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 07.09.2017
 * Time: 17:52
 */

namespace myNamespace\first;

use myNamespace\my\MyClass;

class FirstClass extends MyClass
{
    var $number;

    function __construct($number)
    {
        $this->number = $number;
    }

    function printObject()
    {

    }

    function getOptions()
    {

    }
}

