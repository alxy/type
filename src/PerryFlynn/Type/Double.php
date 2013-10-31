<?php

namespace PerryFlynn\Type;

/**
 * Typesafe double
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt GPL v3
 * @author Christian Blechert <christian@blechert.name>
 * @method void __construct(double $value) Create a double object
 * @property-write double $_ The double value
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
