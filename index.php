<?php

use rogerforner\Hello\SayHello;
//use HelloWorld\SayHello as SayHello2;

//trobarà qualsevol classe del projecte
require __DIR__ .'/vendor/autoload.php'; //és més robust.

//require 'src/SayHello.php';

//$sayhello = new \HelloWorld\SayHello();
//
//echo $sayhello->world();

echo \HelloWorld\SayHello::world();

echo SayHello::world();