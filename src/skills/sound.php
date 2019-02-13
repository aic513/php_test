<?php

namespace Dog\skills;

function barking($dogType)
{
	$answer = '';
	switch ($dogType) {
		case 'bin/mops':
			$answer .= woofing();
			break;
		case 'bin/shiba-inu':
			$answer .= woofing();
			break;
		case 'bin/dachshund':
			$answer .= woofing();
			break;
		case 'bin/plush-labrador':
			$answer .= 'Unfortunately, I\'m a toy. I can\'t barking! ¯\_(ツ)_/¯ ';
			break;
		case 'bin/rubber-dachshund':
			$answer .= 'pip! pip!';
			break;
		default:
			break;
	}


	return $answer;
}

function woofing()
{
	return 'woof! woof! woof!';
}