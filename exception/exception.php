<?php

/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 07.09.2017
 * Time: 10:19
 */
require_once 'Conf.php';

try {
    $xml = new Conf('myXm2.xml');
    $xml->set('email', 'what@mail.ru');
    $xml->write();
} catch (FileException $e) {
    echo $e->getMessage();
} catch (XmlException $e) {
    echo $e->getMessage();
}



