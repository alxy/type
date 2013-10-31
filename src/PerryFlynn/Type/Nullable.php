<?php

namespace PerryFlynn\Type;

class Nullable extends Type
{

   public function isValid($value) {
      return (($value instanceof $value || is_null($value)) && !($value instanceof Nullable));
   }

   public function hasValue()
   {
      return ($this->GetValue()===null);
   }

   public function setNull()
   {
      $this->SetValue(null);
   }

}
