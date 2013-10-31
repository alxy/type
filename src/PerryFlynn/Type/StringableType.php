<?php

namespace PerryFlynn\Type;

/**
 * Type can casted to a string
 */
abstract class StringableType extends Type
{
   
   /**
    * Cast the value to a string
    * @return string
    */
   public function toString() {
      return "".$this->GetValue();
   }
   
}
