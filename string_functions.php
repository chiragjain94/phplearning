<?php

# substr()
# Returns a portion of a string
$output = substr('Hello', 1, 3);  //start and end part
echo $output;
echo " <br>";

#strlen() - return lenght of string
$output = strlen('Hello');
echo $output;
echo " <br>";

#strpos() - position of first occurence of  string
$output = strpos('Hello World', 'o');
echo $output;
echo " <br>";

#strrpos() - position of last occurence of  string
$output = strrpos('Hello World', 'o');
echo $output;
echo " <br>";

#trim() - trims whitespace
$text = "Hello World      ";
echo strlen($text);
$trimmed = trim($text);
echo $trimmed;
echo strlen($trimmed);
echo " <br>";

#strtoupper() - upper case
echo strtoupper("Hello World"); //HELLO WORLD
echo " <br>";

#strtolower() - lower case
echo strtolower("Hello World"); //hello world
echo " <br>";

#ucwords() - Capitalize first letter of every word.
echo ucwords("hello world"); //Hello World
echo " <br>";

#str_replace() - replace a string.
echo str_replace('World', 'Everyone', "Hello World");  //Hello Everyone
echo " <br>";

#is_string() - check if string
#1 is string else it return nothing (null)

#gzcompress() - compress long string
#gzuncompress() - uncompress compressed string
