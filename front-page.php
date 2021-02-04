<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title><?php bloginfo( $name ); ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<?php wp_head(); ?>

	<script defer type="application/javascript" src="//panel.quizgo.ru/common?q=8344"></script>
</head>

<body>

	<div class="header-bg">
		<header class="header">
			<div class="header__top-container">
				<div class="header__top-container-inner">
					<div class="header__logo-container">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/logo.png"
							alt="Логотип" class="logo-container__img">
						<p class="logo-container__company-name">ROLLER-SHUT</p>
					</div>
					<address class="header__contacts-container">
						<div class="header__location-container">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/location.png"
								alt="" class="header__location-icon">
							<p class="header__location-text"><span class="header__location-span">Адрес</span>
								<br><?php the_field('address'); ?></p>
						</div>
						<div class="header__email-container">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/mail.png" alt=""
								class="header__email-icon">
							<div class="header__email-text">
								<a class="header__email-link" href="mailto:<?php the_field('email'); ?>"
									target="_blank"><?php the_field('email'); ?></a>
								<p class="header__work-time">9:00 до 21:00</p>
							</div>
						</div>
						<div class="header__tel-container">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/question.png"
								alt="" class="header__tel-icon">
							<div class="header__tel-text">
								<p class="header__tel-top-text">Есть вопросы?</p>
								<a href="tel:<?php the_field('phone'); ?>"
									class="header__tel-link"><?php the_field('phone'); ?></a>
							</div>
						</div>
					</address>
					<!-- <a href="<?php the_field('vk_link'); ?>" class="header__vk-link" target="_blank"><img
							src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/vk.png" alt=""
							class="header__vk-img"></a> -->
					
							<div class="header__call-container">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/call.png" alt="" class="header__call-img">
								<div class="header__call-link-wrapper">
									<a href="#calc-dialog" class="header__call-link popup-with-move-anim">Перезвоните мне</a>
								</div>				
							</div>

					<!-- Кнопка для мобильной навигации -->
					<div id='menu-toggle' class="menu-icon">
						<div class="menu-icon-line"></div>
					</div>
					<!-- end Кнопка для мобильной навигации -->

				</div>

				<!--мобильная навигация-->

				<div id='mobile-nav' class="mobile-nav">
					<div class="mobile-nav-title">Навигация</div>
					<?php  wp_nav_menu([
						'theme_location'  => 'top-mobile',
						'container'       => null,
						'menu_class'      => 'mobile-nav-list', 
					]); ?>
				</div>

				<!-- end мобильная навигация-->

			</div>
			<div class="header__bottom-container">
				<nav class="header__nav">
					<?php  wp_nav_menu([
						'theme_location'  => 'top',
						'container'       => null,
						'menu_class'      => 'header__nav-list', 
					]); ?>
				</nav>

			</div>

		</header>
	</div>

	<div class="s-main-bg">
		<div class="s-main__content">
			<div class="s-main__text-container">
				<h1 class="s-main__heading"><?php the_field('main_heading'); ?></h1>
				<p class="s-main__subheading"><?php the_field('main_subheading'); ?></p>
				<form action="<?php echo get_site_url(); ?>/spasibo" method="POST"
					class="s-main__form callback">
					<div class="main_thank_you">
						<div class="thank_you">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png"
								alt="thank_you">
							<h1>Спасибо <br> за вашу заявку!</h1>
							<ul>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
							</ul>
							<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
							<i class="far fa-times-circle"></i>
						</div>
					</div>

					<input type="hidden" name="project_name" value="Рольставни">
					<input type="hidden" name="admin_email" value="info@roller-shut.ru">
					<input type="hidden" name="form_subject" value="Заявка с первого экрана">

					<input type="tel" class="s-main__input-tel" name="Телефон" placeholder="Введите ваш номер телефона"
						required>
					<button
						class="s-main__button button-original button-original_orange button-original_size_2">Заказать</button>
				</form>
				<div class="s-main__offers-container">
					<div class="s-main__offer">
						<p class="s-main__number"><?php the_field('offer_big_text_1'); ?> <span
								class="s-main__span"><?php the_field('offer_small_text_1'); ?></span></p>
						<p class="s-main__description"><?php the_field('offer_description_1'); ?></p>
					</div>
					<div class="s-main__offer">
						<p class="s-main__number"><?php the_field('offer_big_text_2'); ?> <span
								class="s-main__span"><?php the_field('offer_small_text_2'); ?></span></p>
						<p class="s-main__description"><?php the_field('offer_description_2'); ?></p>
					</div>
					<div class="s-main__offer">
						<p class="s-main__number"><?php the_field('offer_big_text_3'); ?> <span
								class="s-main__span"><?php the_field('offer_small_text_3'); ?></span></p>
						<p class="s-main__description"><?php the_field('offer_description_3'); ?></p>
					</div>
				</div>
			</div>
			<div class="s-main__slider-container">
				<div class="s-main__slider">
				<?php

				
				$main_slider = get_field('main_slider');

				if( $main_slider ): 

					for ($counter = 1; $counter <= 5; $counter++) {
						$current_slide = "slide-" . $counter;
				?>

					<div class="s-main__slide">
						<div class="s-main__slide-inner">
							<img src="<?php echo $main_slider[$current_slide]["img"]; ?>"
								alt="Рольставни" class="s-main__slide-img inner-img">
							<div class="s-main__slide-caption-box">
								<p class="s-main__slide-caption"><?php echo $main_slider[$current_slide]["caption"]; ?></p>
							</div>
						</div>
					</div>

					<?php 

						}  // конец цикла for

					endif; 
				

					?>


				</div>
				<div class="s-main__slider-arrow-next">
					<i class="slider-btn__prev-arrow">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36px"
							height="18px">
							<image x="0px" y="0px" width="36px" height="18px"
								xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAASCAQAAACZKrSjAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCxITEgMzXGFxAAAAkElEQVQ4y8XUIQ7CUAyA4X9Awglww2GnIGDZDXYPLsc9wMxBgsCDwWB/DMkYwey9JrSu4kte+1pkcE7ce3bbrw5ncKnqs0+lQFNbVR9u8iCcefqm0iAsvbypdR7UUTerPAhLrx1VOKdhTFos2AFwpy48sEpkPuM4CkAA4p4W1uy/jz/oQwatSNjShp2Rn4ftBfR2MlBLF+SSAAAAAElFTkSuQmCC" />
						</svg>

					</i>
				</div>
				<div class="s-main__slider-arrow-prev">
					<i class="slider-btn__prev-arrow">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px"
							height="13px">
							<image x="0px" y="0px" width="27px" height="13px"
								xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAANCAQAAADyUt1YAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCxITEicPX4WgAAAAlElEQVQoz52SMQqDQBBF3+q2gl1OYZeAIJ5BUokIuU3IJUIKb5BDxMbSzhtYpwwyKWSz2oTRP9XAPD4zfxB+dZSr5Iv+T1mcTlwwHFApWEE9Tx02u6XUGHruTHosp4QtEBjJqICJVg8xGLkRqced3jvdLC8CSkLibbvtuuSM+dwefDSYi7ujQUgodG7+uTqEM6MO+wJepUJQp1xHXgAAAABJRU5ErkJggg==" />
						</svg>

					</i>
				</div>


			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="form-block-mobile">
				<form action="<?php echo get_site_url(); ?>/spasibo" method="POST"
					class="callback">

					<div class="main_thank_you">
						<div class="thank_you">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png"
								alt="thank_you">
							<h1>Спасибо <br> за вашу заявку!</h1>
							<ul>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
							</ul>
							<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
							<i class="far fa-times-circle"></i>
						</div>
					</div>

					<input type="hidden" name="project_name" value="Получить консультацию">
					<input type="hidden" name="admin_email" value="info@roller-shut.ru">
					<input type="hidden" name="form_subject" value="Заявка с шапки сайта">
					<div class="form-block-info">
						<h4>Бесплатная консультация</h4>
						<p>Введите номер телефона, мы перезвоним в течении 15 минут и проконсультируем</p>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
						alt="icon-phone-form">
					<input type="tel" name="Телефон" placeholder="Номер телефона" class="phone" required />
					<button>Получить <br> консультацию</button>
				</form>
			</div>
		</div>
	</div>

	<section id="sip_panels">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Почему наши ролставни надежные?</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="left_info_economic">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-battery.png"
							alt="icon-battery">
						<p>Толщина ленты<br>Толщина алюминиевой ленты <br>может варьироваться от 25 до 36 мкм</p>
						<div class="line"></div>
					</div>
					<div class="left_info_montaj">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-repairs.png"
							alt="icon-repairs">
						<p>Для производства профилей используются<br> только первичные сплавы. <br>Для подтверждения
							качества <br>выдаются аттестаты с <br>подтверждением проведенной экспертизы.</p>
						<div class="line"></div>
					</div>
					<div class="right_info_time">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-time.png"
							alt="icon-time">
						<p>Высокие антикоррозионные свойства<br>Устойчивость лакокрасочного
							покрытия&nbsp;<br>экструдированных профилей к коррозии<br>должна быть подтверждена
							сертификатом<br> установке панели, которые <br></p>
						<div class="line"></div>
					</div>
					<div class="right_info_repairs">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-build.png"
							alt="icon-build">
						<p> В качественных лакокрасочных покрытиях<br> используют полиамидные частицы<br> и двухслойное
							полиуретановое покрытие. <br>Так цвет остается защищенным от внешних <br>воздействий, не
							растягивается и не трескается<br> и не выгорает на солнце.</p>
						<div class="line"></div>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/3d-house.png" alt="3d-house"
						class="house_sip">
					<div class="circle_economic"></div>
					<div class="circle_montaj"></div>
					<div class="circle_time"></div>
					<div class="circle_repairs"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="money_sip">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>УПРАВЛЕНИЕ РОЛЬСТАВНЯМИ</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<!-- col-md-4-1 -->
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="block_min">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/materials_7000.png"
							alt="domokomplect">
						<h4>Автоматическое
							управление</h4>
						<p>Рольставни поднимаются и опускаются с пульта управления, кнопки, системы "умный дом"</p>

					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="block_normal">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/materials_10000.png"
							alt="dom_pod_krishy">
						<h4>Ручное управление</h4>

						<p>Для подъема и опускания рольставней вручную, или при помощи кардана</p>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!-- <section id="money_sip">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Сколько стоит?</h1>
					<ul>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block_min">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/materials_7000.png" alt="domokomplect">
						<h4>Ролетта №1</h4>
						<span>7 500 руб/м<sup>2</sup></span>
						<p>В стоимость входят <br>  материалы</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block_normal">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/materials_10000.png" alt="dom_pod_krishy">
						<h4>Ролетта №2</h4>
						<span>10 000 руб/м<sup>2</sup></span>
						<p>В стоимость входят роллета <br> + монтаж</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block_max">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/materials_20000.png" alt="ready_house">
						<h4>Ролетта №3</h4>
						<span>20000/</span>
						<p>В стоимость входят роллета <br> + монтаж</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="s_trust" id="s_trust">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Почему стоит доверить установку <br> ролставней нашей компании</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/1.png" alt="1">
					<p><?php the_field('trust_advantage_description_1'); ?></p>
					<span><?php the_field('trust_advantage_description_small_1'); ?></span>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/2.png" alt="2">
					<p><?php the_field('trust_advantage_description_2'); ?></p>
					<span><?php the_field('trust_advantage_description_small_2'); ?></span>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/3.png" alt="3">
					<p><?php the_field('trust_advantage_description_3'); ?></p>
					<span><?php the_field('trust_advantage_description_small_3'); ?></span>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/4.png" alt="4">
					<p><?php the_field('trust_advantage_description_4'); ?></p>
					<span><?php the_field('trust_advantage_description_small_4'); ?></span>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/5.png" alt="5">
					<p><?php the_field('trust_advantage_description_5'); ?></p>
					<span><?php the_field('trust_advantage_description_small_5'); ?></span>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 s_trust-item-6">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/6.png" alt="6">
					<p><?php the_field('trust_advantage_description_6'); ?></p>
					<span><?php the_field('trust_advantage_description_small_6'); ?></span>
					<a href="#more-dialog" class="popup-with-move-anim"><button><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s_ready_house/magnifier.png"
								alt="magnifier">Узнать подробнее</button></a>
				</div>
			</div>
		</div>
	</section>

	<section id="s_calc" id="s_calc">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo get_site_url(); ?>/spasibo" method="POST"
						class="callback">


						<div class="main_thank_you">
							<div class="thank_you">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png"
									alt="thank_you">
								<h1>Спасибо <br> за вашу заявку!</h1>
								<ul>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
								</ul>
								<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
								<i class="far fa-times-circle"></i>
							</div>
						</div>

						<input type="hidden" name="project_name" value="Калькулятор стоимости">
						<input type="hidden" name="admin_email" value="info@roller-shut.ru">
						<input type="hidden" name="form_subject" value="Заявка с Калькулятора">

						<div class="block-bg-top">
							<h1>Калькулятор стоимости </h1>
							<div class="block-calc-metric">
								<span>Площадь (см<sup>2</sup>):</span>
								<input type="text" class="input-number" placeholder="450" id="numberMetric"
									name="metraj">
								<input type="range" min="10" max="900" step="1" oninput="metric()" id="rangeMetric">
								<ul>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
									<li>
										<div class="circle"></div>
									</li>
								</ul>
							</div>
							<div class="block-calc-floor">
								<span>Какого типа нужны роллеты?</span>
								<label class="radio"><input type="radio" checked name="floor"
										value="Стандартной прочности" />
									<div class="radio__text">Стандартной прочности</div>
								</label>
								<label class="radio"><input type="radio" name="floor" value="Повышенной прочности " />
									<div class="radio__text">Повышенной прочности </div>
								</label>
								<label class="radio"><input type="radio" name="floor"
										value="Прозрачные/Перфорированные " />
									<div class="radio__text">Прозрачные </div>
								</label>
							</div>
							<div class="block-calc-variant">
								<span>Тип управления:</span>
								<label class="radio"><input type="radio" checked name="variant" value="Ручное" />
									<div class="radio__text">Ручное</div>
								</label>
								<label class="radio"><input type="radio" name="variant" value="Автоматическое" />
									<div class="radio__text">Автоматическое</div>
								</label>

							</div>
							<div class="block-calc-decoration">
								<span>Подарок:</span>
								<label class="radio"><input type="checkbox" checked name="decoration_1"
										value="внутренняя отделка" />
									<div class="radio__text">Доставка</div>
								</label>
								<label class="radio"><input type="checkbox" name="decoration_2"
										value="постгарантийное обслуживание" />
									<div class="radio__text">Постгарантийное обслуживание</div>
								</label>
							</div>
						</div>
						<div class="block-bg-bottom">
							<input type="text" placeholder="Ваш номер телефона" class="phone" name="Телефон" required />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
								alt="icon-phone-form">
							<button>Рассчитать <br>стоимость</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="s_ready_house">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Популярные решения</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="tabs">
							<div class="col-lg-2 col-md-4 button s_ready_house-tabs-item">
								<button class="tab">В дом </button>
							</div>
							<div class="col-lg-2 col-md-4 button s_ready_house-tabs-item">
								<button class="tab">В офис </button>
							</div>
							<div class="col-lg-2 col-md-4 button s_ready_house-tabs-item">
								<button class="tab">В гараж </button>
							</div>
							<div class="col-lg-2 col-md-4 button s_ready_house-tabs-item">
								<button class="tab">Двери </button>
							</div>
							<div class="col-lg-2 col-md-4 button s_ready_house-tabs-item">
								<button class="tab">Туалет</button>
							</div>
							<div class="col-lg-2 col-md-4 button s_ready_house-tabs-item">
								<button class="tab">Окна</button>
							</div>

						</div>
						<div class="tab_content">
							<div class="tab_item">
							

								<!-- В дом -->
								<?php
								$posts = get_posts( array(
									'post_type'   => 'catalog_card',
									'tax_query' => array(                                 
										array(
											'taxonomy' => 'sections',  // таксономия 
											'field'    => 'slug',
											'terms'    => 'v-dom' // термин 
										)
									),
									'posts_per_page' => -1         // кол-во записей (-1 это все) 
								) );


								foreach( $posts as $post ){
									setup_postdata($post); ?>

								<?php get_template_part( 'catalog_card-post'); ?>

								<?php } ?>

								<?php wp_reset_postdata(); ?>
							</div>
							<div class="tab_item">
								<!-- В офис -->
								<?php
								$posts = get_posts( array(
									'post_type'   => 'catalog_card',
									'tax_query' => array(                                 
										array(
											'taxonomy' => 'sections',  // таксономия 
											'field'    => 'slug',
											'terms'    => 'v-ofice' // термин 
										)
									),
									'posts_per_page' => -1         // кол-во записей (-1 это все) 
								) );


								foreach( $posts as $post ){
									setup_postdata($post); ?>

								<?php get_template_part( 'catalog_card-post'); ?>	

								<?php } ?>

								<?php wp_reset_postdata(); ?>


							</div>
							<div class="tab_item">
								<!-- В гараж -->
									<?php
								$posts = get_posts( array(
									'post_type'   => 'catalog_card',
									'tax_query' => array(                                 
										array(
											'taxonomy' => 'sections',  // таксономия 
											'field'    => 'slug',
											'terms'    => 'v-garag' // термин 
										)
									),
									'posts_per_page' => -1         // кол-во записей (-1 это все) 
								) );


								foreach( $posts as $post ){
									setup_postdata($post); ?>

								<?php get_template_part( 'catalog_card-post'); ?>

								<?php } ?>

								<?php wp_reset_postdata(); ?>


							</div>
							<!-- Двери -->

							<div class="tab_item">
									<?php
								$posts = get_posts( array(
									'post_type'   => 'catalog_card',
									'tax_query' => array(                                 
										array(
											'taxonomy' => 'sections',  // таксономия 
											'field'    => 'slug',
											'terms'    => 'dveri' // термин 
										)
									),
									'posts_per_page' => -1         // кол-во записей (-1 это все) 
								) );


								foreach( $posts as $post ){
									setup_postdata($post); ?>

								<?php get_template_part( 'catalog_card-post'); ?>



								<?php } ?>

								<?php wp_reset_postdata(); ?>


								
							</div>
							<div class="tab_item">

								<!-- Туалет -->

								<?php
								$posts = get_posts( array(
									'post_type'   => 'catalog_card',
									'tax_query' => array(                                 
										array(
											'taxonomy' => 'sections',  // таксономия 
											'field'    => 'slug',
											'terms'    => 'tualet' // термин 
										)
									),
									'posts_per_page' => -1         // кол-во записей (-1 это все) 
								) );


								foreach( $posts as $post ){
									setup_postdata($post); ?>

									<?php get_template_part( 'catalog_card-post'); ?>

								<?php } ?>

								<?php wp_reset_postdata(); ?>

							</div>


							<!-- Окна -->

							<div class="tab_item">

								<?php
								$posts = get_posts( array(
									'post_type'   => 'catalog_card',
									'tax_query' => array(                                 
										array(
											'taxonomy' => 'sections',  // таксономия 
											'field'    => 'slug',
											'terms'    => 'okna' // термин 
										)
									),
									'posts_per_page' => -1         // кол-во записей (-1 это все) 
								) );


								foreach( $posts as $post ){
									setup_postdata($post); ?>

								<?php get_template_part( 'catalog_card-post'); ?>



								<?php } ?>

								<?php wp_reset_postdata(); ?>


							</div>









						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section id="s_your_project">
		<div class="container">
			<form action="<?php echo get_site_url(); ?>/spasibo" method="POST" class="callback">
				<div class="row">
					<div class="col-md-5 your_project">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/your_project.png"
							alt="your_project">
						<h4>Отправте фото вашего объекта, и мы подоберем лучшее решение</h4>
						<p>Пришлите фото на почту <a
								href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br> или
							загрузите по кнопке ниже</p>
						<label class="label-check">
							<button><img
									src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/download.png"
									alt="download">Загрузить фото <br>
								объекта</button>
							<input type="file" class="check-file" name="photo">
						</label>
					</div>
					<div class="col-md-7 part_project">
						<div class="block-part-project-top">
							<h3>Оставьте заявку на подбор качественных роллет, которые прослужат вам 15 лет
								и даже больше!</h3>
							<ul>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
								<li>
									<div class="circle"></div>
								</li>
							</ul>
							<p>Наш специалист расскажет Вам, какие роллеты самые выгодные, как избежать
								некачественного товара и быстрой поломки. </p>
							<div class="free-project"><span>Все это Бесплатно</span> </div>
						</div>
						<div class="block-part-project-bottom">
							<div>

								<div class="main_thank_you">
									<div class="thank_you">
										<img class=""
											src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png"
											alt="thank_you">
										<h1>Спасибо <br> за вашу заявку!</h1>
										<ul>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
										</ul>
										<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
										<i class="far fa-times-circle"></i>
									</div>
								</div>

								<input type="hidden" name="project_name" value="Подобрать роллеты">
								<input type="hidden" name="admin_email" value="info@roller-shut.ru">
								<input type="hidden" name="form_subject" value="Заявка с блока - Свой проект">

								<!-- 	<span>Размер (м<sup>2</sup>):</span>
							<input type="text" name="Размер" placeholder="20" class="input-area" required> -->
								<input type="tel" name="Телефон" placeholder="Ваш номер телефона"
									class="input-phone phone" required>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/phone-your-project.png"
									alt="phone-your-project">
								<button>Подобрать <br> роллеты</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

	<!-- <section id="s_live_house">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Изготавливаем и устанавливаем рольставни<br>любых размеров и цветов</h1>
					<ul>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
						<li><div class="circle"></div></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-12 block-live-photo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/1.png" alt="1">
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12 block-live-info">
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-place.png" alt="icon-place">
						<p>Место строительства</p>
						<span>Всеволожский район</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-time.png" alt="icon-time">
						<p>Время на монтаж</p>
						<span>24.04.17 - 21.08.17 - Всего 4 месяца</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-material.png" alt="icon-material">
						<p>Материал</p>
						<span>СИП панель + Шпаклевка + Покраска + Искуственный камень</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-area.png" alt="icon-area">
						<p>Площадь</p>
						<span>10x12 - 290 м<sup>2</sup>, 2 этажа + подвал</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-family.png" alt="icon-family">
						<p>Сколько окон</p>
						<span>Семья из 5 человек</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-paket.png" alt="icon-paket">
						<p>Пакет</p>
						<span>С чистовой отделкой + окна, двери, лестницы</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-project.png" alt="icon-project">
						<p>Проект</p>
						<span>Разработан индивидуально под заказчика</span>
					</div>
					<div class="block-info">
						<div class="block-price">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-price.png" alt="icon-price">
							<p>Стоимость</p>
							<span>4 350 000 &#8381;</span>
						</div>
						<div class="block-button">
							<a href="#calc-dialog" class="popup-with-move-anim"><button>Хочу <br> похожее решение</button></a>
						</div>
					</div> 
					</div>
				<div class="col-lg-7 col-md-6 col-sm-12 block-live-photo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/2.png" alt="2">
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12 block-live-info">
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-place.png" alt="icon-place">
						<p>Место строительства</p>
						<span>Гатчинский район</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-time.png" alt="icon-time">
						<p>Время на монтаж</p>
						<span>01.02.18 - 05.05.18 - Всего 3 месяца</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-material.png" alt="icon-material">
						<p>Материал</p>
						<span>СИП панель + Шпаклевка + Покраска + Декоративные элементы</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-area.png" alt="icon-area">
						<p>Площадь</p>
						<span>7x10 - 140 м<sup>2</sup>, 2 этажа</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-family.png" alt="icon-family">
						<p>Сколько окон</p>
						<span>Семья из 3 человек</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-paket.png" alt="icon-paket">
						<p>Пакет</p>
						<span>С чистовой отделкой + окна, двери, лестницы</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-project.png" alt="icon-project">
						<p>Проект</p>
						<span>Типовой проект</span>
					</div>
					<div class="block-info">
						<div class="block-price">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-price.png" alt="icon-price">
							<p>Стоимость</p>
							<span>2 100 000 &#8381;</span>
						</div>
						<div class="block-button">
						 <a href="#calc-dialog" class="popup-with-move-anim"><button>Хочу <br> похожее решение</button></a>
						</div>
					</div> 
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12 block-live-photo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/3.png" alt="3">
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12 block-live-info">
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-place.png" alt="icon-place">
						<p>прртпрртпрртпрртпрт</p>
						<span>птрпртпрртпрртпр</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-time.png" alt="icon-time">
						<p>Время на монтаж</p>
						<span>20.05.17 - 03.09.12 - Всего 3.5 месяца</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-material.png" alt="icon-material">
						<p>Материал</p>
						<span>ролет</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-area.png" alt="icon-area">
						<p>Площадь</p>
						<span>8x9 - 174 м<sup>2</sup>, 2 этажа + гараж</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-family.png" alt="icon-family">
						<p>Сколько окон</p>
						<span>4</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-paket.png" alt="icon-paket">
						<p>444</p>
						<span>44</span>
					</div>
					<div class="block-info">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-project.png" alt="icon-project">
						<p>4444</p>
						<span>444444444444444444</span>
					</div>
					<div class="block-info">
						<div class="block-price">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/live/icon-price.png" alt="icon-price">
							<p>Стоимость</p>
							<span>454545454</span>
						</div>
						<div class="block-button">
							<a href="#calc-dialog" class="popup-with-move-anim"><button>Хочу <br> похожее решение</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="s_expedition">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Оставьте заявку на замер или консультацию</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="#expedition-dialog" class="popup-with-move-anim"><button class="expedition"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/binokl.png"
								alt="binokl">Вызвать замерщика</button></a>
				</div>
				<div class="col-md-6">
					<a href="#video-dialog" class="popup-with-move-anim"><button class="videorewies"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/video.png"
								alt="video">Консультация</button></a>
				</div>
			</div>
		</div>
	</section>

	<section id="s_brigade">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>У нас 4 профессиональные бригады,готовые придти Вам на помощь</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brigade/brigadepng.png"
						alt="brigadepng">
					<div class="brigade-text">Наша команда воплотит все ваши желания</div>
				</div>
			</div>
		</div>
	</section>



	<div class="s-advantages">
		<div class="container">
			<div class="s-advantages__inner">
				<h2 class="s-advantages__heading section-heading"><?php the_field('solutions-heading'); ?></h2>


		
				<?php

				for ($counter = 1; $counter <= 5; $counter++) {
				$contentbox = get_field('solutions-contentbox' .$counter);

				if( $contentbox ): ?>


				<div class="s-advantages__content-box">
					<div class="s-advantages__slider-box">
					<h3 class="s-advantages__content-box-title s-advantages__content-box-title-adaptive"><?php echo $contentbox["solutions-contentbox" . $counter . "-heading"]; ?></h3>
						<div class="s-advantages__slider-wrapper">
							<div class="s-advantages__slider s-advantages__slider-<?php echo $counter ?>">
								<div class="s-advantages__slide">
									<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide1"]; ?>"
										alt="Рольставни" class="inner-img">
								</div>
								<div class="s-advantages__slide">
									<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide2"]; ?>"
										alt="Рольставни" class="inner-img">
								</div>
								<div class="s-advantages__slide">
									<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide3"]; ?>"
										alt="Рольставни" class="inner-img">
								</div>
								<div class="s-advantages__slide">
									<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide4"]; ?>"
										alt="Рольставни" class="inner-img">
								</div>
								<div class="s-advantages__slide">
									<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide5"]; ?>"
										alt="Рольставни" class="inner-img">
								</div>

							</div>

							<div class="s-advantages__btn-prev slider-btn s-advantages__btn-prev-<?php echo $counter ?>">
								<i class="slider-btn__prev-arrow slider-btn__prev-arrow-2">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="9px">
										<image x="0px" y="0px" width="18px" height="9px"
											xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAJCAQAAACV1rSEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCh0XKhIseWxCAAAAV0lEQVQY02P4z/Cf4T/D//L/n//zQdkYEELl////f9V/RnyKMv///7/pPxsuJf8ZGP+nMsxiuMuQxfCLARd4w/j/BwM7A37wkyiTiHITwncr8fuOYDgBAB3rhEYBUdSuAAAAAElFTkSuQmCC" />
									</svg>

								</i>
							</div>
							<div class="s-advantages__btn-next slider-btn s-advantages__btn-next-<?php echo $counter ?>">
								<i class="slider-btn__next-arrow slider-btn__next-arrow-2">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="9px">
										<image x="0px" y="0px" width="18px" height="9px"
											xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAJCAQAAACV1rSEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCh0XKCWm8qvPAAAAU0lEQVQY02P4z4AD8v3//L8cwmbAqYjx/6r////n41fE8J/t/6b///9n/mdg/K/DIMKAC7AxTGNQZkhj/P+DgZ0BP/hJlElEuQmf71YS9h1SOAEAOsR+uPTVojYAAAAASUVORK5CYII=" />
									</svg>

								</i>
							</div>

						</div>

						<div class="s-advantages__slider-nav s-advantages__slider-nav-<?php echo $counter ?>">
							<div class="s-advantages__slider-nav-slide">
								<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide1"]; ?>"
									alt="Рольставни" class="inner-img">
							</div>
							<div class="s-advantages__slider-nav-slide">
								<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide2"]; ?>"
									alt="Рольставни" class="inner-img">
							</div>
							<div class="s-advantages__slider-nav-slide">
								<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide3"]; ?>"
									alt="Рольставни" class="inner-img">
							</div>
							<div class="s-advantages__slider-nav-slide">
								<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide4"]; ?>"
									alt="Рольставни" class="inner-img">
							</div>
							<div class="s-advantages__slider-nav-slide">
								<img src="<?php echo $contentbox["solutions-contentbox" . $counter . "-slide5"]; ?>"
									alt="Рольставни" class="inner-img">
							</div>
						</div>
						<p class="s-advantages__colors-title"><?php echo $contentbox["solutions-contentbox" . $counter . "-colors"]; ?></p>
						<div class="s-advantages__colors-container">
							<div class="s-advantages__color-item s-advantages__color-item-1"></div>
							<div class="s-advantages__color-item s-advantages__color-item-2"></div>
							<div class="s-advantages__color-item s-advantages__color-item-3"></div>
							<div class="s-advantages__color-item s-advantages__color-item-4"></div>
							<div class="s-advantages__color-item s-advantages__color-item-5"></div>
						</div>


					</div>
					<div class="s-advantages__right-cotainer">
						<h3 class="s-advantages__content-box-title"><?php echo $contentbox["solutions-contentbox" . $counter . "-heading"]; ?></h3>
						<div class="s-advantages__cards-container">
							<div class="s-advantages__cards-row">
								<div class="s-advantages__card card-colored card-colored_yellow">
									<img src="<?php echo $contentbox["information_block1"]["solutions-contentbox" . $counter . "-infoblock1-icon"]; ?>" alt="" class="card-colored__icon">
									<h6 class="card-colored__title"><?php echo $contentbox["information_block1"]["solutions-contentbox" . $counter . "-infoblock1-heading"]; ?></h6>
									<p class="card-colored__description"><?php echo $contentbox["information_block1"]["solutions-contentbox" . $counter . "-infoblock1-description"]; ?></p>
								</div>
								<div class="s-advantages__card card-colored card-colored_purple">
									<img src="<?php echo $contentbox["information_block2"]["solutions-contentbox" . $counter . "-infoblock2-icon"]; ?>" alt="" class="card-colored__icon">
									<h6 class="card-colored__title"><?php echo $contentbox["information_block2"]["solutions-contentbox" . $counter . "-infoblock2-heading"]; ?></h6>
									<p class="card-colored__description"><?php echo $contentbox["information_block2"]["solutions-contentbox" . $counter . "-infoblock2-description"]; ?></p>
								</div>

							</div>

							<div class="s-advantages__cards-row">
								<div class="s-advantages__card card-colored card-colored_green">
									<img src="<?php echo $contentbox["information_block3"]["solutions-contentbox" . $counter . "-infoblock3-icon"]; ?>" alt="" class="card-colored__icon">
									<h6 class="card-colored__title"><?php echo $contentbox["information_block3"]["solutions-contentbox" . $counter . "-infoblock3-heading"]; ?></h6>
									<p class="card-colored__description"><?php echo $contentbox["information_block3"]["solutions-contentbox" . $counter . "-infoblock3-description"]; ?></p>
								</div>
								<div class="s-advantages__card card-colored card-colored_light-blue">
									<img src="<?php echo $contentbox["information_block4"]["solutions-contentbox" . $counter . "-infoblock4-icon"]; ?>" alt="" class="card-colored__icon">
									<h6 class="card-colored__title"><?php echo $contentbox["information_block4"]["solutions-contentbox" . $counter . "-infoblock4-heading"]; ?></h6>
									<p class="card-colored__description"><?php echo $contentbox["information_block4"]["solutions-contentbox" . $counter . "-infoblock4-description"]; ?></p>
								</div>

							</div>

						</div>
						<form action="<?php echo get_site_url(); ?>/spasibo" method="POST"
							class="s-advantages__form-container callback">
							<div class="s-advantages__input-tel-box input-shaded-box">

								<div class="main_thank_you">
									<div class="thank_you">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png"
											alt="thank_you">
										<h1>Спасибо <br> за вашу заявку!</h1>
										<ul>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
											<li>
												<div class="circle"></div>
											</li>
										</ul>
										<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
										<i class="far fa-times-circle"></i>
									</div>
								</div>

								<input type="hidden" name="project_name" value="Заказать">
								<input type="hidden" name="admin_email" value="info@roller-shut.ru">
								<input type="hidden" name="form_subject"
									value="Заявка с блока - Решения для любых  целей">

								<input type="text" class=" input-shaded-box__input" name="Телефон"
									placeholder="+7 (___) ___-__-__" required>
								<i class="input-shaded-box__icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="16px" height="16px">
										<image x="0px" y="0px" width="16px" height="16px"
											xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCh0UBC4KV6ewAAABTklEQVQoz13QMUiUARjG8d/3eTYICoKlizrmJuIgkWCG0UHaQSI4RoM1SArlElRQQoF0RDbkBS6HWIMYKihYiCBmEDmYRWH4oS5iTia1nDbcXUr/7YX/8z68bxBBoZjfstzTZdIzX7NjiPM2benMCQ802jTnkQIIoiavXPHLrFtGUGJfRpkR+zpkQkOuem/FBU8047FtD+1pVaSfIDoQ5pb3qdaNKk+Viiv2WXMQ7aizhQZT2iyBwJhVd91RGURpHzzHji7j8lT5pFylhVBKjxjeqnfEhteKRIaCiFkTBpVbdt2k/wjR7b7TtiWkXAZNXjiXFQp62fXToFE/zEs7pUzKG0lrvhEDw2pMi/uoTlKHuBVzZhyYCiK5wwZckvD9WH2tdyryTzp0W9KCXif+CSf9kQmPJV46q8UXN1UgIa3dYb7iiDNuuKjUumsW+QuZ5GAsaK1eTQAAAABJRU5ErkJggg==" />
									</svg>
								</i>
							</div>
							<button
								class="s-advantages__button button-original button-original_orange">Заказать</button>
						</form>
					</div>
				</div>

				<?php 

				endif; 
				}  // конец цикла for

				?>


			</div>
		</div>
	</div>


	<!-- <div class="s-works">
		<div class="s-works__container">
			<div class="s-works__inner">
				<h2 class="s-works__heading section-heading">Наши работы</h2>
				<div class="s-works__slider-wrapper">
					<div class="s-works__slider">
						<div class="s-works__slide">
							<div class="s-works__slide-inner">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
									class="s-works__slider-img inner-img">
							</div>
						</div>
						<div class="s-works__slide">
							<div class="s-works__slide-inner">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
									class="s-works__slider-img inner-img">
							</div>
						</div>
						<div class="s-works__slide">
							<div class="s-works__slide-inner">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
									class="s-works__slider-img inner-img">
							</div>
						</div>
						<div class="s-works__slide">
							<div class="s-works__slide-inner">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
									class="s-works__slider-img inner-img">
							</div>
						</div>
						<div class="s-works__slide">
							<div class="s-works__slide-inner">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
									class="s-works__slider-img inner-img">
							</div>
						</div>

					</div>
					<div class="s-works__btn-prev slider-btn slider-btn_big">
						<i class="slider-btn__prev-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="23px" height="11px">
								<image x="0px" y="0px" width="23px" height="11px"
									xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAALCAQAAAA+N97LAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCh4BEi4el9wSAAAAWElEQVQoz2P4zwCF0f9//I+F83BAGCP2/9//v/47Eqc88////7/++xFSDFFOtOL/DIz/MxmmMTAw7GTYwUAYXGP8/4uBlQiFEPCTRNNJdDsZIUNyuBMdqwAXUNYXrFwY+AAAAABJRU5ErkJggg==" />
							</svg>

						</i>
					</div>
					<div class="s-works__btn-next slider-btn slider-btn_big">
						<i class="slider-btn__next-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="23px" height="11px">
								<image x="0px" y="0px" width="23px" height="11px"
									xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAALCAQAAAA+N97LAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCh4BEzD9g9AwAAAAYElEQVQoz2P4z0AAxv7/8T8axiOkmOG/4/9f///+jyVWOcN/v/+//v//n0msciQNLAxuDFoMhME+BneGaQwMjP9/MLAToRwCfjP+J850DwZ3BgaGLBLdTvWQITHcUWIVAFWg0gXnPavUAAAAAElFTkSuQmCC" />
							</svg>

						</i>
					</div>
				</div>
				<div class="s-works__nav-slider">
					<div class="s-works__nav-slider-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
							class="inner-img"></div>
					<div class="s-works__nav-slider-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
							class="inner-img"></div>
					<div class="s-works__nav-slider-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
							class="inner-img"></div>
					<div class="s-works__nav-slider-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
							class="inner-img"></div>
					<div class="s-works__nav-slider-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
							class="inner-img"></div>
					<div class="s-works__nav-slider-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
							class="inner-img"></div>
					<div class="s-works__nav-slider-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works/slider/1.jpg" alt="Рольставни"
							class="inner-img"></div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="s-works-gallery" id="s-works-gallery">
		<div class="s-works-gallery__container">
			<div class="s-works-gallery__inner">
				<h2 class="s-works-gallery__heading section-heading">Наши работы</h2>
				<div class="s-works-gallery__photos-container">

								<?php
								$posts = get_posts( array(
									'post_type'   => 'work_photo',
									'posts_per_page' => -1         // кол-во записей (-1 это все) 
								) );


								foreach( $posts as $post ){
									setup_postdata($post); ?>
								
									<a href="#modal-gallery" class="s-works-gallery__photo-wrapper popup-with-move-anim">
										<img src="<?php the_field('our-works-photo'); ?>"
											alt="Рольставни" class="inner-img s-works-gallery__img">
									</a>


								<?php } ?>

								<?php wp_reset_postdata(); ?>

				
				
				</div>
				<button
					class="s-works-gallery__button button-original button-original_orange button-original_icon-include">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-works-gallery/circle.png"
						alt="" class="s-works-gallery__button-icon button-original__icon button-original__icon_rotate">
					Загрузить еще
				</button>
			</div>

		</div>



	</div>


	

	<div class="s-reviews" id="s-reviews">
		<div class="container">
			<div class="s-reviews__inner">
				<h2 class="s-reviews__heading section-heading"><?php the_field('reviews-heading'); ?></h2>
				<div class="s-reviews__slider-wrapper">
					<div class="s-reviews__slider">

					<?php
						for ($counter = 1; $counter <= 3; $counter++) {
					
					?>

						<div class="s-reviews__slide">
							<div class="s-reviews__slide-inner review-block">
								<div class="review-block__header">
									<p class="review-block__name"><?php the_field('review' .$counter. '-name'); ?></p>
									<div class="review-block__rating-box">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/review-block/stars.png"
											alt="" class="review-block__stars">
										<p class="review-block__rating-text">Оценка: <?php the_field('review' .$counter. '-rating'); ?></p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/review-block/ya-logo.png"
											alt="" class="review-block__ya-logo">
									</div>
								</div>
								<div class="review-block__body">
									<div class="review-block__text-container">
										<p class="review-block__location"><?php the_field('review' .$counter. '-location'); ?></p>
										<p class="review-block__date"><?php the_field('review' .$counter. '-date'); ?></p>
										<div class="review-block__main-text-wrapper">
											<div class="review-block__quotes">
												<svg xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" width="14px"
													height="13px">
													<image x="0px" y="0px" width="14px" height="13px"
														xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAMAAACuAq9NAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAApVBMVEX///8Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov7///9U3gwIAAAANXRSTlMASsflsCIVqM9YQfQHVM1C3IuG+OR9ZfJrewzhjPl6TcMgLqkIM2eUBHI288xbUUcQoAZXhPYJO18AAAABYktHRACIBR1IAAAAB3RJTUUH5AoeERoPhgHlNAAAAHdJREFUCNcdzNcSggAMRNGL2AAVxS7Ye6/7/78myT7kzGwmgaASVmtQb4TNCGKVSVqEZpuOoSh1ujjqZU6fgTscOWMm7nTm5FBIcy1Y2q8VsN5sFcNuf9ARS66TcVZqXJR5m1ydm5y7ncBDT+Olt/EpAl9+f+X4AzcjEy1dYZEKAAAAAElFTkSuQmCC" />
												</svg>
											</div>
											<p class="review-block__main-text"><?php the_field('review' .$counter. '-content'); ?></p>
										</div>
									</div>
									<div class="review-block__slider-wrapper">
										<div class="review-block__slider review-block__slider-1">
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php the_field('review' .$counter. '-small-slide-1'); ?>"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php the_field('review' .$counter. '-small-slide-2'); ?>"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php the_field('review' .$counter. '-small-slide-3'); ?>"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php the_field('review' .$counter. '-small-slide-4'); ?>"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php the_field('review' .$counter. '-small-slide-5'); ?>"
														alt="Рольставни" class="inner-img">
												</div>

											</div>

										</div>
										<div
											class="review-block__arrow-wrapper review-block__arrow-wrapper-next review-block__arrow-wrapper-next-1">
											<div class="review-block__arrow-next"></div>
										</div>
										<div
											class="review-block__arrow-wrapper review-block__arrow-wrapper-prev review-block__arrow-wrapper-prev-1">
											<div class="review-block__arrow-prev"></div>
										</div>
									</div>
								</div>

							</div>
						</div> <!-- /.s-reviews__slide -->

						<?php } ?>

						<!-- <div class="s-reviews__slide">
							<div class="s-reviews__slide-inner review-block">
								<div class="review-block__header">
									<p class="review-block__name">Елена</p>
									<div class="review-block__rating-box">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/review-block/stars.png"
											alt="" class="review-block__stars">
										<p class="review-block__rating-text">Оценка: 5</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/review-block/ya-logo.png"
											alt="" class="review-block__ya-logo">
									</div>
								</div>
								<div class="review-block__body">
									<div class="review-block__text-container">
										<p class="review-block__location">ДНТ Поляны-2</p>
										<p class="review-block__date">27.10.2020</p>
										<div class="review-block__main-text-wrapper">
											<div class="review-block__quotes">
												<svg xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" width="14px"
													height="13px">
													<image x="0px" y="0px" width="14px" height="13px"
														xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAMAAACuAq9NAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAApVBMVEX///8Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov7///9U3gwIAAAANXRSTlMASsflsCIVqM9YQfQHVM1C3IuG+OR9ZfJrewzhjPl6TcMgLqkIM2eUBHI288xbUUcQoAZXhPYJO18AAAABYktHRACIBR1IAAAAB3RJTUUH5AoeERoPhgHlNAAAAHdJREFUCNcdzNcSggAMRNGL2AAVxS7Ye6/7/78myT7kzGwmgaASVmtQb4TNCGKVSVqEZpuOoSh1ujjqZU6fgTscOWMm7nTm5FBIcy1Y2q8VsN5sFcNuf9ARS66TcVZqXJR5m1ydm5y7ncBDT+Olt/EpAl9+f+X4AzcjEy1dYZEKAAAAAElFTkSuQmCC" />
												</svg>
											</div>
											<p class="review-block__main-text">Заказывали роллету, чтобы закрыть проем.
												По размерам
												подошла идеально. Спасибо бригаде монтажников за быструю
												и качественную работу.</p>
										</div>
									</div>
									<div class="review-block__slider-wrapper">
										<div class="review-block__slider review-block__slider-2">
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/1.jpg"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/1.jpg"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/1.jpg"
														alt="Рольставни" class="inner-img">
												</div>

											</div>

										</div>
										<div
											class="review-block__arrow-wrapper review-block__arrow-wrapper-next review-block__arrow-wrapper-next-2">
											<div class="review-block__arrow-next"></div>
										</div>
										<div
											class="review-block__arrow-wrapper review-block__arrow-wrapper-prev review-block__arrow-wrapper-prev-2">
											<div class="review-block__arrow-prev"></div>
										</div>
									</div>
								</div>

							</div>
						</div> /.s-reviews__slide -->

						<!-- <div class="s-reviews__slide">
							<div class="s-reviews__slide-inner review-block">
								<div class="review-block__header">
									<p class="review-block__name">Елена</p>
									<div class="review-block__rating-box">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/review-block/stars.png"
											alt="" class="review-block__stars">
										<p class="review-block__rating-text">Оценка: 5</p>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/review-block/ya-logo.png"
											alt="" class="review-block__ya-logo">
									</div>
								</div>
								<div class="review-block__body">
									<div class="review-block__text-container">
										<p class="review-block__location">ДНТ Поляны-2</p>
										<p class="review-block__date">27.10.2020</p>
										<div class="review-block__main-text-wrapper">
											<div class="review-block__quotes">
												<svg xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" width="14px"
													height="13px">
													<image x="0px" y="0px" width="14px" height="13px"
														xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAANCAMAAACuAq9NAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAApVBMVEX///8Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov4Sov7///9U3gwIAAAANXRSTlMASsflsCIVqM9YQfQHVM1C3IuG+OR9ZfJrewzhjPl6TcMgLqkIM2eUBHI288xbUUcQoAZXhPYJO18AAAABYktHRACIBR1IAAAAB3RJTUUH5AoeERoPhgHlNAAAAHdJREFUCNcdzNcSggAMRNGL2AAVxS7Ye6/7/78myT7kzGwmgaASVmtQb4TNCGKVSVqEZpuOoSh1ujjqZU6fgTscOWMm7nTm5FBIcy1Y2q8VsN5sFcNuf9ARS66TcVZqXJR5m1ydm5y7ncBDT+Olt/EpAl9+f+X4AzcjEy1dYZEKAAAAAElFTkSuQmCC" />
												</svg>
											</div>
											<p class="review-block__main-text">Заказывали роллету, чтобы закрыть проем.
												По размерам
												подошла идеально. Спасибо бригаде монтажников за быструю
												и качественную работу.</p>
										</div>
									</div>
									<div class=" review-block__slider-wrapper">
										<div class="review-block__slider review-block__slider-3">
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/1.jpg"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/1.jpg"
														alt="Рольставни" class="inner-img">
												</div>

											</div>
											<div class="review-block__slide">
												<div class="review-block__slide-inner">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s-reviews/1.jpg"
														alt="Рольставни" class="inner-img">
												</div>

											</div>

										</div>
										<div
											class="review-block__arrow-wrapper review-block__arrow-wrapper-next review-block__arrow-wrapper-next-3">
											<div class="review-block__arrow-next"></div>
										</div>
										<div
											class="review-block__arrow-wrapper  review-block__arrow-wrapper-prev review-block__arrow-wrapper-prev-3">
											<div class="review-block__arrow-prev"></div>
										</div>
									</div>
								</div>

							</div>
						</div> /.s-reviews__slide -->



					</div>
					<div class="s-reviews__btn-prev slider-btn slider-btn_big">
						<i class="slider-btn__prev-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="23px" height="11px">
								<image x="0px" y="0px" width="23px" height="11px"
									xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAALCAQAAAA+N97LAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCh4BEi4el9wSAAAAWElEQVQoz2P4zwCF0f9//I+F83BAGCP2/9//v/47Eqc88////7/++xFSDFFOtOL/DIz/MxmmMTAw7GTYwUAYXGP8/4uBlQiFEPCTRNNJdDsZIUNyuBMdqwAXUNYXrFwY+AAAAABJRU5ErkJggg==" />
							</svg>

						</i>
					</div>
					<div class="s-reviews__btn-next slider-btn slider-btn_big">
						<i class="slider-btn__next-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="23px" height="11px">
								<image x="0px" y="0px" width="23px" height="11px"
									xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAALCAQAAAA+N97LAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkCh4BEzD9g9AwAAAAYElEQVQoz2P4z0AAxv7/8T8axiOkmOG/4/9f///+jyVWOcN/v/+//v//n0msciQNLAxuDFoMhME+BneGaQwMjP9/MLAToRwCfjP+J850DwZ3BgaGLBLdTvWQITHcUWIVAFWg0gXnPavUAAAAAElFTkSuQmCC" />
							</svg>

						</i>
					</div>
				</div>
			</div>
		</div>
	</div>



	<footer id="contacts">
		<div id="map"></div>
		<div class="block-director">
			<h3>Аюпов <br> Руслан Раильевич</h3>
			<span>директор компании</span>
			<p>Наша компания поможет Вам<br> с установкой роллставней <br> </p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brigade/director.png" alt="director">
		</div>
		<div class="block-form">
			<form action="<?php echo get_site_url(); ?>/spasibo" method="POST" class="callback">

				<div class="main_thank_you">
					<div class="thank_you">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png"
							alt="thank_you">
						<h1>Спасибо <br> за ваш вопрос!</h1>
						<ul>
							<li>
								<div class="circle"></div>
							</li>
							<li>
								<div class="circle"></div>
							</li>
							<li>
								<div class="circle"></div>
							</li>
							<li>
								<div class="circle"></div>
							</li>
							<li>
								<div class="circle"></div>
							</li>
						</ul>
						<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
						<i class="far fa-times-circle"></i>
					</div>
				</div>

				<input type="hidden" name="project_name" value="Остались вопросы">
				<input type="hidden" name="admin_email" value="info@roller-shut.ru">
				<input type="hidden" name="form_subject" value="Заявка с футера сайта">

				<h1>Остались вопросы?</h1>
				<p>Мы всегда готовы помочь Вам</p>
				<input type="tel" name="Телефон" placeholder="Ваш номер телефона" class="phone" required />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
					alt="icon-phone-form.png">
				<textarea name="Вопрос_клиента" placeholder="Введите Ваш вопрос" required></textarea>
				<button>Отправить запрос</button>
			</form>
		</div>
	</footer>

	<div class="marketing">
		<a href="https://premium-landing.ru/" target="_blank"><img
				src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_pl.png" alt="logo_pl"></a>
		<p>Создание продающих сайтов</p>
	</div>

	<!-- POPUP-ОКНО: Рассчет -->
	<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
		<form action="<?php echo get_site_url(); ?>/spasibo" method="POST" class="callback-popup">

			<div class="main_thank_you">
				<div class="thank_you">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png" alt="thank_you">
					<h1>Спасибо <br> за вашу заявку!</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
					<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
				</div>
			</div>

			<input type="hidden" name="project_name" value="Расчет">
			<input type="hidden" name="admin_email" value="info@roller-shut.ru">
			<input type="hidden" name="form_subject" value="Заявка с блока - Расчет">

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/house-popup.png" alt="house-popup"
				class="house-popup">
			<h1>Оставьте заявку <br> на расчет </h1>
			<ul>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
			</ul>
			<p>и получите консультацию специалиста <br> <span>в течении 15 минут</span></p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
				alt="icon-phone-form">
			<input type="tel" name="Телефон" placeholder="Ваш номер телефона" class="phone" required />
			<textarea name="Описание проекта" placeholder="Опишите свой проект" required /></textarea>
			<button>Получить расчет</button>
		</form>
	</div>

	<!-- POPUP-ОКНО: КАЛЬКУЛЯТОР СТОИМОСТИ  -->
	<div id="calc-dialog" class="zoom-anim-dialog mfp-hide">
		<form action="<?php echo get_site_url(); ?>/spasibo" method="POST" class="callback-popup">

			<div class="main_thank_you">
				<div class="thank_you">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png" alt="thank_you">
					<h1>Спасибо <br> за вашу заявку!</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
					<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
				</div>
			</div>

			<input type="hidden" name="project_name" value="Калькулятор">
			<input type="hidden" name="admin_email" value="info@roller-shut.ru">
			<input type="hidden" name="form_subject" value="Заявка с блока - Калькулятор стоимости">

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/calc-popup.png" alt="calc-popup"
				class="calc-popup">
			<h1>Подберём для вас лучший вариант <br><span>со скидкой 15%</span></h1>
			<ul>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
			</ul>
			<p>Осталовь только ввести <br> свой номер телефона</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
				alt="icon-phone-form">
			<input type="tel" name="Телефон" placeholder="Ваш номер телефона" class="phone" required />
			<button>Узнать стоимость</button>
		</form>
	</div>

	<!-- POPUP-ОКНО: УЗНАТЬ ПОДРОБНЕЕ -->
	<div id="more-dialog" class="zoom-anim-dialog mfp-hide">
		<form action="<?php echo get_site_url(); ?>/spasibo" method="POST" class="callback-popup">

			<div class="main_thank_you">
				<div class="thank_you">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png" alt="thank_you">
					<h1>Спасибо <br> за вашу заявку!</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
					<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
				</div>
			</div>

			<input type="hidden" name="project_name" value="Подробнее">
			<input type="hidden" name="admin_email" value="info@roller-shut.ru">
			<input type="hidden" name="form_subject" value="Заявка с блока - Узнать подробнее">

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/more-popup.png" alt="more-popup"
				class="more-popup">
			<h1>Предоставить вам<span> детальную расшифровку стоимости работ</span>
			</h1>
			<ul>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
			</ul>
			<p>Оставьте свой номер телефона и получите консультацию от эксперта</p>
			<div class="block-direcor-popup">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brigade/director.png" alt="director"
					class="img-director">
				<h6>"Я отвечаю лично <br> своим именем <br> о сроках и гарантиях <br> нашей компании"</h6>
				<span>Руслан аюпов</span>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
				alt="icon-phone-form">
			<input type="tel" name="Телефон" placeholder="Ваш номер телефона" class="phone" required />
			<button>Получить роллставни в срок</button>
		</form>
	</div>

	<!-- POPUP-ОКНО: Вызвать замерщика -->
	<div id="expedition-dialog" class="zoom-anim-dialog mfp-hide">
		<form action="<?php echo get_site_url(); ?>/spasibo" method="POST" class="callback-popup">

			<div class="main_thank_you">
				<div class="thank_you">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png" alt="thank_you">
					<h1>Спасибо <br> за вашу заявку!</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
					<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
				</div>
			</div>

			<input type="hidden" name="project_name" value="Вызвать замерщикаP">
			<input type="hidden" name="admin_email" value="info@roller-shut.ru">
			<input type="hidden" name="form_subject" value="Заявка с блока - Вызвать замерщика">

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/expedition-popup.png"
				alt="expedition-popup" class="expedition-popup">
			<h1>Вызвате бесплатно замерщика</h1>
			<ul>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
			</ul>
			<p>Осталовь только ввести <br> свой номер телефона</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
				alt="icon-phone-form">
			<input type="tel" name="Телефон" placeholder="Ваш номер телефона" class="phone" required />
			<button>Вызвать замерщика</button>
		</form>
	</div>

	<!-- POPUP-ОКНО: получите консультацию -->
	<div id="video-dialog" class="zoom-anim-dialog mfp-hide">
		<form action="<?php echo get_site_url(); ?>/spasibo" method="POST" class="callback-popup">

			<div class="main_thank_you">
				<div class="thank_you">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png" alt="thank_you">
					<h1>Спасибо <br> за вашу заявку!</h1>
					<ul>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
						<li>
							<div class="circle"></div>
						</li>
					</ul>
					<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
				</div>
			</div>

			<input type="hidden" name="project_name" value="Отзыв">
			<input type="hidden" name="admin_email" value="info@roller-shut.ru">
			<input type="hidden" name="form_subject" value="Заявка с блока - Посмотреть видеоотзыв">

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/video-popup.png" alt="video-popup"
				class="video-popup">
			<h1>Получите консультацию от наших экспертов и получите <span>скидку 15%</span></h1>
			<ul>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
			</ul>
			<p>Осталовь только ввести <br> свой номер телефона</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/icon-phone-form.png"
				alt="icon-phone-form">
			<input type="tel" name="Телефон" placeholder="Ваш номер телефона" class="phone" required />
			<button>Получить скидку 15%</button>
		</form>
	</div>

	<!-- POPUP-ОКНО: открытие фото из галереи s-works-rallery -->
	<div id="modal-gallery" class="zoom-anim-dialog mfp-hide">
		<div class="modal-gallery__content">
			<img src="#" alt="" class="inner-img modal-gallery__img">
		</div>
	</div>

	<div class="main_thank_you">
		<div class="thank_you">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thank_you.png" alt="thank_you">
			<h1>Спасибо <br> за вашу заявку!</h1>
			<ul>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
				<li>
					<div class="circle"></div>
				</li>
			</ul>
			<p>Наш менеджер свяжется с Вами <br><span>в течении 15 минут</span></p>
			<i class="far fa-times-circle"></i>
		</div>
	</div>

	<?php wp_footer() ?>


	<script>
		function initMap() {
			var element = document.getElementById('map');
			var options = {
				zoom: 10.5,
				center: {
					lat: 55.753215,
					lng: 37.622504
				}
			};

			var myMap = new google.maps.Map(element, options);

			addMarker({
				lat: 55.753215,
				lng: 37.622504
			});
			addMarker({
				lat: 55.6831014,
				lng: 37.8646789
			});
			addMarker({
				lat: 55.5767562,
				lng: 37.9508018
			});
			addMarker({
				lat: 55.4311005,
				lng: 37.7259994
			});
			addMarker({
				lat: 55.7347671,
				lng: 37.7072967
			});
			addMarker({
				lat: 55.7886379,
				lng: 37.6287657
			});
			addMarker({
				lat: 55.2021896,
				lng: 37.7123814
			});
			addMarker({
				lat: 55.7976263,
				lng: 37.515962
			});
			addMarker({
				lat: 55.8731445,
				lng: 37.8539814
			});
			addMarker({
				lat: 55.7529499,
				lng: 37.6859691
			});
			addMarker({
				lat: 55.8866882,
				lng: 37.7032297
			});
			addMarker({
				lat: 55.2271418,
				lng: 37.6588268
			});
			addMarker({
				lat: 55.6886223,
				lng: 37.6607057
			});
			addMarker({
				lat: 55.5984087,
				lng: 37.6730466
			});
			addMarker({
				lat: 55.797647,
				lng: 37.6193168
			});
			addMarker({
				lat: 55.8318776,
				lng: 37.8060342
			});
			addMarker({
				lat: 55.4056805,
				lng: 37.7509803
			});
			addMarker({
				lat: 55.5534779,
				lng: 37.5269598
			});
			addMarker({
				lat: 55.6606267,
				lng: 37.7826468
			});
			addMarker({
				lat: 55.6738582,
				lng: 37.6106003
			});
			addMarker({
				lat: 55.8651533,
				lng: 37.7070475
			});
			addMarker({
				lat: 55.6877914,
				lng: 37.2410712
			});
			addMarker({
				lat: 55.5766551,
				lng: 37.2063907
			});
			addMarker({
				lat: 55.7935759,
				lng: 37.4057816
			});
			addMarker({
				lat: 55.798384,
				lng: 37.7517743
			});
			addMarker({
				lat: 55.6235868,
				lng: 37.8793405
			});
			addMarker({
				lat: 55.5246229,
				lng: 37.48588
			});
			addMarker({
				lat: 59.7915424,
				lng: 37.6287662
			});
			addMarker({
				lat: 59.9875307,
				lng: 37.8424426
			});
			addMarker({
				lat: 59.9956015,
				lng: 37.6539601
			});
			addMarker({
				lat: 59.7817712,
				lng: 37.859482
			});
			addMarker({
				lat: 55.8748972,
				lng: 37.9825086
			});
			addMarker({
				lat: 55.7853304,
				lng: 37.0129979
			});
			addMarker({
				lat: 55.9807609,
				lng: 37.5959593
			});
			addMarker({
				lat: 55.5897808,
				lng: 37.63080135
			});
			addMarker({
				lat: 55.9849839,
				lng: 37.8978117
			});

			function addMarker(coordinates) {
				var marker = new google.maps.Marker({
					position: coordinates,
					map: myMap
				});

			}
		}
	</script>
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8bjr1m8s-Qnszs5RH2YfO4UOWnQklK10&callback=initMap">
	</script>
</body>

</html>