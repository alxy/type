<?php

namespace PerryFlynn\Type;

class Nullable extends Type
{

   public function isValid($value) {
      return (($value instanceof $value || is_null($value)) && !($value instanceof Nullable));
   }

   public function HasValue()
   {
      return ($this->GetValue()===null);
   }

   public function SetNull()
   {
      $this->SetValue(null);
   }

}
