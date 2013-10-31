PHP Typehinting without PECL SPL_Types Extension or any other thrid party extension.

Basic usage
-----------

```php
$mynumber = new \PerryFlynn\Type\Int(42);
$mynumber->_ = "45"; // UnexpectedValueException, no string allowed
echo $mynumber; // string(2) "42";
```

```php
$mystring = new \PerryFlynn\Type\String("Hello World");
$mystring->_ = "My new String";
$mystring->_ = 42; // UnexpectedValueException, no int allowed
var_dump($mystring->contains(" new")); // true
$myanotherstring = $mystring->replace("new", "old"); // "My old String"
```

Nullable Types
--------------

```php
$mynullable = new \PerryFlynn\Type\Nullable(null);
var_dump($mynullable->hasValue()); // false
$mynullable->_ = new \PerryFlynn\Type\String("Hello World");
var_dump($mynullable->hasValue()); // true
var_dump($mynullable->_->_); // string(11) "Hello World"
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
   return "The given string \"".$mystring->_."\" is ".$mystring->length()." characters long.";
}

doAnything("Test"); // work
doAnything(42); // fatal error
```

Class structure
---------------

* Type
  * Bool
  * Nullable
  * StringableType
    * Double
    * Float
    * Int
  * String
