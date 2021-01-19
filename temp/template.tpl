<!DOCTYPE html>
<html lang="en-US">
<head>
	<title><?=$title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="<?=$description;?>"/>
	<meta name="keywords" content="<?=$keywords;?>"/>
	<meta name="author" Content="Vosmedia"/>
	<meta name="robots" content="Index,follow"/>
	<meta name="copyright" Content="https://vosmedia.ru/"/>
	<meta http-equiv="content-language" content="ru"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="Publisher-URL" Content="<?=DOMEN;?>"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" style="text/css" href="/css/fonts.css"/>
	<link rel="stylesheet" style="text/css" href="/css/style.css"/>
	<link rel="stylesheet" style="text/css" href="/css/slick.css">
	<link rel="stylesheet" style="text/css" href="/css/adapt.css"/>

	<link rel="icon" type="image/x-icon" href="/favicon.ico"/>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>

	<script type="text/javascript" src="/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
	
	<meta name="yandex-verification" content="f858dad2f128820d" />
	<meta name="google-site-verification" content="Pv7yhGeiVFWYVmyo_2w9ci_too_40V6CnnG3d_YVO0E" />
</head>
<body>
<header>
	<div class="topline">
		<div class="center">
			<div class="left">
				<!--Wings Print - услуги печати высшего качества-->
			</div>
			<div class="right">
				<?=$me->getMenu("", "company");?>
			</div>
			<br>
		</div>
	</div>
	<div class="head">
		<div class="left">
			<a href="/" class="logo"></a>
			<div class="slogan">
				Предоставляем услуги печати высшего качества<br>
				Реализуем любую полиграфическую задумку
			</div>
			<br>
		</div>
		<div class="right">
			<div class="phone">
				<?=PHONE_LINK_1;?>
			</div>
			<div class="email">
				<?=EMAIL;?>
			</div>
			<?/*
			<div class="svaz_button svaz">
				Оставить заявку
			</div>
			*/?>
		</div>
		<br>
	</div>
	<div class="head_mob">
		<div class="left_mob">
			<a href="/" class="logo"></a>
		</div>
		<div class="right_mob">
			<div class="burger"></div>
		</div>
		<br>
		<div class="phone_mob">
			<?=PHONE_LINK_1;?>
		</div>
	</div>
	<div class="menu">
		<?=$me->getMenu("", "services");?>
	</div>
	<div class="menu_mob">
		<div class="svaz svaz_button">
			Оставить заявку
		</div>
		<?=$me->getMenu();?>
	</div>
</header>
<div class="cont">
	<?=$cont;?>
</div>
<footer>
	<div class="center">
		<div class="block">
			<div class="title">************</div>
			<div class="content">
				Мы предоставляем<br>
				услуги печати высшего<br>
				качества и реализуем любую<br>
				полиграфическую задумку.
			</div>
			<iframe src="https://yandex.ru/sprav/widget/rating-badge/117988365075" width="150" height="50" frameborder="0"></iframe>
		</div>
		<div class="block">
			<div class="title">Меню</div>
			<div class="content">
				<?=$me->getMenu("", "company");?>
			</div>
		</div>
		<div class="block">
			<div class="title">Услуги</div>
			<div class="content">
				<?=$me->getMenu("", "services");?>
			</div>
		</div>
		<div class="block">
			<div class="title">Контакты</div>
			<div class="content">
				<?=PHONE_LINK_1;?>
				<?=PHONE_LINK_2;?>
				<?=EMAIL;?>
				<?=ADDRESS;?>
				<div class="soc">
					<a href="#" class="soc_fb"></a>
					<a href="#" class="soc_in"></a>
					<a href="#" class="soc_tw"></a>
					<a href="#" class="soc_vk"></a>
				</div>
				
				<div class="svaz_button svaz">
					Оставить заявку
				</div>
			</div>
		</div>
		<div class="soc_mob">
			<a href="#" class="soc_fb"></a>
			<a href="#" class="soc_in"></a>
			<a href="#" class="soc_tw"></a>
			<a href="#" class="soc_vk"></a>
		</div>
		<br>
	</div>
	<div class="topline">
		<div class="center">
			<div class="left">
				2020 © ************** | Все права защищены.
			</div>
			<div class="right">
				Создание сайта: 
				<a href="https://vosmedia.ru/" class="vosmedia" 
				alt="Создание сайтов" title="Создание сайтов">Vosmedia</a>
			</div>
			<br>
		</div>
	</div>
	<div id="svaz">
		<div class="svaz_text">
			Оставьте свои контактные данные и мы свяжемся с вами в ближайшее время
		</div>
		<form class="obsh">
			<input type="text" name="name" placeholder="ФИО" required>
			<input type="text" name="email" placeholder="Email" required>
			<input type="text" name="phone" placeholder="Телефон" required>
			<textarea name="mes" placeholder="Комментарий" required></textarea>
			
			<input type="submit" value="Отправить">
		</form>
	</div>
	<div id="mask"></div>
	<div id="totop">▲</div>
	<div class="widget svaz" title="Оставить заявку"></div>
</footer>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"name": "<?=OOO;?>",
	"url": "<?=DOMEN;?>",
	"logo": "https://specialgarden.ru/img/osn/logo.png",
	"foundingDate": "2020",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "<?=ADDRESS;?>",
		"addressLocality": "<?=CITY;?>",
		"postalCode": "<?=INDEX;?>",
		"addressCountry": "Россия"
	},
	"contactPoint": {
		"@type": "ContactPoint",
		"contactType": "customer support",
		"telephone": "[<?=PHONE_1;?>, <?=PHONE_2;?>]",
		"email": "<?=SEND;?>"
	}
}
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(70418527, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/70418527" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>