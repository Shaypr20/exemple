<?php

	function translite($text){
		
		$text = mb_strtolower($text);
		
		$converter = [
			'а' => 'a',		'б' => 'b',		'в' => 'v',
			'г' => 'g',		'д' => 'd',		'е' => 'e',
			'ё' => 'yo',	'ж' => 'zh',	'з' => 'z',
			'и' => 'i',		'й' => 'y',		'к' => 'k',
			'л' => 'l',		'м' => 'm',		'н' => 'n',
			'о' => 'o',		'п' => 'p',		'р' => 'r',
			'с' => 's',		'т' => 't',		'у' => 'u',
			'ф' => 'f',		'х' => 'h',		'ц' => 'c',
			'ч' => 'ch',	'ш' => 'sh',	'щ' => 'shch',
			'ъ' => '',		'ы' => 'y',		'ь' => '',
			'э' => 'e',		'ю' => 'yu',	'я' => 'ya'		
		];
		
		$text = preg_replace("/[^a-zA-ZА-Яа-я0-9]+/iu", "-", $text);
		$text = strtr($text, $converter);
		$text = trim($text, "-");

		return $text;
		
	}
?>