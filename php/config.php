<?php

	header('Content-Type: text/html; charset=utf-8');
	define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	
	define("PHP", ROOT."/php/");
	define("IMG", ROOT."/img/");
	define("MOD", ROOT."/mod/");
	define("TMP", ROOT."/temp/");
	
	define("bd_host", "localhost");
	define("bd_user", "**************");
	define("bd_pass", "**************");
	define("bd_base", "**************");
	
	define("SITE", "**************");
	define("NAME", "**************");
	
	define("OOO", "ООО «".NAME."»");
	define("SEND", "hello@".SITE.".ru");
	define("DOMEN", "https://".SITE.".ru/");
	
	define("EMAIL", "<a href='mailto:".SEND."'>".SEND."</a>");
	define("PHONE_1", "+7 (495) 111-22-33");
	define("PHONE_2", "+7 (903) 111-22-33");
	define("PHONE_PURE_1", preg_replace("/[^0-9]/", "", PHONE_1));
	define("PHONE_PURE_2", preg_replace("/[^0-9]/", "", PHONE_2));
	define("PHONE_LINK_1", "<a href='tel:+".PHONE_PURE_1."'>".PHONE_1."</a>");
	define("PHONE_LINK_2", "<a href='tel:+".PHONE_PURE_2."'>".PHONE_2."</a>");
	
	define("SOC_RS", "/"); // RSS
	define("SOC_TW", "/"); // Twitter
	define("SOC_FB", "/"); // Facebook
	define("SOC_TG", "/"); // Telegram
	define("SOC_VK", "/"); // Вконтакте
	define("SOC_WA", "https://wa.me/".PHONE_PURE_1); // WhatsApp
	
	
	define("CITY", "Москва");
	define("INDEX", "123456");
	define("COORD", "55.12345, 37.12345");
	define("ADDRESS", CITY . ", **************");

?>