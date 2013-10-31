<?php

namespace PerryFlynn\Type\Ext;

/**
 * Type can casted to a string
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <christian@blechert.name>
 */
trait Equalable
{
   
   /**
    * Equalize against another type
    * @return bool
    */
   public function eq(\PerryFlynn\Type\Type $value, $strict=true) {
      if($strict!==true)
      {
         return ($this->getValue()==$value->getValue());
      }
      else
      {
         return ($this->getValue()===$value->getValue());
      }
   }
   
}
