<?php

class App
{
    private static $app=5;

    private function __construct()
    {
    }
    public static function get()
    {
        if(!self::$app)
        {
            self::$app=new App();
        }

            return self::$app;
    }
    public function foo()
    {
        echo  "hello world welcome";
    }
}

echo App::get();


















//class Student
//{
//    private static $name;
//
//
//
//    public static function foo()
//    {
//        return "hello world <br>";
//    }
//    public function __construct($name,$age)
//    {
//        self::$name=$name;
//        echo  $this->$age=$age;
//    }
//
//    public function getname()
//    {
//        return self::$name;
//    }
//    public function getage()
//    {
//        return $this->age;
//    }
////    public function getage()
////    {
////        return $this->$age;
////    }
//
//
//
//}
//$user=new Student("hoda",30);
//echo $user->getname();
//echo $user->getage();
//



