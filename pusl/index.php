<?php
defined('_JEXEC') or die;
$this->setGenerator(null); //отключили мета-тег generator
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<link rel="shortcut icon" href="templates/<?php echo $this->template ?>/icons/favicon.ico" type="image/x-icon">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<jdoc:include type="head" />


<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/bootstrap-reboot.min.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/bootstrap-grid.min.css" type="text/css" /> 
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/font.css" type="text/css" />



<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet"> -->

<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/slick.css" type="text/css" />

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
<link href="templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />	
</head>

<body id="page">

<?php if($this->countModules('header')):?>
<section  id="up" class="header">
            
    <nav id="menu" class="top-menu" onclick="this.className = (this.className == 'top-menu' ? 'mobilemenu' : 'top-menu')"> 
        <div class="top-menu_mob">
            Меню
        </div>
           
        <div class="mobilemenu_mob">
            Профессиональный массаж
        </div> 
                
            <!-- <div class="header__container__menu"> -->
                <jdoc:include type="modules" name="menu" style="none" />
                    <div class="container">
                    </div>
            <!-- </div> -->

                <!-- </nav> -->
    </nav>
            
                    <div class="header__subheader">
                            <div class="row header__subheader__row">
                                <div class="col-3 col-xl-2 col-lg-3 col-md-2 col-sm-7 offset-1 offset-xl-1 offset-lg-0 offset-md-0 offset-sm-0">
                                    <a href="/" class="header__subheader__logo">
                                        <img src="templates/<?php echo $this->template ?>/icons/logo/sokolov_logo-300.png" alt="logo">
                                    </a>
                                    <a href="/" class="header__subheader__logo__mob">
                                        <img src="templates/<?php echo $this->template ?>/icons/logo/logo_sokolov_200x272.png" alt="logo">
                                    </a>
                                </div>
                            
                                <div class="col-1 col-xl-6 col-lg-6 col-md-6 col-sm-1 offset-0 offset-xl-0 offset-lg-0 offset-md-1 offset-sm-0">
                                    <div class="header__subheader__official">
                                        Профессиональный массаж в Барнауле
                                        <span>Адрес: ул. Никтина 92, г. Барнаул</span>
                                    </div>
                                </div>

                                <div class="col-5 col-xl-3 col-lg-3 col-md-3 col-sm-4  offset-0 offset-xl-0 offset-lg-0 offset-md-0 offset-sm-0">
                                    <div class="header__subheader__contacts">
                                        <a href="tel:+79132503879" class="header__subheader__phone header__subheader__phone__mob">+7 (913) 250-38-79</a>
                                        <button data-modal="consultation" class="button">заказать звонок</button>
                                    </div>
                                </div>
                            </div>
                    </div>

     
</section>
<?php endif; ?>




<?php if($this->countModules('carousel')):?>
    <!-- <section class="carousel">
        <div class="carousel__container">

            <div class="carousel__inner">
                <div>
                    <img src="templates/<?php echo $this->template ?>/images/services/type-massage/facial-massage/facial-massage/VIT_2402_1600x500_slide.jpg" alt="slide">
                </div>
                <div>
                    <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/anti-cellulite-massage/massage22_001_VIT_2297_1600x500_slide.jpg" alt="slide">
                </div>
                <div>
                    <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/back_massage/massage22_006_VIT_2276_1600x500_slide.jpg" alt="slide">
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
        
        </div> 
    </section> 
    <?php endif; ?>

        

              

