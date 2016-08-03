<?php

namespace PSRLinter;

class LinterTest extends \PHPUnit_Framework_TestCase
{
	public function testIsGoodCode() {
		$linter = new Linter();
		$this->assertTrue($linter->isGood('good'));
		$this->assertFalse($linter->isGood('notGood'));
		$this->assertFalse($linter->isGood(null));
	}
}