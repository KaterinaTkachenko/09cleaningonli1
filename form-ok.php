<?php
	require_once 'functions/main.php';
	require_once 'functions/messages.php';
	require_once 'functions/sessions.php';	
	
	if (isset($_POST['name']))
		$name = htmlspecialchars( trim($_POST['name']) );	
	else
		$name = null;

	if (isset($_POST['phone']))
		$phone = htmlspecialchars( trim($_POST['phone']) );	
	else
		$phone = null;

	// находясь на странице form-ok f5 redirect
    // https://api.telegram.org/bot1630337087:AAFwP1CT3wBc4TN_Td1s3C4C6cAIjCmC-rA/getUpdates
	if($phone){	
		// if(preg_match("/^+38\([0][1-9]{2}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}$/", $phone)) {
			$token = "1630337087:AAFwP1CT3wBc4TN_Td1s3C4C6cAIjCmC-rA";
			$chat_id = "-523100026";
			$arr = array(
				'Имя пользователя: ' => $name,
				'Телефон: ' => $phone
			);
			$txt="";
			foreach($arr as $key => $value){
				$txt .= "<b>".$key."</b>".$value."%0A";
			}

			$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

			if($sendToTelegram){
				setSession("mailSend", "ok");
				//return redirect()->route('formok')->with('success', 'Благодарим за сообщение! Администратор свяжется с Вами в ближайшее время.');
			}
			else{
				setSession("mailSend", "error");	
				//return redirect()->route('contacts')->withErrors(['error' => 'При отправке уведомления возникла ошибка. Попробуйте позже или свяжитесь с нами по Viber:+38 050 606 25 59'])->withInput();
			} 
			redirect('form-ok.php'); 
	}
	
	if(isset($_SESSION["mailSend"])) {
		$result = getSession("mailSend"); 
		if ($result=="error") {						
			redirect('/');
			// echo '<h1 class="in-down">Спасибо, <span class="mainBlue">за обращение</span>!</h1><h2 class="main__title animated animatedFadeInUp fadeInUp">Мы свяжемся с Вами в течение 10 минут.</h2>';
		}							
		else{
			// echo '<h1 class="in-down">Возникла ошибка!</h1><h2 class="main__title animated animatedFadeInUp fadeInUp">Пожалуйста, вернитесь на предыдущую страницу и заполните форму.</h2>';
		}
		removeSession("mailSend");
	}
	else{
		redirect('/');
	}
?>
<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  

	<title>Клининговая компания Onli – Днепр | +38 (097) 370 04 00</title>
	<meta name="keywords" content="генеральная уборка, клининг, клининговая компания, мойка окон, уборка, уборка днепр, уборка квартир, уборка территорий" />
	<meta name="description" content="Клининговая компания №1 в Днепре. Высокое качество уборки по низким ценам – результатом Вы будете довольны. Звоните!">
	
	<meta property="og:title" content="Клининговая компания Onli – Днепр | +38 (097) 370 04 00">
    <meta property="og:site_name" content="cleaningonli">
    <meta property="og:url" content="https://cleaningonli.com/">
    <meta property="og:description" content="Клининговая компания №1 в Днепре. Высокое качество уборки по низким ценам – результатом Вы будете довольны. Звоните!">
    <meta property='og:type' content="article" />

	<meta property="og:image" content="images/logo/logo600x600.png" />
	<meta property="og:image" content="images/logo/width600.png" />
	<meta property="og:image" content="images/logo/width600.jpg" />
	<meta property="og:image" content="images/logo/width1080.png" />
	<meta property="og:image" content="images/logo/logo600x600.png" />
    <meta property="og:image:type" content="image/jpeg" /> 
	
	<link rel="shortcut icon" href="favicon-16x16.png" type="image/png">

	<link href="fonts/OpenSans/OpenSans-Regular.ttf" rel="stylesheet">
	<link href="fonts/Optima/Optima-Bold.ttf" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/all.min.css" >
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

  </head>
  <body>
	<div class="container-fluid fixed-top" id="header">
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-3 order-xl-1 order-lg-1 order-md-1 order-sm-2 order-2 col-4 text-center logo__col">
				<a class="navbar-link scrollToMain" href="/">
					<img src="images/logo/logo.png" alt="logo" class="logoImg">
				</a>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-9 order-xl-2 order-lg-2 order-md-2 order-sm-1 order-1 col-8 header__col">
				<nav class="navbar navbar-expand-lg navbar-light" >
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
							aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarToggler">
							<ul class="navbar-nav align-items-center text-lg-left navbarLeft">
								<li class="nav-item">
									<a class="navbar-link scrollToServices" href="#services">Услуги</a>
								</li>
								<li class="nav-item">
									<a class="navbar-link scrollToWorks" href="#works">Наши работы</a>
								</li>
								<li class="nav-item">
									<a class="navbar-link scrollToReviews" href="#reviews">Отзывы</a>
								</li>
								<li class="nav-item">
									<a class="navbar-link scrollToContacts" href="#footer">Контакты</a>
								</li>	
								<li class="nav-item">
									<a class="navbar-link tel" href="tel:380973700400 ">+38 097 370 04 00</a>
								</li>							
							</ul>
						</div>
				</nav>
			</div>
		</div>
	</div>							
	<section id="main" class="crossFlex">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12 text-center cleaning">
					<img src="images/cleaning.png" alt="cleaning" class="in-down">
				</div>
				<div class="col-xl-8 col-lg-8 col-md-9 col-sm-9 col-12 main__desc">
					<h1 class="in-down">Спасибо, <span class="mainGreen">за обращение</span>!</h1>
					<h2 class="main__title animated animatedFadeInUp fadeInUp">Мы свяжемся с Вами в течение 10 минут.</h2>				
					<a href="/" class="scrollToMainForm mainBtn animated animatedFadeInUp fadeInUp">ВЕРНУТЬСЯ НА САЙТ</a>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 text-right main__desc main__links fadeInLeft">
					<a href="tel:380664025541"><img src="images/phone.png" alt="phone"></a>
						<? if(check_mobile_device()) :?>
					<a href="viber://add?number=380664025541" class="viber">
						<? else : ?>
					<a href="viber://chat?number=+380664025541" class="viber">
						<? endif; ?>
						<img src="images/viber.png" alt="viber">
					</a>
					<a href="tg://resolve?domain=cleaningonly" class="telegram"><img src="images/telegram.png" alt="telegram"></a>
				</div>					
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
  </body>
</html>