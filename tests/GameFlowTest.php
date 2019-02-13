<?php

namespace Dogs\Tests;

use PHPUnit\Framework\TestCase;
use function Dogs\gameFlow;

class GameFlowTest extends TestCase
{
	protected $params;

	protected function setUp()
	{
		$this->params = ['sound', 'hunt'];
	}

	public function testCountAndCorrectParams():void
	{
		$falseInputParams = ['sound', 'hunt', 'jump', 'run', 'sleep', 'sit'];
		$this->assertEquals(gameFlow($falseInputParams), 'You input more, then 1 command or your command is not correct');

	}
}