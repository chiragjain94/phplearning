<h1><?php

    #https://www.php.net/manual/en/language.variables.php
    //Single line COmment
    #Single line COmment
    /*
    Multi Line Comment
    */

    #Variables
    /*
    - Prefix $
    - Starts with alphabets or an underscore
    - Case Sensitive
    - Only letters, numbers and underscores
    */

    #Data Types
    /*
    String
    Int
    Floats
    Booleans
    Arrays
    NULL  
    Object
    Resource
    */

    print 'Hello World';
    echo 'Hello World'; //faster

    $num1 = 4;
    $num2 = 5;
    $sum = $num1 + $num2;
    echo $sum;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2;  //dot . works as + for strings
    echo $greeting;

    $greeting2 = "$string1 $string2"; //using double quotes, easier way to concet strings
    echo $greeting2;

    $string3 = "They're here";  // Using \ to print ' 
    $string4 = "They\"re here";
    $string5 = 'They\'re here';

    $float1 = 5.3;
    $bool1 = true;

    //constant
    define('GREETING', 'Hello Guys', true); //true to access constant without case sensitive.

    echo GREETING;
    echo greeting;
    ?>
</h1>