<?php

namespace PerryFlynn\Type;

/**
 * Typesafe double
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <git@anymail.net>
 * @method void __construct(double $value) Create a double object
 * @property-write double $_ The double value
 */
class Double extends StringableType
{

   use Ext\Comparable;
   use Ext\Stringable;


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
