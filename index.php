<?php
	require_once 'functions/main.php';
	require_once 'functions/messages.php';	
	// removeSessionAll();	
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

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/services.css">
	<link rel="stylesheet" type="text/css" href="css/works.css">
	<link rel="stylesheet" type="text/css" href="css/reviews.css">
	<link rel="stylesheet" type="text/css" href="css/questions.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	
</head>

<body>
	<?php include 'layouts/modal-form.php';?>
	<?php include 'layouts/header.php';?>
	<div style="position: relative">
		<div class="upper js-upper">
			<div class="upper__btn js-upper">
				<div class="section">
					<div class="menu-block">
						<nav class="menu-nav">
							<a href="tel:380664025541">
								<img src="images/phone.png" alt="phone">
							</a>
							<? if(check_mobile_device()) :?>
							<a href="viber://add?number=380664025541">
								<? else : ?>
								<a href="viber://chat?number=+380664025541">
									<? endif; ?>
									<img src="images/viber.png" alt="viber">
								</a>
								<a href="tg://resolve?domain=cleaningonly">
									<img src="images/telegram.png" alt="telegram">
								</a>
						</nav>

						<a href="#" class="menu-btn">
							<img src="images/chat.png" alt="chat" class="chat">
							<span aria-hidden="true" class="hidden closeImg">&times;</span>
						</a>
					</div>
				</div>
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
					<h1 class="in-down">Проведите <span class="mainGreen">время с пользой</span>, а уборкой займемся мы
					</h1>
					<h3 class="main__title animated animatedFadeInUp fadeInUp">Клининговая компания №1 по отзывам в
						Днепре</h3>
					<a href="#modalform" data-toggle="modal" data-target="#modalform"
						class="mainBtn animated animatedFadeInUp fadeInUp">ОСТАВИТЬ ЗАЯВКУ</a>
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

	<section id="works">
		<div class="cotainer-fluid">
			<div class="row works_rel">
				<div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 col-9 bg7">
					<img src="images/bg-7.png" alt="bg-7">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1><span class="mainGreen">Результаты</span> выполненных работ</h1>
				</div>
				<div class="col-12 works__flex1 crossFlex">
					<div class="video__block1 crossFlex">
						<div class="video1 crossFlex">
							<img src="images/play.png" alt="play" class="play">
							<video controls="" class="video hidden" id="v1">
								<source src="video/video1.mp4" type="video/mp4">
								<!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
								<source src="video/video1.webm" type="video/webm">
								<!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
								<source src="video/video1.ogv" type="video/ogg">
								<!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
								<object data="video1.swf" type="application/x-shockwave-flash">
									<!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
									<param name="movie" value="video1.swf">
								</object>
							</video>
						</div>
						<div class="video1 crossFlex">
							<img src="images/play.png" alt="play" class="play">
							<video controls="" class="video hidden" id="v2">
								<source src="video/video2.mp4" type="video/mp4">
								<!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
								<source src="video/video2.webm" type="video/webm">
								<!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
								<source src="video/video2.ogv" type="video/ogg">
								<!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
								<object data="video2.swf" type="application/x-shockwave-flash">
									<!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
									<param name="movie" value="video2.swf">
								</object>
							</video>
						</div>			
					</div>
					<div class="video__block2 crossFlex">
						<div class="video2 crossFlex">
							<img src="images/play.png" alt="play" class="play">
							<video controls="" class="video hidden" id="v3">
								<source src="video/video4.mp4" type="video/mp4">
								<!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
								<source src="video/video4.webm" type="video/webm">
								<!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
								<source src="video/video4.ogv" type="video/ogg">
								<!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
								<object data="video4.swf" type="application/x-shockwave-flash">
									<!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
									<param name="movie" value="video4.swf">
								</object>
							</video>
						</div>
						<div class="video2 crossFlex">
							<img src="images/play.png" alt="play" class="play">
							<video controls="" class="video hidden" id="v4">
								<source src="video/video3.mp4" type="video/mp4">
								<!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
								<source src="video/video3.webm" type="video/webm">
								<!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
								<source src="video/video3.ogv" type="video/ogg">
								<!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
								<object data="video3.swf" type="application/x-shockwave-flash">
									<!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
									<param name="movie" value="video3.swf">
								</object>
							</video>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="main1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6 bg1">
					<img src="images/bg-1.png" alt="bg-1">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1>Вам <span class="mainGreen">нужны</span> услуги клининга:</h1>
					</div>
					<div class="col-12 main__flex1 crossFlex">
						<div>
							<img src="images/water.png" alt="water">
							<div class="text-center">Если у Вас закончился или планируется ремонт</div>
						</div>
						<div>
							<img src="images/key.png" alt="key" class="key">
							<div class="text-center">До или после сдачи квартиры или дома</div>
						</div>
						<div>
							<img src="images/clock.png" alt="clock">
							<div class="text-center">Для поддержания чистоты, не тратя свои силы и время </div>
						</div>
						<div>
							<img src="images/stain.png" alt="stain" class="stain">
							<div class="text-center">Когда требуется удалить трудновыводимые загрязнения</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6 bg2">
					<img src="images/bg-2.png" alt="bg-2">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1>Как <span class="mainGreen">заказать</span> уборку?</h1>
					</div>
					<div class="col-12 main__flex2 crossFlex">
						<div>
							<div>
								<img src="images/1.png" alt="one">
								<div class="main__flex2__desc">
									<h3>Заявка</h3>
									<div>Вы можете позвонить по телефону <a href="tel:+380973700400"
											class="mainGreen">+380973700400</a> или оставить заявку на сайте</div>
								</div>
							</div>
							<div>
								<img src="images/2.png" alt="one">
								<div class="main__flex2__desc">
									<h3>Согласование работ</h3>
									<div>Определяем объем, рассчитываем стоимость услуг и согласовываем дату </div>
								</div>
							</div>
						</div>
						<div>
							<div>
								<img src="images/3.png" alt="one">
								<div class="main__flex2__desc">
									<h3>Уборка</h3>
									<div>Клинер приезжает в назначенное время со всем необходимым и сразу приступает к
										делу</div>
								</div>
							</div>
							<div>
								<img src="images/4.png" alt="one">
								<div class="main__flex2__desc">
									<h3>Контроль и оплата</h3>
									<div>После проверки качества выполненных работ, происходит оплата </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-center">
						<a href="#modalform" data-toggle="modal" data-target="#modalform"
							class="scrollToMainForm mainBtn">ОСТАВИТЬ ЗАЯВКУ</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="services">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6 bg3">
					<img src="images/bg-3.png" alt="bg-3">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1><span class="mainGreen">Услуги</span> от клининговой компании Onli</h1>
					</div>
					<div class="col-12 services__flex1 crossFlex">
						<div>
							<img src="images/uslugi-even-corners/yezhednevnaya-uborka.png" alt="yezhednevnaya-uborka">
							<div>
								<div class="services__flex1__title">Ежедневная уборка</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/generalnaya-uborka.png" alt="generalnaya-uborka">
							<div>
								<div class="services__flex1__title">Генеральная уборка</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/uborka-sdaniy-i-sooruzheniy.png"
								alt="uborka-sdaniy-i-sooruzheniy">
							<div>
								<div class="services__flex1__title">Уборка зданий и сооружений</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/uborka-kvartir-i-kotedzhey.png"
								alt="uborka-kvartir-i-kotedzhey">
							<div>
								<div class="services__flex1__title">Уборка квартир и коттеджей</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/uborka-posle-stroitelstva-i-remona.png"
								alt="uborka-posle-stroitelstva-i-remona">
							<div>
								<div class="services__flex1__title">Уборка после строительства, ремонта</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/moyka-okon-vitrin-fasadov.png"
								alt="moyka-okon-vitrin-fasadov">
							<div>
								<div class="services__flex1__title">Мойка окон, витрин, фасадов</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/ukhod-za-tverdymi-polami.png"
								alt="ukhod-za-tverdymi-polami">
							<div>
								<div class="services__flex1__title">Уход за твердыми полами</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/khimchistka-kovrov-mebeli.png"
								alt="khimchistka-kovrov-mebeli">
							<div>
								<div class="services__flex1__title">Химчистка ковров, мебели</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/uborka-sanitarny-zon.png" alt="uborka-sanitarny-zon">
							<div>
								<div class="services__flex1__title">Уборка санитарных зон</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
						<div>
							<img src="images/uslugi-even-corners/uborka-territoriy.png" alt="uborka-territoriy">
							<div>
								<div class="services__flex1__title">Уборка территорий</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>						
						<div>
							<img src="images/uslugi-even-corners/moyka-basseynov-i-trotuarov.png"
								alt="moyka-basseynov-i-trotuarov">
							<div>
								<div class="services__flex1__title">Мойка бассейнов и тротуаров</div>
								<div><a href="#modalform" data-toggle="modal" data-target="#modalform"
										class="scrollToMainForm mainBtn">ЗАКАЗАТЬ</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 bg4">
					<img src="images/bg-4.png" alt="bg-4">
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6 bg5">
					<img src="images/bg-5.png" alt="bg-5">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1>Почему наш клининг <span class="mainGreen">пользуется спросом?</span></h1>
					</div>
					<div class="col-12 crossFlex spros__flex">
						<div>
							<img src="images/oborudovaniye-i-spetsialnyye-sredstva.png"
								alt="oborudovaniye-i-spetsialnyye-sredstva">
							<h3>Проверенные средства</h3>
							<div>Используем только проверенные, экологически чистые и качественные профессиональные
								средства, которые не вредят здоровью. Отлично подходят для квартир, где есть дети</div>
						</div>
						<div>
							<img src="images/individualnyy-podkhod.png" alt="individualnyy-podkhod"
								class="spros__indPodhod">
							<h3>Индивидуальный подход</h3>
							<div>Отличаемся индивидуальным подходом к каждому клиенту. Учитываем все пожелания и решаем
								самые разнообразные ситуации для удовлетворения потребностей клиента </div>
						</div>
						<div>
							<img src="images/personal.png" alt="personal">
							<h3>Большой опыт</h3>
							<div>Только опытный персонал. Клинеры обладают всеми необходимыми навыками для работы с
								чистящими средствами и большим опытом их применения </div>
						</div>
						<div>
							<img src="images/tsena.png" alt="tsena">
							<h3>Честная цена</h3>
							<div>Мы за честную цену. Стоимость наших услуг формируется по абсолютно прозрачной схеме.
								Нет больших наценок, что позволяет сэкономить нашим клиентам до <span>50%</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid block7">
			<div class="row justify-content-end block7__row">
				<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12 bg6">
					<img src="images/bg-6.png" alt="bg-6">
				</div>
				<div class="col-xl-5 col-lg-5 col-md-6 col-sm-8 col-11 block7__desc">
					<h1 class="block7__desc__title">Почему <span class="mainGreen">клининговая компания лучший
							выбор</span>, чем домработница?</h1>
					<ul>
						<li>✔ Обращаясь к нам, Вы платите за профессиональный подход и гарантию качественного сервиса!
						</li>
						<li>✔ Мы работает без выходных и праздничных дней.</li>
						<li>✔ Мы «не суем нос» в дела клиентов, гарантируем конфиденциальность и сохранность
							персональных данных заказчиков.</li>
						<li>✔ Мы работаем строго по согласованному графику. Оперативность и пунктуальность являются
							обязательными условиями сотрудничества.</li>
						<li>✔ Вам не придется переделывать за специалистами клининг компании что-либо, так как мы
							действительно профессионалы!</li>
					</ul>
					<div class="block7__btn">
						<a href="#modalform" data-toggle="modal" data-target="#modalform" class=" mainBtnGreen">УЗНАТЬ
							СТОИМОСТЬ</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="reviews">
		<div class="container">
			<div class="row works_rel">
				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-9 bg8">
					<img src="images/bg-8.png" alt="bg-8">
				</div>
			</div>
			<div class="row works_rel">
				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-9 bg9">
					<img src="images/bg-9.png" alt="bg-9">
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="mainGreen">Отзывы</h1>
				</div>
				<div class="col-12 crossFlex reviews__flex1">
					<div class="shadowBox reviews__item">
						<div class="crossFlex">
							<div><img src="images/photo1.png" alt="photo1"></div>
							<div>
								<h2>Марина</h2>
								<img src="images/5-star-reviews.png" alt="5-star-reviews">
							</div>
						</div>
						<div><strong>Рекомендую однозначно!</strong> Обратилась сюда для уборки частного дома. Надо было полностью привести его в порядок, так как там никто не жил больше года. Клинеры на адрес прибыли в оговорённое время, я им показала фронт работы и уехала. К вечеру сотрудники фирмы уже закончили уборку. Я проверила работу, нареканий не возникло. Всё убрали на совесть. Плитку и полы натерли до блеска, окна вымыли и пыль везде убрали. Выполненная работа полностью соответствует ценовой политике.</div>
					</div>
					<div class="shadowBox reviews__item">
						<div class="crossFlex">
							<div><img src="images/photo2.png" alt="photo2"></div>
							<div>
								<h2>Светлана</h2>
								<img src="images/5-star-reviews.png" alt="5-star-reviews">
							</div>
						</div>
						<div><strong>Заказывала уборку квартиры!</strong> Профессионально убрали всю квартиру, которая была в очень ужасном состоянии, все отмыли, отчистили. Квартира сияет и благоухает чистотой. Спасибо Вам. Буду пользоваться Вашими услугами и советовать другим.</div>
					</div>
					<div class="shadowBox reviews__item">
						<div class="crossFlex">
							<div><img src="images/photo3.png" alt="photo3"></div>
							<div>
								<h2>Маргарита</h2>
								<img src="images/5-star-reviews.png" alt="5-star-reviews">
							</div>
						</div>
						<div><strong>Заказали уборку после ремонта.</strong> Приехали ровно к указанному времени, закончили даже чуть раньше. Мне понравилось. Цена за работу тоже устроила. Хотим теперь заказать обычную уборку и посмотреть весь ли персонал такой отзывчивый.</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id='questions'>
		<div class="container">
			<div class="row works_rel">
				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-8 col-10 bg10">
					<img src="images/bg-10.png" alt="bg-10">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12">
					<h1 class="mainGreen text-center">Вопросы <span style="color: #000">и</span> ответы</h1>
				</div>
				<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 quest__col">
					<div class="crossFlex quest__flex">
						<div>Нужен ли Вам доступ к воде и электричеству для уборки?</div>
						<img src="images/triangle.png" alt="triangle" class="triangle_js">
					</div>
					<div class="answer" id="a1"><div class='measuringWrapper'>Да, для любой уборки нужна вода. Если воды нет, то мы можем привезти ее с собой, но это сделает стоимость немного выше. Электричество нам нужно для подключения профессионального оборудования для уборки.</div></div>

					<div class="crossFlex quest__flex">
						<div>Снимаете ли Вы застарелую пленку с окон?</div>
						<img src="images/triangle.png" alt="triangle" class="triangle_js">
					</div>
					<div class="answer" id="a2"><div class='measuringWrapper'>Конечно, лучше снимать пленку с окон сразу после установки, но не всегда об этом предупреждают клиента. Поэтому, если Вы этого не сделали, то мы с помощью парогенератора и профессиональной химии снимем пленку.</div></div>

					<div class="crossFlex quest__flex">
						<div>Не испортите ли Вы мне что-то?</div>
						<img src="images/triangle.png" alt="triangle" class="triangle_js">
					</div>
					<div class="answer" id="a3"><div class='measuringWrapper'>Опыт нашей работы больше 5 лет. За это время мы разработали эффективную программу обучения для наших сотрудников. Сотрудники знают как и в каких случаях нужно использовать специализированную химию. И, в любом случае, мы гарантируем сохранность Вашего имущества!</div></div>

					<div class="crossFlex quest__flex">
						<div>Можно ли мне уйти из дома во время уборки?</div>
						<img src="images/triangle.png" alt="triangle" class="triangle_js">
					</div>
					<div class="answer" id="a4"><div class='measuringWrapper'>Да, конечно! Мы полностью отвечаем за сохранность Вашего имущества! Многие наши клиенты предпочитают оставить менеджера и клинеров дома. А в освободившееся время предпочитают заниматься своими делами.</div></div>

					<div class="crossFlex quest__flex">
						<div>Клинеры приезжают с необходимым оборудованием и средствами?</div>
						<img src="images/triangle.png" alt="triangle" class="triangle_js">
					</div>
					<div class="answer" id="a5"><div class='measuringWrapper'>Да, наши специалисты, при выезде на объект, берут с собой весь необходимый инвентарь и чистящие средства. Используют только профессиональную химию и оборудование. И это позволяет нам добиваться идеальной чистоты!</div></div>					
				</div>
				<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
					<h1 class="quest__title">Остались вопросы? Оставьте свои данные и мы Вам перезвоним</h1>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 crossFlex quest__btn"><a href="#modalform" data-toggle="modal" data-target="#modalform" class="mainBtn">ЗАДАТЬ ВОПРОС</a></div>		
			</div>
		</div>
	</section>

	<?php include 'layouts/footer.php';?>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

</body>

</html>
