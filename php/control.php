<?php

	session_start();
	
	header("Expires: ".date("r", strtotime("+1 years")));
	header("Cache-control: public, max-age = 604800");
	
	$url = explode("/", $_SERVER['REDIRECT_URL']);

	require_once(PHP."pri.php");
	require_once(PHP."bd.class.php");
	require_once(PHP."menu.class.php");
	require_once(PHP."temp_engine.php");
	
	$bd = new bd;
	$me = new menu;
	$te = new temp_engine;
	
	require_once(PHP."hleb.php");

	$level = "page";
	if(!$url[1]) $level = "main";
	if($url[1] == "services") $level = "services";
	
	$mod_file =  MOD."mod_".$level.".php";
	$temp_file = TMP."temp_".$level.".tpl";
	
	if(file_exists($mod_file)) require_once($mod_file);
	if(file_exists($temp_file)) $temp = file_get_contents($temp_file);
	
	$cont = $te->engine($dan, $temp);

	require_once(TMP."template.tpl");

?>