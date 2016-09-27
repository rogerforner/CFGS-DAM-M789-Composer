<?php

use rogerforner\SayHello;
//use HelloWorld\SayHello as SayHello2;

//trobarà qualsevol classe del projecte
require 'vendor/autoload.php';

require 'src/SayHello.php';

//$sayhello = new \HelloWorld\SayHello();
//
//echo $sayhello->world();

echo \HelloWorld\SayHello::world();

echo SayHello::world();