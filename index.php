<?php

require_once('Calculator.php');

$n;	//input

$arr=Array();

$arr=explode(",",$n);

$calc=new Calculator();

$calc->add($n,$arr);

$calc->getTotal("<br>Sum");

$calc->sub($n,$arr);

$calc->getTotal("<br>Difference");

$calc->product($n,$arr);

$calc->getTotal("<br>Product");

$calc->quotient($n,$arr);

$calc->getTotal("<br>Quotient");


?>