<?php

namespace Dogs;

use function \cli\line;
use function cli\prompt;

function run()
{
    greeting();
    getDescription();
}

function greeting()
{
    line('Welcome to the dog farm!');
}

function getDescription()
{
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line('Now you are start to play a simple php game!');
    line('You can see  a list of our dogs below:' . PHP_EOL);
    line(implode(PHP_EOL, getListOfDogs()) . PHP_EOL);
    line('You can choice your favorite dog and play with it!');
    line('Good luck, %s!', $name);
}

function getListOfDogs()
{
    return [
        ' - dachshund',
        ' - mops',
        ' - plush-labrador',
        ' - rubber-dachshund',
        ' - shiba-inu',
    ];
}
