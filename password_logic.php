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
	
	return $word_list;
}

// Selects a word from array, generates random number for array index, takes in number of words and loop index

function selectWord($number_words, $word_index) {
	$word_list = wordList();
	$number_index = count($word_list);
	$random_number = rand(0, ($number_index - 1));
	$word = $word_list[$random_number];
	$checked_dash = 'on';
	if(($checked_dash == 'on') && (($number_words - 1)!= $word_index)) {
		$word = $word . "-";
	}
	
	return $word;
}

function loopArray() {
	$number_words = 5;
	$word_list = wordList();
	if(!(is_array($word_list)) || $word_list == NULL) {
		echo 'Something is wrong. Array of NOT available.';
		die;
	}
	
	foreach ($word_list as $word_index => $$word_value) {
		if($word_index < $number_words) {
			$word = selectWord($number_words, $word_index);
			echo $word;
		}
	}
}



// Start checkbox logic

$word = loopArray();
$check_number = 'off';
$numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$numeral_index = count($numbers);
$random_numeral = rand(0, ($numeral_index - 1));
if($check_number == 'on'){
	$word .= $numbers[$random_numeral];
}

$check_special = 'on';
$special = array('~', '@', '#', '%', '^', '&', '*', '+');
$special_index = count($special);
$random_special = rand(0, ($special_index - 1));
if($check_special == 'on'){
	$word .= $special[$random_special];
}

echo $word;

?>
