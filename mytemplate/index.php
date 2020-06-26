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
	
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/bootstrap-reboot.min.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/bootstrap-grid.min.css" type="text/css" />	
<!-- <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" /> -->
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
<link href="templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />	
	
</head>

<body id="page">
	
	    <header>
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
			
        <div class="subheader">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4 offset-md-1">
                    <a href="/" class="subheader_logo"><img class="subheader_img" src="templates/<?php echo $this->template ?>/images/logo/sokolov_logo-300.png" alt="logo"></a>
                        <div class="subheader_official">Профессиональный массаж в Барнауле</div>
                    </div>
    
                    <div class="xs-hidden col-md-3 offset-md-1 col-xl-2 offset-xl-2">
                        <div class="subheader_call">Звоните нам ежедневно</div>
                        <a href="tel:+79132503879" class="subheader_phone">8 913 250 38 79</a>
                    </div>
    
                    <div class="col-6 col-md-3 col-lg-2">
                        <a href="tel:+79132503879" class="xs-visible subheader_phone">8 913 250 38 79</a>
                        <button class="subheader_btn">заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </header>		
    
    <section class="promo">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <h1 class="promo_header">КОМПАНИЯ UBER PARTNERS!</h1>
          <h2 class="promo_subheader">ПРИГЛАШАЕМ ВОДИТЕЛЕЙ! НА СВОЕМ АВТО!</h2>
          <div class="promo_descr">
            Компания UBER  динамически развивающаяся. Компания на рынке занимает лидирующее место среди
            таксомоторных компаний, Компания абсолютно прозрачная вы можете контролировать все процессы у себя в личном кабинете. Бонуcная система.Помимо выполненной работы по заказам, компания начисляет бонусы за
            пиковое время.
            <br>
            <br>
            Мы одни из партнеров и зарекомендовали себя как одна из лучших команд в городе Москве.  Водители у нас
            зарабатывают от 80000- 120000 в месяц.
          </div>
          <button class="promo_btn">ОТПРАВИТЬ ЗАЯВКУ!</button>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.474981139927!2d83.78428131564897!3d53.33475318328089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dda5d25e61026d%3A0xacf26f29f0455edb!2z0KHRgtGD0LTQuNGPINC80LDRgdGB0LDQttCwINCQ0LvQtdC60YHQsNC90LTRgNCwINCh0L7QutC-0LvQvtCy0LA!5e0!3m2!1sru!2sru!4v1589809287399!5m2!1sru!2sru" width="100%" height="630" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
        <div class="footer__info">
            <div class="footer__name">Профессиональный массаж</div>
            <address class="footer__addr">Барнаул, Ул. Ниикитина 92</address>
            <a class="footer__phone" href="tel:79132503879">8-913-250-38-79</a>
            <div class="footer__social">
                <a href="#" class="footer__social-item"><img src="icons/facebook.svg" alt="facebook"></a>
                <a href="#" class="footer__social-item"><img src="icons/instagram.svg" alt="instagram"></a>
                <a href="#" class="footer__social-item"><img src="icons/pinterest.svg" alt="pinterest"></a>
            </div>
        </div>
    </footer>
  
	
</body>
</html>
