<?php

namespace Dogs;

use function \cli\line;
use function cli\prompt;

function run()
{
	greeting();
	nameAsking();
	getDescription();
}

function greeting()
{
	line('Welcome to the dog shelter!');
}

function nameAsking()
{
	$name = prompt('May I have your name?');
	line('Hello, %s!', $name);
}

function getDescription()
{
	line('Now you are start to play a simple php game!');
	line('You can choice yor favorite dog and play with it!');
}
