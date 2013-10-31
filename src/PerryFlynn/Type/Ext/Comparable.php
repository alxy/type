<?php

namespace PerryFlynn\Type\Ext;

/**
 * Type can casted to a string
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <christian@blechert.name>
 */
trait Comparable
{
   
   use Equalable;
   
   public function lt(Type $value)
   {
      return ($this->getValue()<$value->getValue());
   }
   
   public function le(Type $value)
   {
      return ($this->getValue()<=$value->getValue());
   }
   
   public function gt(Type $value)
   {
      return ($this->getValue()>$value->getValue());
   }
   
   public function ge(Type $value)
   {
      return ($this->getValue()>=$value->getValue());
   }
   
}
