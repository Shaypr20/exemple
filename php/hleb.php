<?php

	$mass = array_values(array_filter($url));
	
	if(!empty($mass)){
		$next_url = "/";
		$mass_bd = "'".implode("', '", $mass)."'";
		
		$zap = $bd->select(
			"page",
			"title, url",
			"url in (".$mass_bd.")"
		);
		$last = array_pop($zap);

		foreach($zap as $val){
			$hleb_mass .= 
				"<a href='".$next_url.$val['url']."/'>" . 
					$val['title'] . 
				"</a>" . 
				"<span>-</span>";
			$next_url .= $val['url']."/";
		}
		
		$hleb = $hleb_mass . $last['title'];
	}
	
	$hleb = 
		"<a href='/'>Главная</a>" . 
		"<span>-</span>" . 
		$hleb;

?>