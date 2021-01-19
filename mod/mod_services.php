<?php

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
	
	$dan['phone'] = PHONE_LINK_1;
	
	//===========================//

	$title = "**************";
	$keywords = "**************";
	$description = "**************";

?>