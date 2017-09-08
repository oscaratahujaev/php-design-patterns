<?php
/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 07.09.2017
 * Time: 17:44
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Namespace autoload</title>
</head>
<body>
<?php

include "../autoload.php";

use myNamespace\first\FirstClass;
use myNamespace\my\MyClass;


$a = new FirstClass(5);

$b = new MyClass();

echo "<pre>";

print_r(get_class_methods('myNamespace\first\FirstClass'));

//print_r(get_declared_classes());

echo get_parent_class('myNamespace\first\FirstClass') . "<br>";

print_r(get_include_path());

?>


</body>
</html>
