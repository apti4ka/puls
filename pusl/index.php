<?php
defined('_JEXEC') or die;
$this->setGenerator(null); //отключили мета-тег generator
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<jdoc:include type="head" />
	
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/font.css">
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/slick.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css"> -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->


<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
<link href="templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />	
</head>

<body id="page">
	
    <section class="header_menu">

        <nav id="menu" class="top-menu" onclick="this.className = (this.className == 'topmenu' ? 'mobilemenu' : 'topmenu')"> 
			<jdoc:include type="modules" name="menu" style="none" />
			
            <div class="container">
            
            </div>
			
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>		
     
    </section>	
    
    <?php if($this->countModules('promo')):?>
    <section class="promo">
    <?php endif; ?>

    <div class="promo__header_wrapper">
        <div class="promo__container_wrapper">
   
                <div class="container">
                    <header class="header">
                        <a href="/" class="header__logo">
                            <img src="templates/<?php echo $this->template ?>/icons/logo/sokolov_logo-300.png" alt="logo">
                        </a>
                        <div class="header__official">
                            Профессиональный массаж в Барнауле
                            <span>Адрес: ул. Никтина 92, г. Барнаул</span>
                        </div>
                        <div class="header__contacts">
                            <a href="tel:+79132503879" class="header__phone">+7 (913) 250-38-79</a>
                            <button data-modal="consultation" class="button">заказать звонок</button>
                        </div>
                    </header>

                    <?php if($this->countModules('promo')):?>
                <div class="promo__wrapper">
                    <h1 class="promo__header">
                        Индивидуальный
                        <br>
                        Подбор массажа</h1>
                    <h2 class="promo__subheader">с учётом Вашего состояния<br>здоровья</h2>
                    <div class="promo__icons">
                        <div class="promo__icon">
                            <img src="templates/<?php echo $this->template ?>/icons/main_screen/timer.png" alt="timer">
                            Время подбора:
                            10 минут
                        </div>
                        <div class="promo__icon">
                            <img src="templates/<?php echo $this->template ?>/icons/main_screen/hand-cart.png" alt="hand-cart">
                            Бесплатная
                            доставка
                        </div>
                        <div class="promo__icon">
                            <img src="templates/<?php echo $this->template ?>/icons/main_screen/messages.png" alt="messages">
                            Ответим
                            на все вопросы
                        </div>
                    </div>
                    <button data-modal="consultation" class="button button_main">заказать кОНСУЛЬТАЦИЮ</button>
                    <div class="promo__link">
                        или <a href="#">ПЕРЕЙТИ В КАТАЛОГ</a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </section>

    <section class="content">
        <div class="container">
            <?php if($this->countModules('breadcrumbs')):?>
                <div class="breadcrumbs">
                    <jdoc:include type="modules" name="Breadcrumbs" style="none" />
                </div>
            <?php endif; ?>
                <jdoc:include type="message" />
                <jdoc:include type="component" />
        </div>
    </section>

    <?php if($this->countModules('advantages')):?>            
    <section class="advantages">
        <div class="container">
            <h2 class="title">НАШИ ПРЕИМУЩЕСТВА</h2>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <img src="templates/<?php echo $this->template ?>/icons/advantages/cup.png" alt="cup" class="advantages__icon">
                    <div class="advantages__subtitle">
                        12 лет опыта
                    </div>
                    <div class="advantages__descr">Наши сотрудники всегда готовы поделиться своим опытом, 
                        так как сами бегают полумарафоны, переплыли Босфор, готовятся к соревнованиям по триатлону!
                    </div>
                </div>
                <div class="advantages__item">
                    <img src="templates/<?php echo $this->template ?>/icons/advantages/heart.png" alt="heart" class="advantages__icon">
                    <div class="advantages__subtitle">
                        Заботимся о здоровье
                    </div>
                    <div class="advantages__descr">Мы работаем для того, 
                        чтобы Ваши сеансы массажа шли на пользу Вашему здоровью и были в радость Вам и Вашим близким!
                    </div>
                </div>
                <div class="advantages__item">
                    <img src="templates/<?php echo $this->template ?>/icons/advantages/shoe.png" alt="shoe" class="advantages__icon">
                    <div class="advantages__subtitle">
                        Удобное растоложение
                    </div>
                    <div class="advantages__descr">Находится в центре города, между остановками Дом Союзов и Анатолия. 
                        <br>  
                        <a href="#">I LOVE RUNNING.</a>
                    </div>
                </div>
            </div>                                    

        </div>
    </section>
    <?php endif; ?>

    <?php if($this->countModules('consultation')):?>
    <section class="consultation">
        <div class="container">
            <h2 class="title title_left">
                Получите бесплатную консультацию<br>
                по подбору пульсометра 
            </h2>
            <div class="consultation__descr">
                Просто заполните форму заявки<br> 
                и мы перезвоним вам в течении 10 минут
            </div>
            <form id="consultation-form" class="feed-form" action="#">
                <input name="name" required placeholder="Ваше имя" type="text">
                <input name="phone" required placeholder="Ваш телефон">
                <input name="email" required placeholder="Ваш E-mail" type="email">

                <button class="button button_submit">Заказать консультацию</button>
            </form>
        </div>
    </section>
    <?php endif; ?>



    <section class="carousel">
        <div class="container">

            <div class="carousel__inner">
                <div>
                    <img src="templates/<?php echo $this->template ?>/img/slide_1.jpg" alt="slide">
                </div>
                <div>
                    <img src="templates/<?php echo $this->template ?>/img/slide_2.jpg" alt="slide">
                </div>
                <div>
                    <img src="templates/<?php echo $this->template ?>/img/slide_3.jpg" alt="slide">
                </div>
            </div>


            <!-- <button type="button" class="prev"><img src="icons/left.svg"></button>
            <button type="button" class="next"><img src="icons/right.svg"></button> -->
        
            <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slide_1.jpg" alt="slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide_2.jpg" alt="slide">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide_3.jpg" alt="slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><button type="button" class="prev"><img src="icons/left.svg"></button></span>
                    <span class="sr-only">Назад</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><button type="button" class="next"><img src="icons/right.svg"></button></span>
                    <span class="sr-only">Вперед</span>
                </a>
              </div> -->
        
        <!-- </div>-->
    </section>

    <!-- <section class="catalog">
        <div class="container container_catalog">
            <h2 class="title">Каталог пульсометров</h2>
            <ul class="catalog__tabs">
                <li class="catalog__tab catalog__tab_active"><div>Для фитнеса</div></li>
                <li class="catalog__tab"><div>для бега</div></li>
                <li class="catalog__tab"><div>для триатлона</div></li>
            </ul>
                <div class="catalog__content catalog__content_active">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
                <div class="catalog__content">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
                <div class="catalog__content">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content  catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content  catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/img/pulsometr.png" alt="pulsometr" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Пульсометр Polar FT1</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="#" class="catalog-item__back">Назад</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">4 750 руб.</div>
                                <div class="catalog-item__price">4 500 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
              
        </div>
    </section> -->

    <?php if($this->countModules('reviews')):?>
    <section class="reviews">
        <div class="container">

        <h2 class="title">отзывы клиентов</h2>

        <jdoc:include type="modules" name="reviews" style="none" />

           
        </div>
    </section>
    <?php endif; ?>

    <footer class="footer">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.474981139927!2d83.78428131564897!3d53.33475318328089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dda5d25e61026d%3A0xacf26f29f0455edb!2z0KHRgtGD0LTQuNGPINC80LDRgdGB0LDQttCwINCQ0LvQtdC60YHQsNC90LTRgNCwINCh0L7QutC-0LvQvtCy0LA!5e0!3m2!1sru!2sru!4v1589809287399!5m2!1sru!2sru" width="100%" height="630" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
        <div class="footer__info">
            <div class="footer__name">Профессиональный массаж</div>
            <address class="footer__addr">Барнаул, Ул. Ниикитина 92</address>
            <a class="footer__phone" href="tel:79132503879">8-913-250-38-79</a>
            <div class="footer__social">
                <a href="#" class="footer__social-item"><img src="templates/<?php echo $this->template ?>/icons/facebook.svg" alt="facebook"></a>
                <a href="#" class="footer__social-item"><img src="templates/<?php echo $this->template ?>/icons/instagram.svg" alt="instagram"></a>
                <a href="#" class="footer__social-item"><img src="templates/<?php echo $this->template ?>/icons/pinterest.svg" alt="pinterest"></a>
            </div>
        </div>
    </footer>

    
    <!-- <section class="footer_lower">
        <div class="footer_lower_wrapper">
            
            <div>
                <div class="footer__social">
                    <a href="#" class="footer__social-item"><img src="templates/<?php echo $this->template ?>/icons/facebook.svg" alt="facebook"></a>
                    <a href="#" class="footer__social-item"><img src="templates/<?php echo $this->template ?>/icons/instagram.svg" alt="instagram"></a>
                    <a href="#" class="footer__social-item"><img src="templates/<?php echo $this->template ?>/icons/pinterest.svg" alt="pinterest"></a>
                </div> -->
                <!-- <div class="footer_social">
                    <a href="#" class="footer_lower__social_item">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="footer_lower__social_item">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="footer_lower__social_item">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="footer_lower__social_item">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div> -->
            <!-- </div>
            <div>
                <div class="footer_lower__links">
                    <div class="footer_lower__links_main">
                        <a href="#">на главную</a>
                        <a href="#">города</a>
                        <a href="#">для водителей</a>
                    </div>
                    <div class="footer_lower__links_sub">
                        <a href="#">центр поддержки</a>
                        <a href="#">вакансии</a>
                        <a href="#">разработчики</a>
                        <a href="#">блог</a>
                        <a href="#">о нас</a>
                    </div>
                    <a href="#" class="footer_lower__links_lang">Русский</a>
                </div>
            </div>
            <div>
                <div class="footer_lower__mobile">
                    <a href="#">
                    <img src="templates/<?php echo $this->template ?>/img/app_store.png" alt="App Store">
                    </a>
                    <a href="#">
                    <img src="templates/<?php echo $this->template ?>/img/google_play.png" alt="Google play">
                    </a>
                    <a href="#">
                    <img src="templates/<?php echo $this->template ?>/img/windows_store.png" alt="Windows store">
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <div class="overlay">
        <div class="modal" id="consultation">
            <div class="modal__close">&times</div>
            <div class="modal__subtitle">Просто заполните форму заявки</div>
            <div class="modal__descr">и мы перезвоним вам в течении 10 минут</div>
            <form class="feed-form feed-form_mt25" action="#">
                <input name="name" required placeholder="Ваше имя" type="text">
                <input name="phone" required placeholder="Ваш телефон">
                <input name="email" required placeholder="Ваш E-mail" type="email">

                <button class="button button_submit">Заказать консультацию</button>
            </form>
        </div>

        <div class="modal" id="order">
            <div class="modal__close">&times</div>
            <div class="modal__subtitle">Ваш заказ:</div>
            <div class="modal__descr">Пульсометр Polar FT1</div>
            <form class="feed-form feed-form_mt25" action="#">
                <input name="name" required placeholder="Ваше имя" type="text">
                <input name="phone" required placeholder="Ваш телефон">
                <input name="email" required placeholder="Ваш E-mail" type="email">

                <button class="button button_submit">Купить</button>
            </form>
        </div>

        <div class="modal modal_mini" id="thanks">
            <div class="modal__close">&times</div>
            <div class="modal__subtitle">Спасибо за вашу заявку!            </div>
            <div class="modal__descr">Наш менеджер свяжется с вами в ближайшее время!</div>
        </div>

    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/js/slick.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/js/jquery.validate.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/js/jquery.maskedinput.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script> -->
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    


    <script src="templates/<?php echo $this->template ?>/js/script.js"></script>

    <script src="templates/<?php echo $this->template ?>/js/script_test.js"></script>
	
</body>
</html>
