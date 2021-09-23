<!DOCTYPE HTML>
<html lang="{{app()->getLocale()}}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vaisov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="/favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	{{-- <script src="js/respond.min.js"></script> --}}
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/about.jpg);"></div>
				<h1 id="colorlib-logo"><a href="index.html">@lang('Vaisov Azamat')</a></h1>
				<span class="position">
					{{-- class="position" --}}
					<a @if(app()->getLocale()=='uz') class="active"@endif class="text-warning" href="{{route('lang.switch','uz')}}">Uz</a>
					<a @if(app()->getLocale()=='ru') class="active"@endif class="text-warning" href="{{route('lang.switch','ru')}}">RU</a>
					<a @if(app()->getLocale()=='en') class="active"@endif class="text-warning" href="{{route('lang.switch','en')}}">EN</a>
				</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">@lang('Bosh Sahifa')</a></li>
						<li><a href="#" data-nav-section="about">@lang('Malumot')</a></li>
						<li><a href="#" data-nav-section="services">@lang('Xizmatlar')</a></li>
						<li><a href="#" data-nav-section="skills">@lang('Malakasi')</a></li>
						<li><a href="#" data-nav-section="education">@lang('Savollar')</a></li>
						<li><a href="#" data-nav-section="work">@lang('Loyiha')</a></li>
						<li><a href="#" data-nav-section="contact">@lang('Bog`lanish')</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p>
                    <small>&copy;
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                @lang('Copyright &copy');
                <script>
                document.write(new Date().getFullYear());
                </script>
                @lang(' Xizmatlar litsenziyalangan | Dasturchi Vaisov Azamat')
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </small>
                </p>
			</div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>@lang('web sayt') <br>@lang('yaratish')</h1>
						   					<h2>@lang('Cheksizlikning chegarasi....')</h2>
												<p><a class="btn btn-primary btn-learn" href="https://github.com/Vaisov0212" target="_blank">Github  <i class="icon-github"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>@lang('web ilovalarni')<br>@lang('ishlab chiqish')</h1>
												<h2>@lang('Cheksizlikning chegarasi....')</h2>
												<p><a class="btn btn-primary btn-learn" href="https://github.com/Vaisov0212" target="_blank">Github <i class="icon-github"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">@lang('Malumotlar')</span>
										<h2 class="colorlib-heading">@lang('Malumot')</h2>
										<p><strong>@lang('Salom men Vaisov Azamat') </strong>
                                            @lang('Yoshim 23 da WEB-dasturchiman, sohada 3 yillik tajribaga egaman').
                                            @lang('Xozirda Al-Xorazimiy nomidagi Toshkent axborot texnalogiyalari')
                                            @lang('Unversiteti Urganchfiliali bitiruvchi kurs talabasiman.')</p>
										<p>@lang('Bugungi kunda butun dunyo bo`ylab tarmoq nafaqat odamlar uchun o`yin-kulgi, balki biznes g`oyalarini muvaffaqiyatli amalga oshirish va o`zini amalga oshirishning juda samar vositasidir.')
                                         @lang('Bundan tashqari, Internet sizning faoliyatingizni reklama qilish uchun juda foydali platformadir.')
                                          @lang('Shu sabablarga ko`ra, bizning vaqtimizda veb -saytlarni ishlab chiqish tegishli va talab qilinadigan xizmatdir.')</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="bi bi-clipboard-check"></i></span>
										<h3>@lang('WEB ilova')</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="bi bi-cart-check-fill"></i></span>
										<h3>@lang('Internet Do`kon')</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="bi bi-globe2"></i></span>
										<h3>@lang('Web Sayt')</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="bi bi-phone"></i></span>
										<h3>@lang('Mobil Ilova')</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>@lang('WEB dasturlash sohasida') <br>@lang('3 yillik tajribaga egaman!')</h2>
										<a href="#" class="btn-hire">@lang('kuzatish')</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">@lang('Xizmatlar')</span>
							<h2 class="colorlib-heading">@lang('Quyidagi yo`nalashda xizmatlar ko`rsatiladi')</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>CMM</h3>
									<p>“Content Management System” @lang('Wordpress xizmatlari')</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>@lang('Malumotlar ombori')</h3>
									<p>SQL, PostgreSQL, MySql, SQLite @lang('malumotlar omborlarni boshqarish')</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>@lang('WEB dizayn')</h3>
									<p>@lang('Turli hil ko`rinishdagi moslashuvchan va o`ziga hos dizayn')</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>@lang('Hosting va Domain')</h3>
									<p>@lang('Hosting, Domain, WEB ilovalarni qidiruv tizimlaridan ro`yhatdan o`tkazish')</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-5">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>@lang('WEB Server')</h3>
									<p>@lang('WEB serverlarni sozlash va ishlatish bo`yicha tajribaga ega mutahasis')</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-6">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>@lang('BOT') </h3>
									<p>@lang('Telegram, Facebook va web saytlar uchun muloqot bot yaratish')</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="874" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">@lang('Foydalanuvchilar')</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="19" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">@lang('g`oyalar')</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">@lang('Tajriba')</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="7" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">@lang('ish')</span>
						</div>
					</div>
				</div>
			</div>

			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">@lang('Ish Malakasi')</span>
							<h2 class="colorlib-heading animate-box">@lang('Texnalogik Malakasi')</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p>@lang('Ishlash va o`qish davomida Sohada olgan bilim va ko`nikmalarimning qisqacha baxolanishi.')
								@lang('Bu yerda dasturlash tillari va texnalogiyalarning o`zlashtrish va ishda qo`llash bo`yicha ma`lumotlar berilgan.')
							</p>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>PHP</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="95"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>95%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Laravel</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>HTML5</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>JQuery</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>CSS3</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
								  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
								    <span>70%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Ajax</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>JavaCript</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
								  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
								    <span>70%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Wordpress</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">@lang('Savollar')</span>
							<h2 class="colorlib-heading animate-box">@lang('Ko`p so`raladigan savollarga javoblar')</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
												 aria-controls="collapseOne">@lang('Mobil ilova  nima ?')
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p>
                                                              @lang('Mobil ilova - bu xodimlar, sheriklar va mijozlarning kompaniyaning korporativ resurslariga tezkor kirishi uchun mo`ljallangan mobil ilova. Boshqacha qilib aytganda'),
                                                            </p>
										      		</div>
										      		<div class="col-md-6">
										      			<p> @lang('ma `lum biznes jarayonlarini simulyatsiya qiladigan korxona darajasidagi dastur. Mijozlar talablari uchun dasturiy ta`minot va maxsus echimlarni ishlab chiqish.')</p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
												 aria-controls="collapseTwo">@lang('BOT nima ?')
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p>	<strong>@lang('Bot')</strong>,@lang('(„robot“ soʻzining qisqartmasi) — qo`lda bajarilishi ko`p vaqt talab qiladigan, bir xil tipli boʻlgan amallarni bajarish uchun maxsus dastur.')
												</p>
													<ul>
														<li>@lang('Ko`p berladigan savollarga to`liq javob beradi') </li>
														<li>@lang('ishni yengillashtradi.')</li>
													</ul>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingThree">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
												aria-expanded="false" aria-controls="collapseThree">@lang('Intrnet Do`kon nima ?')'
									            </a>
									        </h4>
									    </div>
									    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									        <div class="panel-body">
									            <p><strong>@lang('Internet-do`kon') </strong> @lang('(elektron, elektron do`kon, elektron tijorat deb ham ataladi)-bu interaktiv sayt bo`lib, unda tovarlar va xizmatlar katalogi, shuningdek, buyurtma berish uchun savat mavjud. Mehmonlar boshqa xaridorlar orasida shoshilmasligi, bepu maslahatchini kutishi va sotuvchining bosimini his qilishi shart emas.')</div>
									    	</div>
										</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFour">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
												 href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												 @lang('WEB sayt nima ?')
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									        <div class="panel-body">
									            <p>
													@lang('Bugungi kunda butun dunyo bo`ylab tarmoq nafaqat odamlar uchun o`yin-kulgi, balki biznes g`oyalarini muvaffaqiyatli amalga oshirish va o`zini amalga oshirish uchun juda samarali vositadir.')
													 @lang('Bundan tashqari, Internet sizning faoliyatingizni reklama qilish uchun juda foydali platformadir.') 
													 @lang('Shu sabablarga ko`ra, bizning vaqtimizda veb -saytlarni ishlab chiqish tegishli va talab qilinadigan xizmatdir.')
												</p>
									        </div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFive">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
												 aria-expanded="false" aria-controls="collapseFive">@lang('WEB ilova nima ?')
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									        <div class="panel-body">
									            <p>	<strong>@lang('WEB ilova')</strong>
													@lang('-bu dizayn va resurs funktsional sohasidagi har qanday nostandart veb-echimlarni amalga oshirish.')
													 @lang('Agar saytlarning asosiy turlarining to`liq to`plami sizning barcha talablaringizni qondirmasa, biz individual loyihani loyihalash va yaratish bo`yicha ishlarni bajarishga tayyormiz.') 
													 @lang('Jarayon maxsus modullarni ishlab chiqish, maxsus dizayn yechimlari va animatsiyadan foydalanishni o`z ichiga oladi.')
												</p>
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">@lang('Loyihalar')</span>
							<h2 class="colorlib-heading animate-box">@lang('namunalar')</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
						<div class="col-md-12">
							<p class="work-menu"><span><a  class="active">@lang('WEB ilovalar')</a></span> <span><a class="active" >@lang('Intrnet Do`kon')</a></span> <span><a class="active" >@lang('Bot')</a></span> <span><a class="active" >@lang('Mobil ilovalar')</a></span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-1.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">@lang('Med sayt')</a></h3>
										<span>@lang('Sog`liqni saqlash tashkilotlari uchun turli xil ko`rninishdagi web saytlar')</span>
										<p class="icon">
											<span><a ><i class="icon-share3"></i></a></span>
											<span><a ><i class="icon-eye"></i> 196</a></span>
											<span><a ><i class="icon-heart"></i> 89</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="project" style="background-image: url(images/img-2.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">@lang('WEB ilovalar')</a></h3>
										<span>@lang('Shaxsiy blog, mini vizitka uchun WEB saytlar')</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
							<div class="project" style="background-image: url(images/img-3.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">@lang('Yangiliklar uchun web sayt')</a></h3>
										<span>@lang('Turli xil ko`rinishdagi yangiliklar va maqolalar uchun web saytlar')</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
							<div class="project" style="background-image: url(images/img-4.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">@lang('O`quv muassasalari uchun web saytlar')</a></h3>
										<span>@lang('Maktablar, o`quv muassasalari uchun WEB saytlar')</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-5.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">@lang('Bot')</a></h3>
										<span>@lang('Telegram va ishtimoiy tarmoqlar uchun ko`p funksiyali botlar')</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="project" style="background-image: url(images/img-6.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">@lang('Intrnet do`kon')</a></h3>
										<span>@lang('Sotuv va eltib berish xizmatlari uchun intrnet do`kon saytlari')</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
						</div>
					</div>
				</div>
			</section>


			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">@lang('Murojat uchun')</span>
							<h2 class="colorlib-heading">@lang('Bog`lanish')</h2>
						</div>
					</div>



                        <div  class="contactsuccess"   style="display:none;">

                        </div>

					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">Vaisov713@bk.ru</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>@lang('Xorazm viloyati Hazorasp Tumani')</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">+998 91 421 71 30</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="{{route('contact')}}" enctype="multipart/form-data" method="post" id="contactForm">
                                        @csrf
										<div class="form-group">
											<input type="text" class="form-control" placeholder="@lang('Ism')" name="name" required>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="@lang('E-mail')" name="email" required>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="@lang('Mavzu')" name="subject" required>
										</div>
										<div class="form-group">
											<textarea name='message'  id="message" cols="30" rows="7" class="form-control" placeholder="@lang('Xabar')"  required></textarea>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-send-message" value="Send Message">@lang('Yuborish')</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->
    <script>
	    var botmanWidget = {
	        aboutText: '',
			title:'Admin',
	        introMessage:'✋Salom.Men qisqa savollarga javob beruvchi BOT man',
			placeholderText:"Xabarni yuborish..."
	    };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>

	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>

	<script src="/js/jquery.easing.1.3.js"></script>

	<!-- jQuery Easing -->
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js" ></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="/js/jquery.countTo.js"></script>


	<!-- MAIN JS -->
	<script src="/js/main.js" ></script>
     {{-- Integratsiya Ajax contact form --}}
	 <script>

		// $('#contactForm').submit( function(e){
		// 	e.preventDefault();
		// 	$.ajax({
		// 		url: $(this).attr('action'),
		// 		type: 'POST',
		// 		dataType: 'JSON',
		// 		data: $(this).serialize(),
		// 		success: function($response){
		// 			if($response.status){
		// 				$('.contactsuccess').text(response.data).slideDown();
		// 			}
		// 		}
		// 	});
		// });
		</script>

	</body>
</html>



