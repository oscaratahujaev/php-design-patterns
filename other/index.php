<?php

/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 07.09.2017
 * Time: 16:09
 */
class myClass
{
    public $age;
    private $code = "Coding";

    function __construct($age)
    {
        $this->age = $age;
    }

    function __clone()
    {
        // срабатывает при создании копии объекта,
        // например: $a = clone $b;
    }

    function __destruct()
    {
        // срабатывает при удалении объекта, т.е. при unset($object);
    }

    function __call($methodName, $args)
    {
        // срабатывает при обращении к несуществующему методу объекта
    }

    function __toString()
    {
        return $this->code . ": " . $this->age;
    }
}

$a = new myClass(5);
$b = clone $a;
//$b->age = 4;

echo "{$a->age}<br>";
echo "{$b->age}<br>";

$logger = function ($args) {
    echo "Hello {$args['name']}, your age is {$args['age']}<br>";
};

call_user_func($logger, ["name" => "Oscar", "age" => 5]);
call_user_func($logger, ["name" => "Maldini", "age" => 4]);

?>



