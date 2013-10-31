<?php

namespace PerryFlynn\Type\Ext;

/**
 * Compare numeric with another type property
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <git@anymail.net>
 */
trait Comparable
{

   use Equalable;


   /**
    * Is the value lower than the given value
    * @param \PerryFlynn\Type\Type $value
    * @return bool
    */
   public function lt(\PerryFlynn\Type\Type $value)
   {
      return ($this->getValue()<$value->getValue());
   }


   /**
    * Is the value lower than or equal the given value
    * @param \PerryFlynn\Type\Type $value
    * @return bool
    */
   public function le(\PerryFlynn\Type\Type $value)
   {
      return ($this->getValue()<=$value->getValue());
   }


   /**
    * Is the value greater than the given value
    * @param \PerryFlynn\Type\Type $value
    * @return bool
    */
   public function gt(\PerryFlynn\Type\Type $value)
   {
      return ($this->getValue()>$value->getValue());
   }


   /**
    * Is the value greater than or equal the given value
    * @param \PerryFlynn\Type\Type $value
    * @return bool
    */
   public function ge(\PerryFlynn\Type\Type $value)
   {
      return ($this->getValue()>=$value->getValue());
   }


}
