<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {
	public function test_addition() {
		$this->assertEquals(4, 2 + 2);
	}

	public function test_subtraction() {
		$this->assertEquals(1, 5 - 3);
	}
}
