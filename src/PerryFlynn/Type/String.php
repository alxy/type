<?php

namespace PerryFlynn\Type;

class String extends Type
{

   public function isValid($value)
   {
      return is_string($value);
   }

   public function toString()
   {
      return $this->getValue();
   }

   public function length()
   {
      return strlen($this->getValue());
   }

   public function isEmpty()
   {
      return ($this->length()<1);
   }

   public function contains(String $substring)
   {
      return (strpos($this->getValue(), $substring->getValue())!==false);
   }

   public function replace(String $search, String $replace)
   {
      return new String(str_replace($search->getValue(), $replace->getValue(), $this->getValue()));
   }
   
   public function toUpper()
   {
      return new String(strtoupper($this->getValue()));
   }
   
   public function toLower()
   {
      return new String(strtolower($this->getValue()));
   }

}