<!-- <section  id="up" class="header_cap">

                <div class="container_header">

                    <header class="header1">
                        <a href="/" class="header1__logo">
                            <img src="templates/<?php echo $this->template ?>/icons/logo/sokolov_logo-300.png" alt="logo">
                        </a>
                        <div class="header1__official">
                            Профессиональный массаж в Барнауле
                            <span>Адрес: ул. Никтина 92, г. Барнаул</span>
                        </div>
                        <div class="header1__contacts">
                            <a href="tel:+79132503879" class="header1__phone">+7 (913) 250-38-79</a>
                            <button data-modal="consultation" class="button">заказать звонок</button>
                        </div>
                    </header>


                    <nav id="menu" class="top-menu" onclick="this.className = (this.className == 'topmenu' ? 'mobilemenu' : 'topmenu')"> 
                        <jdoc:include type="modules" name="menu" style="none" />
                        <div class="container">
                        </div>
                    </nav>	

                </div>
     
    </section>	 -->
	
    <!-- 
        
    
       
    <!-- <?php if($this->countModules('promo')):?> 
    <section class="promo">
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
                        или <a href="#catalog">ПЕРЕЙТИ В КАТАЛОГ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php endif; ?>                 -->

   
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



    <!-- <?php if($this->countModules('forms-new')):?>
    <section class="forms-new">
        <wraaper>
            <div class="dws-wraaper">
                <input type="checkBox" name="toggle" id="dws-form-new" class="toggleForm-new">
                <div class="dws-container">
                    <label for="dws-form-new" class="toggleForm-new"><i class="fa fa-question-circle"></i>Задать вопрос</label>
                    <form class="formBox">
                        <div class="inputBox">
                            <label class="labelText">Ваше имя:</label>
                            <input type="text" class="userInput" required>
                        </div>
                        <div class="inputBox">
                            <label class="labelText">E-mail:</label>
                            <input type="e-mail" class="userInput" required>
                        </div>
                   
                        <div class="inputBox">
                            <label class="labelText">Номер телефона:</label>
                            <input type="text" class="userInput" required pattern="\d+">
                        </div>
                        <div class="inputBox">
                            <label class="labelText">Сообщение:</label>
                            <textarea class="userInput" required></textarea>
                        </div>
                        <div class="inputBox">
                            <input type="checkBox" required>
                            <label class="personalDoc">Я согласе а обработку моих <a href="#">персональных данных</a>:</label>
                        </div>
                        <input type="submit" value="Отправить" class="button">
                    </form>
                </div>
            </div>
        <wraaper>
    </section> 
<?php endif; ?> -->

<!-- Начало: Новая верся Section about -->

<?php if($this->countModules('about')):?>
    <section class="about">
        <div class="container">
           
        <h2 class="title">Знакомство с нами</h2>
           

            <div class="about__wrapper">
                <div class="about__item">
                    <div class="about__subtitle">
                    Добро пожаловать на массаж!
                    </div>
                    <div class="about__descr about__descr_youtube">
                    <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ksQ-a92sf9s" frameborder="0"        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"    allowfullscreen></iframe> -->
                    </div>
                    <button class="button button__about_youtube"><a href="/photos-videos">Подробнее</a></button>
                </div>

                <div class="about__item">
                    <div class="about__subtitle">
                    Дорогие друзья! Приветствую вас на моем сайте!
                    </div>
                    <div class="about__descr">Меня зовут Александр Соколов. За двенадцать лет провел более 15 700 часов работая над красотой и здоровьем клиентов. Помог свыше 7800 клиентам.
                            <br><br>
                            Массаж нужен каждому здоровому человеку, а не только тем, кому назначил врач. Особенно массаж рекомендован офисным работникам, спортсменам, молодым мамам и каждому человеку, который хочет быть здоровым. 
                            <br><br>
                            Чем отличаюсь от других специалистов? 
                            <br><br>
                            Для меня важен результат. Когда человек приходит на массаж со своими проблемами, то моя цель за короткий промежуток времени добиться максимального улучшения.
                            <br><br>
                            Эффект от массажа. Вы можете оценивать результат массажа по сброшенным сантиметрам, по легкости в теле и хорошему настроению.
                            <br><br>
                            <img src="templates/<?php echo $this->template ?>/images/services/ukrasheniya/about_avatar.jpg" alt="about">
                            
                            <strong>Мы находимся по адресу:</strong>
                            <br><br>
                            
                            г. Барнаул, ул. Никитина 92, 1 подъезд
                            <br>
                            
                            Студия массажа Александра Соколова!
                                                       
                            <button class="button button__about"><a href="/about_studio">Подробнее</a></button>
                    </div>
                </div>
                
            </div>  
 
        </div>
    </section>    
    <?php endif; ?>

