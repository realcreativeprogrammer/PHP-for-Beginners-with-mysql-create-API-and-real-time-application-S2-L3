<?php
$mydouble=1.2;
$myint=2;

echo gettype($mydouble);
echo '<br>';
echo gettype($myint);
echo '<br>';

echo $mydouble.'+'.$myint.'= ';

$x=$mydouble + $myint;
echo $x;
echo gettype($x);


?>