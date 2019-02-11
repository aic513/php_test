<?php

namespace Dogs\Tests;

use PHPUnit\Framework\TestCase;

class SomeTest extends TestCase
{
	public function testDefault()
	{
		$ok = 'Ok!';
		$this->assertEquals('Ok!', $ok);
	}
}