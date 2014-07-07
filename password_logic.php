<?php


// Creates array of words

function wordList() {

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
	
	return $word_ist;
}

// Selects a word from array, generates random number

function selectWord() {
	$word_list = wordList();
	$number_index = count($word_list);
	$random_number = rand(0, $number_index);
	$word = ($word_list[$random_number]);
	return $word;
}

// Start Logic

$number_words = 3;
$checked_dash = 'on';
$word_list = wordList();
if(!(is_array($word_list)) || $word_list == NULL) {
	echo 'Something is wrong. Array of NOT available.';
	die;
}

foreach ($word_list as $word_index => $$word_value) {
	if($word_index >= $number_words) {
	$word = selectWord();
	echo $word;
	}
}

?>
