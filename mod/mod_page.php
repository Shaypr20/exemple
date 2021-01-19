<?php
	
	$page_url = array_filter($url);
	$page_url = array_key_last($page_url);
	$page_url = $url[$page_url];

	$zap = $bd->select(
		"page",
		"*",
		"url = '" . $page_url . "'"
	);
	
	$dan = $zap[0];
	$dan['phone'] = PHONE_LINK_1;
	$dan['phone_1'] = PHONE_LINK_1;
	$dan['phone_2'] = PHONE_LINK_2;
	$dan['email'] = EMAIL;
	$dan['addre'] = ADDRESS;
	
	if(file_exists(ROOT . "/img/pages/".$page_url.".jpg")){
		$dan['img'] = "<img src='/img/pages/".$page_url.".jpg' class='page_img'>";
	}
	else{
		$dan['img'] = "";
	}
	
	//===========================//
	
	if(!empty($dan['price'])){
		$pritab = explode(",", $dan['price']);
		
		foreach($pritab as $val){
			$tab = $bd->select("price_table", "*", "id = '".$val."'");
			
			$dan['price_table'] .= "
				<div class='price_table'>
					<h2>".$tab[0]['razd'].": ".$tab[0]['podrazd']."</h2>
					<h3>".$tab[0]['podp_nad']."</h3>
					<div class='table'>".$tab[0]['table_poln']."</div>
					<div class='podp_pod'>".$tab[0]['podp_pod']."</div>
				</div>
			";
		}
		
		$dan['price_table'] = ($url[1] == "price-list")
			? $dan['price_table'] 
			: "<div class='page_zag'>Цены</div>" . $dan['price_table'];
	}
	else{
		$dan['price_table'] = "";
	}
	
	//===========================//
	
	$zap = $bd->select(
		"page",
		"title, menu_type",
		"url = '".$url[1]."'"
	);
	
	if($zap[0]['menu_type'] == "services"){
		$dan['left_menu'] = "
			<a href='/".$url[1]."/' class='glav'>".$zap[0]['title']."</a>
		";
		$me_zap = $me->getChild($url[1]);
		foreach($me_zap as $val){
			$sel = ($val['url'] == $url[2]) ? "selected" : "";
			$dan['left_menu'] .= "
				<a href='/".$url[1]."/".$val['url']."/' class='sub ".$sel."'>".$val['tit']."</a>
			";
		}
	}
	else{
		$dan['left_menu'] = "
			<a href='' class='glav'>Меню</a>
			<a href='/about/' class='sub'>О компании</a>
			<a href='/services/' class='sub'>Услуги</a>
			<a href='/price-list/' class='sub'>Прайс-лист</a>
			<a href='/technical-requirements/' class='sub'>Требования</a>
			<a href='/contacts/' class='sub'>Контакты</a>
		";
	}
	
	//===========================//

	$title = "**************";
	$keywords = "**************";
	$description = "**************";

?>