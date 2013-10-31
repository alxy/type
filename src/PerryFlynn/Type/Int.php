<?php

namespace PerryFlynn\Type;

/**
 * Typesafe int
 * @method void __construct(int $value) Create a int object
 */
class Int extends StringableType
{
   
   /**
    * Check value with is_int()
    * @param int $value
    * @return bool
    */
   public function isValid($value) 
   {
      return is_int($value);
   }
   
}
