<?php

namespace PerryFlynn\Type;

abstract class StringableType extends Type
{
   
   public function toString() {
      return "".$this->GetValue();
   }
   
}
