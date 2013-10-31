<?php

namespace PerryFlynn\Type;

/**
 * Nullable type
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt GPL v3
 * @author Christian Blechert <christian@blechert.name>
 * @property-write Type $_ Nullable Type Object
 */
class Nullable extends Type
{

   /**
    * Check value with is_double()
    * @param double $value
    * @return bool
    */
   public function isValid($value) {
      return (($value instanceof $value || is_null($value)) && !($value instanceof Nullable));
   }

   /**
    * Check value for null
    * @return type
    */
   public function hasValue()
   {
      return ($this->GetValue()!==null);
   }

   /**
    * Set Value to null
    */
   public function setNull()
   {
      $this->SetValue(null);
   }

}
