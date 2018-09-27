<?php

require '../vendor/autoload.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;

$sayHello= new SayHello();
$hello= new Hello();

echo $sayHello->world();
echo $hello->talk();;



