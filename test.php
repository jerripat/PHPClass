<?php

$file = $_SERVER['PHP_SELF'];
$user = $_SERVER['HTTP_USER_AGENT'];
$address = $_SERVER['REMOTE_ADDR'];
$myString = 'http://mysite.com';
/*
$n = 5678763;
$n = number_format($n);
echo($n);
define('USERNAME', $user);
echo "hello, " .USERNAME;
*/
printf("The US has %d states and %d territories", 50,10);
?>