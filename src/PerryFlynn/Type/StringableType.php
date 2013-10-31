<?php

namespace PerryFlynn\Type;

/**
 * Type can casted to a string
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <christian@blechert.name>
 */
abstract class StringableType extends Type
{
   
   /**
    * Cast the value to a string
    * @return string
    */
   public function toString() {
      return "".$this->GetValue();
   }
   
}
