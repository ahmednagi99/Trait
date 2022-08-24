<?php

require "trait1.php";
require "trait2.php";
require "trait3.php";
require "allofcoffe.php";

$mcoffe=new \App\AllInOneCoffeMaker();
$mcoffe->makecoffe();
$mcoffe->makelattee();
$mcoffe->makecuppachino();
