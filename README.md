PHP Typehinting without PECL SPL_Types Extension.

Basic usage
-----------

```php
$mynumber = new \PerryFlynn\Type\Int(42);
$mynumber->value = "45"; // UnexpectedValueException, no string allowed
echo $mynumber; // string(2) "42";
```

```php
$mystring = new \PerryFlynn\Type\String("Hello World");
$mystring->value = "My new String";
$mystring->value = 42; // UnexpectedValueException, no int allowed
var_dump($mystring->contains(" new")); // true
$myanotherstring = $mystring->replace("new", "old"); // "My old String"
```

Nullable Types
--------------

```php
$mynullable = new \PerryFlynn\Type\Nullable(null);
var_dump($mynullable->hasValue()); // false
$mynullable->value = new \PerryFlynn\Type\String("Hello World");
var_dump($mynullable->hasValue()); // true
var_dump($mynullable->value->value); // string(11) "Hello World"
$mynullable->setNull();
var_dump($mynullable->hasValue()); // false
var_dump($mynullable->getValue()); // null
```

Force a function parameter to be a string
-----------------------------------------

```php
use \PerryFlynn\Type\String;

function doAnything(String $mystring)
{
   return "The given string \"".$mystring->value."\" is ".$mystring->length()." characters long.";
}

doAnything("Test"); // work
doAnything(42); // fatal error
```

Class structure
---------------

* Type
  * StringableType
    * Double
    * Float
    * Int
  * String
  * Nullable
