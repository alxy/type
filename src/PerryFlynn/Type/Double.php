<?php

namespace PerryFlynn\Type;

/**
 * Typesafe double
 * @method void __construct(double $value) Create a double object
 */
class Double extends StringableType
{
   
   /**
    * Check value with is_double()
    * @param double $value
    * @return bool
    */
   public function isValid($value) 
   {
      return is_double($value);
   }
   
}