<!-- Конец: Новая верся Section about -->


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
    <!-- <section class="consultation">
        <div class="container">
            <h2 class="title title_left">
                Получите бесплатную консультацию<br>
                по подбору массажа 
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
    </section> -->
    <?php endif; ?>

<?php if($this->countModules('carousel')):?>
    <section class="carousel">
        <div class="container">

            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                    </div>

                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                    </div>
                    
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>










            <!--<div class="carousel__inner">
                <div>
                    <img src="templates/<?php echo $this->template ?>/images/services/massaj_lica/VIT_2402_1600x900_b.jpg" alt="slide">
                </div>
                <div>
                    <img src="templates/<?php echo $this->template ?>/images/services/antitsellyulitnyj-massazh/massage22_001_VIT_2297_1600x900_b.jpg" alt="slide">
                </div>
                <div>
                    <img src="templates/<?php echo $this->template ?>/images/services/spiny/massage22_006_VIT_2276_1600x900_b.jpg" alt="slide">
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
        
        </div>
    </section>
    <?php endif; ?>

<!-- Каталог виды массажа -->

    <?php if($this->countModules('catalog')):?>
    <section id="catalog" class="catalog">
        <div class="container container_catalog">
            <h2 class="title">Виды массажа</h2>
            <ul class="catalog__tabs catalog__tabs__mob">
                <li class="catalog__tab catalog__tab_active"><div>Популярные</div></li>
                <li class="catalog__tab"><div>Классический</div></li>
                <li class="catalog__tab"><div>Атицеллюлитный</div></li>
                <li class="catalog__tab"><div>Расслабляющий</div></li>
            </ul>

            <!-- <ul class="catalog__tabs__mob">
                <li class="catalog__tab catalog__tab_active"><div>Популярные</div></li>
                <li class="catalog__tab"><div>Классический</div></li>
                <li class="catalog__tab"><div>Атицеллюлитный</div></li>
                <li class="catalog__tab"><div>Расслабляющий</div></li>
            </ul> -->



                <div class="catalog__content catalog__content_active">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/facial-massage/facial-massage/VIT_2402_200x200_s.jpg" alt="Массаж лица - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle wow">Массаж лица</div>
                                <div class="catalog-item__descr">Решает проблему возрастных изменений на лице. Альтернатива хирургических вмешательств и постановка инъекций красоты.</div>
                                <!-- Подробнее смещение в карточке товара на главной-->
                                <!-- <a href="#" class="catalog-item__link__links">ПОДРОБНЕЕ</a> -->
                                <a href="../type-massage/facial-massage/myofascial-massage-face/" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">1 500 руб.</div>
                                <div class="catalog-item__price">1 300 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/anti-cellulite-massage/massage22_001_VIT_2297_200x200_s.jpg" alt="Антицеллюлитный массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Антицеллюлитный массаж</div>
                                <div class="catalog-item__descr">Эффективный спрособ умеьшить лиший объем, придать тонус мышцам, подтянуть кожу.</div>
                                <a href="../type-massage/anti-cellulite-massage/anti-cellulite-massage/" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <div class="catalog-item__olde_price">1 000 руб.</div>
                                <div class="catalog-item__price">900 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/back_massage/massage22_006_VIT_2276_200x200_s.jpg" alt="Массаж спины - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж спины</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="../type-massage/classical-massage/back_massage/" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">1 000 руб.</div>
                                <div class="catalog-item__price"> 900 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/baby_massage/massage22_kab_8035_200x200_s.jpg" alt="Детскй массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Детскй массаж</div>
                                <div class="catalog-item__descr">Позволяет решать проблемы осанки, убирает гипертонус или гипотонус мышц.</div>
                                <a href="../massage-22/type-massage/baby_massage/" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">1 000 руб.</div>
                                <div class="catalog-item__price"> 800 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
                <div class="catalog__content">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/obschiy_klassicheskiy_massaj/massage22_001_VIT_2279_200x200_s.jpg" alt="Общий массаж тела классический - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Общий массаж тела классический</div>
                                <div class="catalog-item__descr">Снимает напряжение и усталость в теле. Приводит мышцы в тонус. </div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
                            </div>
                            <div class="catalog-item__list">
                                <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <hr>
                        <div class="catalog-item__footer">
                            <div class="catalog-item__prices">
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/massage_pregnancy/massazh-pri-beremennosti_0165_massage22_200x200_s.jpg" alt="Массаж при беременности - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж при беременности</div>
                                <div class="catalog-item__descr">Решает проблему болей в шеи, в спине, в руках, убирает отек в ногах.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/head_massage/massage22_6903_200x200_s.jpg" alt="Массаж головы - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж головы</div>
                                <div class="catalog-item__descr">За короткое время устраняет головную боль, снимает стресс, убирает физическую и психологическую усталость.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price"> 800 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/neck_collar_massage/massage22_001_VIT_2251_200x200_s.jpg" alt="Массаж шейно-воротниковой зоны - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж шейно-воротниковой зоны</div>
                                <div class="catalog-item__descr">Позволяет снять дискомфорт в области шеи и плеч (шейный остиохондроз).</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">800 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/back_massage/massage22_006_VIT_2276_200x200_s.jpg" alt="Массаж спины - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж спины</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">1 000 руб.</div>
                                <div class="catalog-item__price"> 900 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/breast_massage/breast_massage_001_massage22_200x200_s.jpg" alt="Массаж груди - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж груди</div>
                                <div class="catalog-item__descr">Массаж улучшает форму, повышает тонус и упругость груди. Профилактика кист и мастопатии</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">800 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/abdominal_massage/massage22_7071_200x200_s.jpg" alt="Массаж живота - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж живота</div>
                                <div class="catalog-item__descr">Снимает напряжение и усталость в теле. Приводит мышцы в тонус. </div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/lower_back_massage/massage22_001_VIT_2236_200x200_s.jpg" alt="Массаж поясицы - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж поясицы</div>
                                <div class="catalog-item__descr">Снимает мышечные спазмы, избавляет от боли в пояснице, исправляет дефекты в походке.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">800 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/hand_massage/massage22_7068_200x200_s.jpg" alt="Массаж рук и кистей - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж рук и кистей</div>
                                <div class="catalog-item__descr">Снимет проявления онимения рук, тянущюю, ноющюю боль в руках, периодически отдающюю в пяльцы рук.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">800 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/classical_massage/foot_massage/massage22_001_VIT_2325_200x200_s.jpg" alt="Общий массаж тела классически - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж ног</div>
                                <div class="catalog-item__descr">Снимает болевые ощущения в ногах, решает проблему чувства тянущих, ноющих, отекших ног.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>

                <div class="catalog__content">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/anti-cellulite-massage/massage22_001_VIT_2297_200x200_s.jpg" alt="Антицеллюлитный массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Антицеллюлитный массаж</div>
                                <div class="catalog-item__descr">Эффективный и быстрый способ избавления от визуальных и тактильных проблем, неровностей кожи, лишних объемов в проблемных зонах.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/lymphatic_drainage_massage/massage22_001_VIT_2333_200x200_s.jpg" alt="Лимфодренажный массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Лимфодренажный массаж</div>
                                <div class="catalog-item__descr">Массаж устраняет застойные явления (отеки), способствует ввыведению из оргаизма токсов.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/massage_after_childbirth/massage22_posle_rodov_200x200_s.jpg" alt="Массаж после родов - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж после родов</div>
                                <div class="catalog-item__descr">Облегчает выход из послеродовой дипресси. Помогает скорейшему восстановлению организма в целом и его отдельных функций в частности.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/abdominal_massage_men/abdominal_massage_men_200x200_s.jpg" alt="Массаж живота для мужчин - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж живота для мужчин</div>
                                <div class="catalog-item__descr">Убирает лишний объем живота, боков, подтягивается кожа, приводит мышцы в тонус.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/honey_massage/honey-massage_200x200_s.jpg" alt="Медовый массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Медовый массаж</div>
                                <div class="catalog-item__descr">Эффективен против целлюлита. Помогает организму вывести шлаки, улучшить тонус самой кожи</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/anti-cellulite-massage/cupping_massage/cupping-massage_200x200_s.jpg" alt="Баночный массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Баночный массаж</div>
                                <div class="catalog-item__descr">Снимает болевые ощущения в ногах, решает проблему чувства тянущих, ноющих, отекших ног.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>

                <div class="catalog__content">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/relaxing-massage/general-massage-relaxing/massage22_001_VIT_2259_200x200_s.jpg" alt="Общий массаж расслабляющий - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Общий массаж расслабляющий</div>
                                <div class="catalog-item__descr">Снимает физическое и эмоцональное напряжение, расслабляет мышцы, нормализуется кровообращение.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/relaxing-massage/stone-therapy/massage22_7202_200x200_s.jpg" alt="Массаж горячими камнями - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж горячими камнями</div>
                                <div class="catalog-item__descr">Горячий и эффективный массаж. Человек погружается в состояния глубочайшего расслабления, который снимает стресс.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/relaxing-massage/fire-massage/massage22_001_fire-massage_IMG_2356_200x200_s.jpg" alt="Огненный массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Огненный массаж</div>
                                <div class="catalog-item__descr">Во время массажа вы испытаете бурю эмоций, а в конце расслабление. Эксклюзивный, расслабляющий подарок для своим близким и друзей.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/relaxing-massage/spanish-massage/massage22_001_VIT_2281_200x200_s.jpg" alt="Испанский массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Испанский массаж</div>
                                <div class="catalog-item__descr">Массаж погрузит вас в состояние максимальной расслабленности. Мышцы станут мягкими, эластичными.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/relaxing-massage/thai-foot-massage/massage22_001_VIT_2319_200x200_s.jpg" alt="Тайский массаж стоп - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Тайский массаж стоп</div>
                                <div class="catalog-item__descr">Безумно приятный и расслабляющий массаж. Снимает напряжение стоп и ног.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/type-massage/relaxing-massage/thai_hand_massage/massage22_7060_200x200_s.jpg" alt="Тайский массаж кистей - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Тайский массаж кистей</div>
                                <div class="catalog-item__descr">Повышает чувствительность рук, делает их нежными, мягкими, изящными.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <!-- <div class="catalog-item__olde_price">4 750 руб.</div> -->
                                <div class="catalog-item__price">1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    
                </div>
              
        </div>
    </section>
    <?php endif; ?>

