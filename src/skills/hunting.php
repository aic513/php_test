<?php
namespace Dog\skills;

function hunting($dogType)
{
	$answer = '';
	switch ($dogType) {
		case 'bin/mops':
			$answer .= 'I can\'t hunting. I\' m domestic dog!';
			break;
		case 'bin/shiba-inu':
			$answer .= getHuntingVoice();
			break;
		case 'bin/dachshund':
			$answer .= getHuntingVoice();
			break;
		case 'bin/plush-labrador':
			$answer .= 'Unfortunately, I\'m a toy. I can\'t hunting! ¯\_(ツ)_/¯ ';
			break;
		case 'bin/rubber-dachshund':
			$answer .= 'pip! pip!:)';
			break;
		default:
			break;
	}

	return $answer;
}

function getHuntingVoice()
{
	return 'Yes, my owner! I\' m ready to hunt!';
}