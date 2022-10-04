<?php
abstract class ParentClass {
    public static string $title = 'ini Class'. __CLASS__;
    public static function getTittle()
    {
        return new static;
    }
    public static function getself()
    {
        return new self;
    }
}

class ChildClass extends ParentClass{

    public static string $title = 'ini class'.__CLASS__;

    public static function getTitle(){
        return Coba::$title;
    }

    public static function getself()
    {
    return ChildClass::getTitle();
        }
    }

    class Coba {
        public static $title = 'ini class' . __CLASS__;

    }
echo ChildClass::getTitle();
echo '<hr>';
echo ChildClass::getself();