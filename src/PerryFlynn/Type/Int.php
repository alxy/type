<?php

namespace PerryFlynn\Type;

/**
 * Typesafe int
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt GPL v3
 * @author Christian Blechert <christian@blechert.name>
 * @method void __construct(int $value) Create a int object
 * @property-write int $_ The int value
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
