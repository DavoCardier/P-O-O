<?php

class car {
    var $ruedas;
    var $color;
    var $motor;

function __construct(){      
$this->ruedas = 4;
$this->color = " "; 
$this->motor = 1600;
}
function arrancar(){ 
echo "estoy arrancando \n";
}
function girar(){ 
echo "estoy girando \n";
 }
function frenar() {
echo "estoy frenando \n";
}
$Aveo =new car();
$Cruz =new car();
$Vitara =new car();
}
