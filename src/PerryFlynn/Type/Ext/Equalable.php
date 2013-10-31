<?php

namespace PerryFlynn\Type\Ext;

/**
 * Compare with another type property
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <git@anymail.net>
 */
trait Equalable
{


   /**
    * Equals with another type value
    * @return bool
    */
   public function eq(\PerryFlynn\Type\Type $value, $strict=true) {
      if($strict!==true)
      {
         return ($this->getValue()==$value->getValue());
      }
      else
      {
         return ($this->getValue()===$value->getValue() && get_class($this)===get_class($value));
      }
   }


   /**
    * Not equals with another type value
    * @return bool
    */
   public function ne(\PerryFlynn\Type\Type $value, $strict=true)
   {
      return !$this->eq($value, $strict);
   }


}
