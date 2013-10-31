<?php

namespace PerryFlynn\Type;

/**
 * Typesafe float
 * @method void __construct(float $value) Create a float object
 * @property-write float $_ The float value
 */
class Float extends StringableType
{
   
   /**
    * Check value with is_float()
    * @param float $value
    * @return bool
    */
   public function isValid($value) 
   {
      return is_float($value);
   }
   
}
