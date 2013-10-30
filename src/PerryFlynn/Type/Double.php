<?php

namespace PerryFlynn\Type;

class Double extends StringableType
{
   
   public function isValid($value) 
   {
      return is_double($value);
   }
   
}
