<?php

namespace PerryFlynn\Type;

/**
 * Typesafe int
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <git@anymail.net>
 * @method void __construct(int $value) Create a int object
 * @property-write int $_ The int value
 */
class Int extends StringableType
{

   use Ext\Comparable;
   use Ext\Stringable;


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
