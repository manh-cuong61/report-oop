<?php

class Student 
{
    static $name = 'Nguyễn Mạnh Cường';
    
    static function getName()
    {
        return self::$name;
    }
}

echo Student::$name;

echo Student::getName();