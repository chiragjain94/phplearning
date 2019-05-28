<?php

#https://www.php.net/manual/en/function.date.php

echo date('dmy');
echo date('l'); //day of week
echo date('d/m/y');

// Set time zone
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

echo date('d-m-Y H:i:s');
$timestamp = mktime(10, 14, 54, 6, 4, 1994);
echo date('d-m-Y H:i:s', $timestamp);

//string to date
$timestamp2 = strtotime('7:00 pm May 31 2019');
$timestamp3 = strtotime('next Sunday');
$timestamp4 = strtotime('tomorrow');
$timestamp5 = strtotime('+2 month');

echo date('d-m-Y H:i:s', $timestamp2);
echo date('d-m-Y H:i:s', $timestamp3);
echo date('d-m-Y H:i:s', $timestamp4);
echo date('d-m-Y H:i:s', $timestamp5);
