<?php

namespace PerryFlynn\Type;

/**
 * Typesafe float
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <git@anymail.net>
 * @method void __construct(float $value) Create a float object
 * @property-write float $_ The float value
 */
class Float extends StringableType
{

   use Ext\Comparable;
   use Ext\Stringable;


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
