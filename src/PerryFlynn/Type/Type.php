<?php

namespace PerryFlynn\Type;


/**
 * Base class for all Types
 * @license https://github.com/perryflynn/type/blob/master/LICENSE.txt AGPL v3
 * @author Christian Blechert <christian@blechert.name>
 */
abstract class Type
{

   /**
    * Contains the object value
    * @var mixed
    */
   private $value;

   
   /**
    * Initialize the object
    * @param mixed $value
    */
   function __construct($value)
   {
      $this->setValue($value);
   }

   
   /**
    * Magic method for isset()
    * @link http://php.net/manual/en/language.oop5.magic.php Magic methods
    * @param string $name
    * @return bool
    */
   function __isset($name)
   {
      return isset($this->$name);
   }

   /**
    * Magic method for unset()
    * @link http://php.net/manual/en/language.oop5.magic.php Magic methods
    * @param string $name
    */
   function __unset($name)
   {
      throw new NotSupportedException("Unset not supported");
   }

   /**
    * Magic method for getting a property
    * @link http://php.net/manual/en/language.oop5.magic.php Magic methods
    * @param string $name
    * @return mixed
    */
   function __get($name)
   {
      if($name!="_")
      {
         throw new \BadMethodCallException();
      }
      return $this->getValue();
   }

   /**
    * Magic method for setting a property
    * @link http://php.net/manual/en/language.oop5.magic.php Magic methods
    * @param string $name
    * @param mixed $value
    * @return mixed
    */
   function __set($name, $value)
   {
      if($name!="_")
      {
         throw new \BadMethodCallException();
      }
      $this->setValue($value);
   }

   /**
    * Magic method to cast the object to a string
    * @link http://php.net/manual/en/language.oop5.magic.php Magic methods
    * @return string
    */
   function __toString()
   {
      return $this->ToString();
   }

   /**
    * Get the objects value
    * @return mixed
    */
   public function getValue()
   {
      return $this->value;
   }

   /**
    * Set the objects value
    * @param mixed $value
    * @throws \UnexpectedValueException
    */
   public function setValue($value)
   {
      if(is_null($value))
      {
         throw new \UnexpectedValueException("Null is not allowed. Use Nullable wrapper instead.");
      }
      elseif(!$this->isValid($value))
      {
         throw new \UnexpectedValueException("Unexpected value");
      }
      $this->value = $value;
   }

   /**
    * Cast the object to a string helper
    * @throws NotSupportedException
    */
   public function toString()
   {
      throw new NotSupportedException("Type casting to string is not implemented");
   }

   /**
    * Must declared in each Type to validate the objects value
    * @param mixed $value
    * @return bool
    */
   abstract public function isValid($value);

}

?>
