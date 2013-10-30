PHP Typehinting without PECL SPL_Types

Basic usage
-----------

```php
$mynumber = new \PerryFlynn\Type\Int(42);
$mynumber->Value = "45"; // UnexpectedValueException
echo $mynumber; // string(2) "42";
```

```php
$mystring = new \PerryFlynn\Type\String("Hello World");
$mystring->Value = "My new String";
$mystring->Value = 42; // UnexpectedValueException
$mystring->Contains(" new"); // true
$myanotherstring = $mystring->Replace("new", "old"); // "My old String"
```

Nullable Types
--------------

```php
$mynullable = new \PerryFlynn\Type\Nullable(null);
var_dump($mynullable->HasValue()); // false
$mynullable->value = new \PerryFlynn\Type\String("Hello World");
var_dump($mynullable->HasValue()); // true
var_dump($mynullable->Value->Value); // string(11) "Hello World"
$mynullable->SetNull();
var_dump($mynullable->HasValue()); // false
var_dump($mynullable->GetValue()); // null
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
