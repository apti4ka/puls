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

<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link href="templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700$subset=latin,cyrillic' rel='stylesheet' type='text/css' />	
	
</head>

<body id="page">
    <header id="header-background"> <!-- Шапка  -->
        <div class="layout" >
				 <!-- Фон для шапки -->
					
 		 <div id="logo">
            <a href="/"><img src="templates/<?php echo $this->template ?>/images/logo.png" alt="Профессиональный массаж в Барнаул"></a>
            <span>Профессиональный массаж в Барнауле</span>
          </div>

          <div id="geo">
            <img src="templates/<?php echo $this->template ?>/images/geoicon.png" alt="">
            <span>г. Барнаул<br>
            ул. Никитина 92
            <a href="#ModalOpen">Посмотреть на карте</a>
            </span>
          </div>

          <div id="phone">
            <a class="tel" href="tel: +79132503879">8 <span>(913)</span>250 38 79</a>
            <span class="time">с 8:00 до 22:00 Ежедневно</span>
          </div>
			
        </div>
    </header>

	<nav id="menu2" class="top-menu" onclick="this.className = (this.className == 'topmenu' ? 'mobilemenu' : 'topmenu')"> <!-- меню  -->
		<div class="layout">
			<jdoc:include type="modules" name="menu" style="none" />
		</div>
	</nav>

	<!-- Начало. Меню  второй вариант
	<nav id="menu2" class="top-menu" onclick="this.className = (this.className == 'topmenu' ? 'mobilemenu' : 'topmenu')"> 
		<div class="layout">
			<jdoc:include type="modules" name="menu" style="none" />
		</div>
	</nav>
	
	Конец. Меню  второй вариант -->
	
	<div id="content">
		<div class="layout">
			<div id="text">	
				
				<?php if($this->countModules('breadcrumbs')):?> 	<!-- условие, когда код который будет выведен, если модуль breadcrumbs показываетсяa  -->
				<div id="breadcrumbs">
					<jdoc:include type="modules" name="breadcrumbs" style="none" /> <!-- вывод хлебных крошек  -->
				</div>
				<?php endif; ?>
				
				 
				<jdoc:include type="message" /> <!--вывод системных сообщений -->
				<jdoc:include type="component" /> <!--вывод компонента -->
				
				<?php if($this->countModules('aftertext')):?> 	<!-- условие, когда код который будет выведен, если модуль aftertext показываетсяa  -->
				<div class="aftertext">
				<jdoc:include type="modules" name="aftertext" style="xhtml" />
				</div>	
				<?php endif; ?>
			</div> 
			
			<aside id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />
				
				<div id="fixed">
					<?php if($this->countModules('aftertext')):?> 	<!-- условие, когда код который будет выведен, если модуль affix показываетсяa  -->
					<jdoc:include type="modules" name="affix" style="xhtml" />
					<?php endif; ?>
				</div>
					
			</aside> <!-- sidebar-a  -->
			
		</div> 
	</div> 	


	<footer>
		<div class="layout">
			<div class="box3">
			<jdoc:include type="modules" name="footer" style="xhtml" />
			</div> <!-- будет три блока в одну линию  -->
			
			<div class="box3">
			<p>По вопросам сотрудничества пишите на:<br><a href="mailto:turocol@mail.ru?subject=Вопросы с сайта massage22.ru">turocol@mail.ru</a></p></div>
			
			<div class="box3">
			
				
			<a href="/" ><img class="logo_footer" src="templates/<?php echo $this->template ?>/images/logo_footer.png" alt="Профессиональный массаж в Барнаул">
			</a>
			
		
		<div>
            <a class="tel" href="tel: +79132503879"><span>8 (913)250 38 79</span></a>
		</div>
       		<div class="socbutt">
				<a href="/" target="_blank" title="Социальные сети VK"><img src="templates/<?php echo $this->template ?>/images/vk.png" alt="Социальные сети VK"></a>
				<a href="/" target="_blank" title="Социальные сети Google+"><img src="templates/<?php echo $this->template ?>/images/google.png" alt="Социальные сети Google+"></a>
				<a href="/" target="_blank" title="Социальные сети fb"><img src="templates/<?php echo $this->template ?>/images/fb.png" alt="Социальные сети fb"></a>
			</div>	
          </div>

			
		</div>
	</footer>
	
	<div class="debug">
		<p>2008 - <?php echo date("Y") ?> @Профессиональный массаж в Барнауле. <br>
		Cтудия находится в центре города, между остановками:<br> 
		Дом Союзов и Анатолия.</p>
	</div>
	<div id="toTop" > ^ Наверх</div>

		<!-- Модальное окно -->

        <div id="ModalOpen" class="Window">
			<div>
			<a href="#close" title="Закрыть" class="close">X</a>
				
				<iframe src="https://yandex.ru/map-widget/v1/-/CBBXf6rG-B" allowfullscreen="true" width="100%" height="100%" frameborder="0" align="left"></iframe>
				
			</div>
        </div>
	
	<!-- Кнопка на верх -->
	<script type="text/javascript">
		jQuery(function() {
		jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() != 0) {
		jQuery('#toTop').fadeIn();
		} else {
		jQuery('#toTop').fadeOut();
		}
		});
		jQuery('#toTop').click(function() {
		jQuery('body,html').animate({scrollTop:0},800);
		});
		});
	</script>
	
	<!-- блок #fixed плавающий -->
	<script type="text/javascript">
            jQuery(function() {
                var offset = jQuery("#fixed").offset();
                var topPadding = 40;
                jQuery(window).scroll(function() {
                    if (jQuery(window).scrollTop() > offset.top) {
                        jQuery("#fixed").stop().animate({marginTop: jQuery(window).scrollTop() - offset.top + topPadding});
                    }
                    else {jQuery("#fixed").stop().animate({marginTop: 0});};});
            });
		</script>
	
	
</body>
</html>
