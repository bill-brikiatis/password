<?php

//Disable error reporting
error_reporting(0);

// Creates array of words

function wordList() {

/*$word_list = array(	'run', 
					'walk',
					'talk',
					'help',
					'mister',
					'friend',
					'type',
					'house',
					'condo',
					'beach'
	);*/
	$filename = 'wordlist.txt';
	$word_list = file ($filename);
	if($word_list){
		
		return $word_list;
	}
	
	else {
		echo "Something is wrong. The app could not connect to the word list.";
	}
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

function loopArray($number_words) {
	$number_words;
	$word_list = wordList();
	if(!(is_array($word_list)) || $word_list == NULL) {
		echo 'Something is wrong. Array of NOT available.';
		die;
	}
	
	foreach ($word_list as $word_index => $$word_value) {
		if($word_index < $number_words) {
			$word = selectWord($number_words, $word_index);
			$word = str_replace(array('.', ' ', "\n", "\t", "\r"), '', $word);
			$multiple_words .= $word;
		}
		
	}
	return $multiple_words;
	
}



// Checkbox logic
if( $_POST["words"]) {
     $number_words = $_POST["words"];
  }
  
else {
	echo "The form is not completed.";
}

if( $_POST["numbers"]) {
     $check_number = $_POST["numbers"];
  }
  
else {
	$check_number = "off";
}

if( $_POST["symbols"]) {
     $check_special = $_POST["symbols"];
  }
  
else {
	$check_special = "off";
}

$multiple_words = loopArray($number_words);
$numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$numeral_index = count($numbers);
$random_numeral = rand(0, ($numeral_index - 1));
if($check_number == 'on'){
	$multiple_words .= $numbers[$random_numeral];
}

$special = array('~', '@', '#', '%', '^', '&', '*', '+');
$special_index = count($special);
$random_special = rand(0, ($special_index - 1));
if($check_special == 'on'){
	$multiple_words .= $special[$random_special];
}