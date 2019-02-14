<?php

namespace Dogs\Tests;

use function Dogs\getAnswer;
use PHPUnit\Framework\TestCase;
use function Dogs\gameFlow;
use function Dogs\checkDogType;
use function Dogs\checkDogAction;

class GameFlowTest extends TestCase
{
    public function dogTypeProvider(): array
    {
        return [
            [true, 'bin/dachshund'],
            [true, 'bin/mops'],
            [true, 'bin/plush-labrador'],
            [false, 'bin/husky'],
            [false, 'bin/poodle'],
        ];
    }

    public function dogActionProvider(): array
    {
        return [
            [true, 'sound'],
            [true, 'hunt'],
            [false, 'seat'],
        ];
    }

    /**
     * @dataProvider dogTypeProvider
     *
     * @param $input
     * @param $expected
     */
    public function testCheckDogType($expected, $input): void
    {
        $this->assertEquals($expected, checkDogType($input));
    }

    /**
     * @dataProvider dogActionProvider
     *
     * @param $expected
     * @param $input
     */
    public function testCheckDogAction($expected, $input): void
    {
        $this->assertEquals($expected, checkDogAction($input));
    }

    /**
     * @throws \Exception
     */
    public function testInputRightDataForGetAnswer(): void
    {
        $dataForMopsSound = [
            'bin/mops',
            'sound',
        ];

        $dataForPlushLabradorHunt = [
            'bin/plush-labrador',
            'hunt'
        ];

        $this->assertEquals(getAnswer($dataForMopsSound[0], $dataForMopsSound[1]), 'woof! woof! woof!');
        $this->assertEquals(getAnswer($dataForPlushLabradorHunt[0], $dataForPlushLabradorHunt[1]), 'Unfortunately, I\'m a toy. I can\'t hunting! ¯\_(ツ)_/¯ ');
    }

    /**
     * @throws \Exception
     */
    public function testInputFalseDataForGetAnswer()
    {
        $data = [
            'bin/mops',
            'seat',
        ];

        try {
            gameFlow($data);
            $this->fail('exception expected');
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }
}