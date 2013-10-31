<?php

namespace PerryFlynn\Type;

/**
 * Typesafe bool
 * @method void __construct(bool $value) Create a bool object
 * @property-write bool $_ The bool value
 */
class Bool extends StringableType
{
   
   /**
    * Check value with is_bool()
    * @param double $value
    * @return bool
    */
   public function isValid($value) 
   {
      return is_bool($value);
   }
   
   
   /**
    * Is the value true
    * @return bool
    */
   public function isTrue()
   {
      return $this->getValue()===true;
   }
   
   
   /**
    * Is the value false
    * @return bool
    */
   public function isFalse()
   {
      return $this->getValue()===false;
   }
   
}
