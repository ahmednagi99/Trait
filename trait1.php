<?php
namespace App;
trait CoffeMaker
{
    public function makecoffe()
    {
        echo static ::class ."making coffe"."<br>";
    }

}