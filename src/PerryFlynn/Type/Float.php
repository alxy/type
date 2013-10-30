<?php

namespace PerryFlynn\Type;

class Int extends StringableType
{
   
   public function isValid($value) 
   {
      return is_float($value);
   }
   
}
