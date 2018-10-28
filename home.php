<?php
/**
 * Created by PhpStorm.
 * User: _comGoon
 * Date: 10/28/18
 * Time: 2:31 AM
 */

include 'rectangle.php';
include 'triangle.php';
include 'cercle.php';
include 'noForm.php';



$obj = new rectangle();
$obj->setLong(4);
$obj->setLarg(3);
$obj->setNbrCote(4);

$obj->formeObj();


echo "<br>";
echo "<hr>";

$obj2 = new triangle();

$obj2->setNbrCote(3);
$obj2->setCote1(5);
$obj2->setCote2(10);
$obj2->setCote3(15);
$obj2->formeObj();



echo "<br>";
echo "<hr>";

$obj3 = new cercle();

$obj3->setNbrCote(0);
$obj3->setRayon(5);
$obj3->formeObj();



echo "<br>";
echo "<hr>";

$obj4 = new noForm();

$obj4->formeObj();


echo "<br>";
echo "<br>";
echo "<hr>";
echo "<a href='https://about.me/comgoon' target='_blank'>about me! </a>";