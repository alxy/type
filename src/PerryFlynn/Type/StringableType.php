<?php

namespace PerryFlynn\Type;

abstract class StringableType extends Type
{
   
   public function ToString() {
      return "".$this->GetValue();
   }
   
}
