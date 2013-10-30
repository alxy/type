<?php

function __autoload($classname)
{
   $classname = str_replace("\\", "/", $classname);
   $file = "../src/".$classname.".php";
   if(is_file($file))
   {
      include($file);
   }
}

header("Content-Type: text/plain");

$a = new \PerryFlynn\Type\String("Hello World! This is a Test!");

var_dump($a);
echo "\n\n";

echo "Test A: Try to change the value to a integer:\n";
try {
   $a->Value = 42;
}
catch(UnexpectedValueException $ex)
{
   echo "Exception! Damn... Not a string...\n";
   var_dump($ex->getMessage());
}

echo "\n\n";


echo "Test B: Contains the sting a substring?\n";
echo "This "; var_dump($a->Contains(new \PerryFlynn\Type\String("This")));
echo "Not in String "; var_dump($a->Contains(new \PerryFlynn\Type\String("Not in String")));

echo "\n\n";


