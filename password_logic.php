<?php

function selectWord() {
	$word_list = array(	'run', 
						'walk',
						'talk',
						'help',
						'mister',
						'friend',
						'type',
						'house',
						'condo',
						'beach'
	);
	
	if($word_list) {
		$number_words = count($word_list);
		$random_number = rand(0, $number_words);
	}
	else {
		echo 'Something is wrong. Array of NOT available.';
	}
	
	return $word_list[$random_number];

}

echo selectWord();


