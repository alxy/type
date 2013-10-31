<?php

namespace PerryFlynn\Type\Test;

use PerryFlynn\Type\Bool;
use PerryFlynn\Type\Int;

require_once 'vendor/phpunit/phpunit/PHPUnit/Framework/Assert/Functions.php';

class TypeTest extends \PHPUnit_Framework_TestCase
{
	public function testBool() {
		$bool = new Bool(true);
		assertEquals($bool->_, true);
	}

	/**
	 * @expectedException UnexpectedValueException
	 */
	public function testBoolException() {
		$bool = new Bool(true);
		$bool->_ = 1;
	}
	
}
