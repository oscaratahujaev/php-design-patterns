<?php

/**
 * Created by PhpStorm.
 * User: a_atahujaev
 * Date: 07.09.2017
 * Time: 11:28
 */
require_once 'FileException.php';

class Conf
{
    private $file;
    private $xml;
    private $lastMatch;

    function __construct($file)
    {
        $this->file = $file;
        if (!file_exists($file)) {
            throw new FileException("Файл {$file} не найден \n");
        }

        $this->xml = simplexml_load_file($file);
    }

    function write()
    {
        if (!is_writable($this->file)) {
            throw new XmlException("Файл {$this->file} недоступен для записи\n");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    function get($str)
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if (count($matches)) {
            $this->lastMatch = $matches[0];
            return (string)$matches[0];
        }
        return null;
    }

    function set($key, $value)
    {
        if (!is_null($this->get($key))) {
            $this->lastMatch[0] = $value;
            return;
        }
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}