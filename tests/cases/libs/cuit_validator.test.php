<?php

class CuitValidatorTestCase extends CakeTestCase {

	function testIsValid() {

		App::import('libs', 'CuitValidator.CuitValidator');

		$this->assertTrue(CuitValidator::isValid('20-06128586-6'));
		$this->assertTrue(CuitValidator::isValid('30-52165353-8'));
		$this->assertTrue(CuitValidator::isValid('27-02661068-6'));
		$this->assertTrue(CuitValidator::isValid('23-13791731-9'));
		$this->assertTrue(CuitValidator::isValid('30-62384793-0'));

		$this->assertFalse(CuitValidator::isValid('30-62384793-1'));
		$this->assertFalse(CuitValidator::isValid('27-02661068-7'));
		$this->assertFalse(CuitValidator::isValid('27-02660068-6'));
		$this->assertFalse(CuitValidator::isValid('wareva'));
		$this->assertFalse(CuitValidator::isValid('30521653538'));
	}

}