<?php

namespace PerryFlynn\Type;

/**
 * Typesafe string
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <git@anymail.net>
 * @method void __construct(string $value) Create a string object
 * @property-write string $_ The string value
 */
class String extends Type
{

   use Ext\Stringable;
   use Ext\Equalable;


   /**
    * Check value with is_string()
    * @param int $value
    * @return bool
    */
   public function isValid($value)
   {
      return is_string($value);
   }


   /**
    * Get value for object casting to string
    * @return string
    */
   public function toString()
   {
      return $this->getValue();
   }


   /**
    * Length of value
    * @return int
    */
   public function length()
   {
      return strlen($this->getValue());
   }


   /**
    * Is value empty
    * @return bool
    */
   public function isEmpty()
   {
      return ($this->length()<1);
   }


   /**
    * Contains value the given substring
    * @param \PerryFlynn\Type\String $substring
    * @return bool
    */
   public function contains(String $substring)
   {
      return (strpos($this->getValue(), $substring->getValue())!==false);
   }


   /**
    * Replace a substring
    * @param \PerryFlynn\Type\String $search
    * @param \PerryFlynn\Type\String $replace
    * @return \PerryFlynn\Type\String
    */
   public function replace(String $search, String $replace)
   {
      return new String(str_replace($search->getValue(), $replace->getValue(), $this->getValue()));
   }


   /**
    * String in upper case characters
    * @return \PerryFlynn\Type\String
    */
   public function toUpper()
   {
      return new String(strtoupper($this->getValue()));
   }


   /**
    * String in lower case characters
    * @return \PerryFlynn\Type\String
    */
   public function toLower()
   {
      return new String(strtolower($this->getValue()));
   }


}