<?php

namespace PerryFlynn\Type\Ext;

/**
 * Type can casted to a string
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <git@anymail.net>
 */
trait Stringable
{


   /**
    * Cast the value to a string
    * @return string
    */
   public function toString() {
      return "".$this->GetValue();
   }


}