<!-- Каталог дополнительные услуг -->

<?php if($this->countModules('catalog')):?>
    <section class="catalog">
        <div class="container container_catalog">
            <h2 class="title">Дополнительные услуги</h2>
            <ul class="catalog__tabs catalog__tabs__mob">
                <li class="catalog__tab catalog__tab__mob catalog__tab_services  catalog__tab_active"><div>Массажные программы</div></li>
                <li class="catalog__tab catalog__tab__mob catalog__tab_services"><div>Подарочные сертификаты</div></li>
                <li class="catalog__tab catalog__tab__mob catalog__tab_services"><div>Выезд массажиста на дом</div></li>
            </ul>
                <div class="catalog__content catalog__content_active">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/program/perfect_body_200x200_s.jpg" alt="Идеальное тело - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Идеальное тело</div>
                                <div class="catalog-item__descr">Решает проблему возрастных изменений на лице. Альтернатива хирургических вмешательств и постановка инъекций красоты.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">15 000 руб.</div>
                                <div class="catalog-item__price">13 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/program/vip_anti-cellulite_massage_001_200x200_s.jpg" alt="Атицеллюлитный массаж VIP - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Атицеллюлитный массаж VIP</div>
                                <div class="catalog-item__descr">Эффективный спрособ умеьшить лиший объем, придать тонус мышцам, подтянуть кожу.</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">14 000 руб.</div>
                                <div class="catalog-item__price">12 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/program/stop_stress_massage_200x200_s.jpg" alt="Стоп стресс - массаж - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Стоп стресс - массаж</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">15 000 руб.</div>
                                <div class="catalog-item__price">13 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/program/massage_office_worker_200x200_s.jpg" alt="Массаж для офсного работника - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж для офсного работника</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price">12 000 руб.</div>
                                <div class="catalog-item__price">10 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/program/massage_athletes_200x200_s.jpg" alt="Массаж для спортсменов - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Массаж для спортсменов</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <img src="templates/<?php echo $this->template ?>/images/services/gift_certificate/gift_certificate_200x200_s.jpg" alt="Подарочный сертифкат - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Подарочный сертифкат</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price"></div>
                                <div class="catalog-item__price">От 1 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>

                <div class="catalog__content">
                    <div class="catalog-item">
                        <div class="catalog-item__wrapper">
                            <div class="catalog-item__content  catalog-item__content_active">
                                <img src="templates/<?php echo $this->template ?>/images/services/departure_masseur_home/massage22_001_departure_masseur_home_200x200_s.jpg" alt="Выезд массажиста на дом - каталог" class="catalog-item__img">
                                <div class="catalog-item__subtitle">Выезд массажиста на дом</div>
                                <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                <a href="../" class="catalog-item__link__links">ПОДРОБНЕЕ</a>
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
                                <div class="catalog-item__olde_price"></div>
                                <div class="catalog-item__price">От 2 000 руб.</div>
                            </div>
                            <button class="button button_mini">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <?php endif; ?>    


