<?php

class BaseClass
{
  public function test()
  {
    echo "BaseClass::test() called<br>";
  }

  final public function moreTesting()
  {
    echo "BaseClass::moreTesting() called<br>";
  }
}

class ChildClass extends BaseClass
{
  //Error show on window - 
  //( ! ) Fatal error: Cannot override final method BaseClass::moreTesting() in 
  //C:\wamp64\www\phplearning\finalkeyword.php on line 22
  // public function moreTesting()
  // {
  //   echo "ChildClass::moreTesting() called<br>";
  // }
}

$abc = new ChildClass();
echo $abc->moreTesting();
echo $abc->test();
