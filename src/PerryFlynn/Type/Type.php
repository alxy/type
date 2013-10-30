<?php

namespace PerryFlynn\Type;

abstract class Type
{

   private $Value;

   function __construct($value)
   {
      $this->SetValue($value);
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
      return $this->Value;
   }

   function __set($name, $value)
   {
      if(strtolower($name)!="value")
      {
         throw new \BadMethodCallException();
      }
      $this->SetValue($value);
   }

   function __toString()
   {
      return $this->ToString();
   }

   public function GetValue()
   {
      return $this->Value;
   }

   public function SetValue($value)
   {
      if(is_null($value))
      {
         throw new \UnexpectedValueException("Null is not allowed. Use Nullable wrapper instead.");
      }
      elseif(!$this->isValid($value))
      {
         throw new \UnexpectedValueException("Unexpected value");
      }
      $this->Value = $value;
   }

   public function ToString()
   {
      throw new NotSupportedException("Type casting to string is not implemented");
   }

   abstract public function isValid($value);

}

?>