<!-- Начало: Новая верся Section advantages -->
<?php if($this->countModules('price_policy')):?>            
    <section class="advantages">
        <div class="container">
            <h2 class="title advantages__title">Ценовая политика</h2>
            <div class="advantages__wrapper">
                <div class="advantages__item advantages__item__price_policy">
                    <img src="templates/<?php echo $this->template ?>/icons/advantages/heart.png" alt="cup" class="advantages__icon">
                    <div class="advantages__subtitle">
                        Массаж 30 минут
                    </div>
                    <div class="advantages__subtitle__price">
                        800 руб.
                    </div>
                    <div class="advantages__descr">
                        <div class="advantages__descr__top">
                            Ознакомительный массаж. 
                            <br>
                            Сокращенный вариант массажа.
                        </div>
                        <div class="advantages__descr__list_border">
                            <div class="advantages__descr__list_background_white">
                                Первичная консультация
                            </div>
                            <div class="advantages__descr__list_background">
                                Знакомство с массажистом
                            </div>
                            <div class="advantages__descr__list_background_white">
                                Сокращенный объем массажа
                            </div>
                            <div class="advantages__descr__list_background">
                                Оценить технику массажа
                            </div>
                            <div class="advantages__descr__list_background_white">
                                Оценка эффективности массажа
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="advantages__item advantages__item__price_policy">
                    <img src="templates/<?php echo $this->template ?>/icons/advantages/heart.png" alt="heart" class="advantages__icon">
                    <div class="advantages__subtitle">
                        Массаж 60 минут
                    </div>
                    <div class="advantages__subtitle__price">
                        1000 руб.
                    </div>
                    <div class="advantages__descr">
                        <div class="advantages__descr__top">
                            Стандартный массаж. 
                            <br>
                            Выполняются все необходимые приемы в полном объеме. За это время     решаем основные, поставленные задачи. 
                        </div>
                        <div class="advantages__descr__list_border">    
                            <div class="advantages__descr__list_background_white">
                                Подробная консультация
                            </div>
                            <div class="advantages__descr__list_background">
                                Полный объем массажа
                            </div>
                            <div class="advantages__descr__list_background_white">
                                Гарантированный результат
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantages__item advantages__item__price_policy">
                    <img src="templates/<?php echo $this->template ?>/icons/advantages/heart.png" alt="shoe" class="advantages__icon">
                    <div class="advantages__subtitle">
                        Массаж 90 минут
                    </div>
                    <div class="advantages__subtitle__price">
                        1500 руб.
                    </div>
                    
                    <div class="advantages__descr">
                        <div class="advantages__descr__top">
                            Максимальный массаж. 
                            <br>
                            Направленный на достижение максимально полного результата, прорабатываются дополнительные рабочие зона.
                        </div>
                        <div class="advantages__descr__list_border">    
                            <div class="advantages__descr__list_background_white">
                                Детальная консультация
                            </div>
                            <div class="advantages__descr__list_background">
                                Полный объем массажа <br>
                                +Дополнительная проработка
                            </div>
                            <div class="advantages__descr__list_background_white">
                                Увеличенная эффективность
                            </div>
                            <div class="advantages__descr__list_background">
                                Оценить технику массажа
                            </div>
                            <div class="advantages__descr__list_background_white">
                                Гарантированный результат
                            </div>
                        </div>
                    </div>
                </div>

                <div class="advantages__item advantages__item__price_policy">
                    <img src="templates/<?php echo $this->template ?>/icons/advantages/cup.png" alt="shoe" class="advantages__icon">
                    <div class="advantages__subtitle">
                    Курс массажа
                    </div>
                    <div class="advantages__subtitle__price">
                    -10%
                    </div>
                    <div class="advantages__descr">
                        <div class="advantages__descr__top">
                            При покупки сразу целого курса массажа, делается скидка.
                        </div>   
                        <div class="advantages__descr__list_border">    
                            <div class=" advantages__descr__list_background_white">
                                Экономия 10%
                            </div>
                            <div class="advantages__descr__list_background">
                                Полный объем массажа
                            </div>
                            <div class="advantages__descr__list_background_white">
                                Гарантированный результат
                            </div>
                            <div class="advantages__descr__list_background">
                                Возврат остатка средств
                            </div>
                            <div class="advantages__descr__list_background_white">
                                Мотивация для себя   
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
            </div>                                    

        </div>
    </section>
    <?php endif; ?>

    <!-- Конец: Новая верся Section advantages -->


    <?php if($this->countModules('reviews')):?>
    <section class="reviews">
        <div class="container">

        <h2 class="title">отзывы клиентов</h2>

        <jdoc:include type="modules" name="reviews" style="none" />

           
        </div>
    </section>
    <?php endif; ?>

    <footer class="footer">
        <iframe class="yandex-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.474981139927!2d83.78428131564897!3d53.33475318328089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dda5d25e61026d%3A0xacf26f29f0455edb!2z0KHRgtGD0LTQuNGPINC80LDRgdGB0LDQttCwINCQ0LvQtdC60YHQsNC90LTRgNCwINCh0L7QutC-0LvQvtCy0LA!5e0!3m2!1sru!2sru!4v1589809287399!5m2!1sru!2sru" width="100%" height="630" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
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

   
    <a href="#up" class="pageup">
        <img src="templates/<?php echo $this->template ?>/icons/up.svg" alt="up">
    </a>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/js/wow.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/js/slick.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/js/jquery.validate.min.js"></script>
    <script src="templates/<?php echo $this->template ?>/js/jquery.maskedinput.min.js"></script>

 
<!-- Если, что можо удалить -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script> -->
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    


    <!-- <script src="templates/<?php echo $this->template ?>/js/script.js"></script> -->
    <script src="templates/<?php echo $this->template ?>/js/script_test.js"></script>
	
</body>
</html>
