<?php

namespace Dogs;

use function cli\line;
use function cli\err;
use function cli\prompt;

const DOG_ACTIONS = [
	'sound',
	'hunt'
];

function gameFlow($dogAction)
{
	if(empty($dogAction)){
		err('You don\'t input command for your dog');
	}

	if (count($dogAction) !== 1 || !in_array($dogAction[0], DOG_ACTIONS, true)) {
		 err('You input more, then 1 command or your command is not correct');
	}


}


