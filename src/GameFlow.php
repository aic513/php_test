<?php

namespace Dogs;

use function cli\line;
use function Dog\skills\barking;
use function Dog\skills\hunting;
use function Funct\Collection\flatten;

const DOG_ACTIONS = [
	'sound',
	'hunt',
];

const DOG_TYPES = [
	'bin/dachshund',
	'bin/mops',
	'bin/plush-labrador',
	'bin/rubber-dachshund',
	'bin/shiba-inu',
];

/**
 * @throws \Exception
 */
function gameFlow()
{
	list($dogType, $dogAction) = flatten(func_get_args());

	if (!checkDogType($dogType) || !checkDogAction($dogAction)) {
		throw new \Exception('Your command is not correct');
	}

	line(getAnswer($dogType, $dogAction));
}

/**
 * @param $dogType
 * @param $dogAction
 *
 * @return string
 * @throws \Exception
 */
function getAnswer($dogType, $dogAction)
{
	$answer = '';
	switch ($dogAction) {
		case 'sound':
			$answer .= barking($dogType);
			break;
		case 'hunt':
			$answer .= hunting($dogType);
			break;
		default:
			throw new \Exception('This command isn\'t exist');
	}

	return $answer;
}

function checkDogType($dogType)
{
	return in_array($dogType, DOG_TYPES, true);
}

function checkDogAction($dogAction)
{
	return in_array($dogAction, DOG_ACTIONS, true);
}

