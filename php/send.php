<?php
	
	//$to = "vostrecov89@gmail.com";
	$to = "hello@wingsprint.ru, vostrecov89@gmail.com";
	
	$otpravitel = "Wings Print";
	$otpravitel = '=?utf-8?b?'. base64_encode($otpravitel) .'?=';

	$from = "hello@wingsprint.ru";
	
	$subject = "Вопрос с сайта"; 
	$subject = '=?utf-8?b?'. base64_encode($subject) .'?='; 
	$headers = "Content-type: text/html; charset=\"utf-8\"\r\n"; 
	$headers .= "From: ".$otpravitel." <".$from.">\r\n"; 
	$headers .= "Reply-To: ".$from."\r\n"; 
	$headers .= "MIME-Version: 1.0\r\n"; 
	$headers .= "Date: ". date('D, d M Y H:i:s O') ."\r\n";

	$mese = str_replace(["\r\n", "\n"], "<br>", $_POST['mes']);
	
	$mes = "
		<div style='font-family:Helvetica;font-size:15px;line-height:23px;'>
			<b>Имя:</b> ".$_POST['name']."<br>
			<b>Телефон:</b> ".$_POST['phone']."<br>
			<b>Email:</b> ".$_POST['email']."<br>
			
			<br>
			
			<b>Вопрос:</b><br>".$mese."
		</div>
	";

	if($_POST['name'] and $_POST['phone']){
		if(mail($to, $subject, $mes, $headers, '-f'. $from)){
			echo "
				<div class='svaz_text'>
					Ваша заявка принята<br>
					Ожидайте звонка.
				</div>
			";
		}
		else{
			echo "
				<div class='svaz_text'>
					Письмо не отправлено
				</div>
			";	
		}
	}

?>