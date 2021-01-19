<?php
	
	$zap = glob("img/slider/*.jpg");
	
	$sli_tex = [
		[
			"Широкоформатная печать",
			"/shirokoformatnaya-pechat/"
		],
		[
			"Фотоуслуги",
			"/fotouslugi/"
		],
		[
			"Послепечатная обработка",
			"/postpechatnaya-obrabotka/"
		],
	];
	
	foreach($zap as $key => $val){
		$bg = "style='background-image:url(/".$val.");'";
		$dan['slider'] .= 
			"<div href='". $sli_tex[$key][1] ."' class='slide_one' ".$bg.">" . 
				"<a href='". $sli_tex[$key][1] ."' class='so_text'>" . 
					$sli_tex[$key][0] . 
				"</a>" . 
			"</div>";
	}

	//===========================//
	
	$servs = $bd->select("glav_serv");
	
	foreach($servs as $val){
		$bg = "/img/glav_serv/".$val['url'].".jpg";
		$bg = "style='background-image:url(".$bg.");'";
		$dan['glav_serv'] .= "
			<a href='".$val['link']."' class='one_serv'>
				<div class='img' ".$bg."></div>
				<div class='title'>".$val['title']."</div>
				<div class='text'>".$val['text']."</div>
			</a>
		";
	}
	
	//===========================//
	
	$dan['phone_1'] = PHONE_LINK_1;
	$dan['phone_2'] = PHONE_LINK_2;
	
	//===========================//

	$title = "**************";
	$keywords = "**************";
	$description = "**************";

?>
