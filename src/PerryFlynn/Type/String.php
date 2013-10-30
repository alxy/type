<?php

namespace PerryFlynn\Type;

class String extends Type
{

   public function isValid($value)
   {
      return is_string($value);
   }

   public function ToString()
   {
      return $this->GetValue();
   }

   public function Length()
   {
      return strlen($this->GetValue());
   }

   public function IsEmpty()
   {
      return ($this->Length()<1);
   }

   public function Contains(String $substring)
   {
      return (strpos($this->GetValue(), $substring->GetValue())!==false);
   }

   public function Replace(String $search, String $replace)
   {
      return new String(str_replace($search->GetValue(), $replace->GetValue(), $this->GetValue()));
   }

}