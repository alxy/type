<?php

namespace PerryFlynn\Type;

abstract class Type
{

   private $Value;

   function __construct($value)
   {
      $this->setValue($value);
   }

   function __isset($name)
   {
      return isset($this->$name);
   }

   function __unset($name)
   {
      throw new NotSupportedException("Unset not supported");
   }

   function __get($name)
   {
      if(strtolower($name)!="value")
      {
         throw new \BadMethodCallException();
      }
      return $this->getValue();
   }

   function __set($name, $value)
   {
      if(strtolower($name)!="value")
      {
         throw new \BadMethodCallException();
      }
      $this->setValue($value);
   }

   function __toString()
   {
      return $this->ToString();
   }

   public function getValue()
   {
      return $this->value;
   }

   public function setValue($value)
   {
      if(is_null($value))
      {
         throw new \UnexpectedValueException("Null is not allowed. Use Nullable wrapper instead.");
      }
      elseif(!$this->isValid($value))
      {
         throw new \UnexpectedValueException("Unexpected value");
      }
      $this->value = $value;
   }

   public function toString()
   {
      throw new NotSupportedException("Type casting to string is not implemented");
   }

   abstract public function isValid($value);

}

?>
