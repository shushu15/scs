<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title;?></title>
  <meta name="description" content="<?php echo $description; ?>"/>
  <link rel="canonical" href="<?php echo $canonical; ?>" />
  <meta name="author" content="СКС">
  <link href="<?php echo site_url();?>themes/my/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/animate.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="<?php echo site_url();?>themes/my/assets/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/blog.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo site_url();?>themes/my/assets/css/presets/preset7.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/responsive.css" rel="stylesheet">

  <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  
  <link rel="shortcut icon" href="<?php echo site_url();?>themes/my/assets/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url();?>themes/my/assets/images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url();?>themes/my/assets/images/apple-icon-72x72.png">
  <link rel="icon" type="image/png" sizes="144x144"  href="<?php echo site_url();?>themes/my/assets/images/android-icon-144x144.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url();?>themes/my/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url();?>themes/my/assets/images/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileImage" content="<?php echo site_url();?>themes/my/assets/images/ms-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">  

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
</head><!--/head-->

<?php     
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $url = site_url() . 'search/' . remove_accent($search);
        header("Location: $url");
    }
?>

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
 </div>
  <!--/.preloader-->
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>

  <header id="home">
		<div class="header_top"><!--header_top-->
			<div class="container">
			</div>
		</div><!--/header_top-->      

    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
      <div class="carousel-inner">
		<!-- Indicators 
		<ol class="carousel-indicators">
			<li data-target="#home-slider" data-slide-to="0" class="active"></li>
			<li data-target="#home-slider" data-slide-to="1"></li>
			<li data-target="#home-slider" data-slide-to="2"></li>
			<li data-target="#home-slider" data-slide-to="3"></li>
			<li data-target="#home-slider" data-slide-to="4"></li>
			<li data-target="#home-slider" data-slide-to="5"></li>
			<li data-target="#home-slider" data-slide-to="6"></li>
			<li data-target="#home-slider" data-slide-to="7"></li>
		</ol> -->
        <div class="item active slide1" >
          <div class="picture">
		  </div>
          <div class="caption">
            <h1 class="animated bounceIn" data-animation-wipe="animated bounceOut">Инженерные системы</h1>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us" data-animation-wipe="btn btn-start animated fadeOut">посмотреть</a>
          </div>
        </div>
        <div class="item slide2">
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/yellow.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceIn" data-animation-wipe="animated bounceOut">Электроснабжение</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="/electro" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide3">
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/green.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceIn" data-animation-wipe="animated bounceOut">Системы безопасности</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="/security" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide4" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/red.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceInDown" data-animation-wipe="animated bounceOutDown">Системы противопожарной защиты</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="/fireguard" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide5" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/white.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceInDown" data-animation-wipe="animated bounceOutDown">Телекоммуникации</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="/telecommunication" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide6" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/biruz.gif">
		  </div>
          <div class="caption">
            <h2 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Автоматика и диспетчеризация</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="/automatics" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide7" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/blue.gif">
		  </div>
          <div class="caption">
            <h2 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Системы отопления и водоснабжения</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="/water" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fas fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fas fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fas fa-angle-down"></i></a>

    </div><!--/#home-slider-->
	
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Меню сайта</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
			<div class="col-xs-x hidden-sm hidden-md hidden-lg">
				<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/logo_scs_44.gif" style="border-radius: 5px;" alt="logo">
			</div>
			<div class="hidden-xs col-sm-x col-md-x col-lg-x">
				<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/logo_scs_61.gif" style="border-radius: 5px;" alt="logo">
			</div>
          </a>                    
          <div class="navbar-text">
             <i class="fas fa-phone"></i> <?php echo config('site.phone');?> 
          </div>
		  
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home"><i class="fas fa-home fa-lg"></i></a></li>
            <li class="scroll"><a href="#about-us">О нас </a></li> 
            <li class="scroll"><a href="#projects">Проекты</a></li>
            <li class="scroll"><a href="#contact">Контакты</a></li> 
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v fa-lg"></i></a>
				<ul class="dropdown-menu">
					<li><a href="/category/novosti">Новости</a></li>
					<li><a href="/licenses">Лицензии</a></li>
					<li><a href="/review">Отзывы</a></li>
					<li><a href="/vacancy">Вакансии</a></li>
					<li><a href="/blog">Блог</a></li>
				</ul>
			</li>			
			
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header> <!--/#home-->

	<section id="news">
		<div class="container">
			<div class="row">
				<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
					<h2>Новости</h2>
				</div>
			</div>
			<div class="blog-posts">
			<div class="row equal">
				<?php $lists = featured_posts_category('novosti', true, 3);?>
				<?php foreach ($lists as $l):?>
					<div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
						<div class="post-thumb">
							<a href="<?php echo $l->url;?>"><img class="img-responsive" src="<?php echo get_image($l);?>" alt="<?php echo shorten($l->title,80);?>"></a> 
							<div class="post-icon">
							<?php if (!empty($l->video)) { ?>
								<i class="fas fa-video"></i>
							<?php } else { ?>	
								<i class="fas fa-pencil-alt"></i>
							<?php } ?>
							</div>
						</div>
						<div class="entry-header">
							<h3><a href="<?php echo $l->url;?>"><?php echo shorten($l->title,120);?></a></h3>
							<span class="date"><?php echo strftime('%d %b %Y', $l->date);?></span>
							<span class="category">в <strong><?php echo $l->category;?></strong></span>
						</div>
						<div class="entry-content">
							<p><?php echo shorten($l->body, 300); ?>...</p>
						</div>
					</div>
				<?php endforeach;?>
			</div>
			<div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<a href="/category/novosti" class="btn-loadmore"> Все новости</a>
			</div>                
			</div>
		</div>
	</section>
			<!--/#news-->
  
	<section id="about-us">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
				<div class="about-info heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h2>О компании</h2>
			
					<p><strong>СКС</strong> — одна из ведущих проектно-монтажных организаций, работающая в сфере инженерных систем в Санкт-Петербурге.
			
					</p><p>
					Компания специализируется на обеспечении производственных, общественных и жилых зданий полным комплексом инженерных систем: от слаботочных сетей до электроснабжения. 
					«СКС» выполняет весь цикл работ, начиная от обследования и проектирования до сдачи строительно-монтажных работ и осуществления гарантийного обслуживания. 
					Компания имеет возможность выбирать поставщиков оборудования и, тем самым, оптимизировать выбираемые технические решения. 
					На некоторых объектах организация выступает в роли генерального проектировщика и генерального подрядчика по всем инженерным системам здания. 
			
					</p><p>
					«СКС» ориентируется на средних и крупных Заказчиков. За более чем десятилетнюю историю компании, были реализованы проекты для автоконцерна Nissan, сети отелей Holiday Inn, Александрийского театра, 
					компании «Даринда» (гипермаркеты «О'Кей»), стройкорпорации «Элис» (ТК «Владимирский пассаж», жилые комплексы) и многих других. 

					</p><p>
					Компания «СКС» объединила команду высококвалифицированных специалистов, способных выполнить основную часть работ своими силами, без привлечения субподрядных организаций. 
					Главные ценности деятельности организации: профессионализм сотрудников и высокое качество предоставляемых услуг. 			
					</p>
		
				</div>
				</div>
				<div class="col-sm-5">
				<div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h2>Специализация</h2>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<a href="/electro"><h3 class="lead"> <i class="fas fa-bolt fa-lg"></i> Электроснабжение.</h3></a>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
						<a href="/security"><h3 class="lead"> <i class="fas fa-video fa-lg"> </i> Системы безопасности.</h3></a>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="/fireguard"><h3 class="lead"> <i class="fas fa-fire-alt fa-lg"> </i> Системы противопожарной защиты.</h3></a>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
						<a href="/telecommunication"><h3 class="lead"> <i class="fas fa-network-wired fa-lg"></i> Телекоммуникационные системы.</h3></a>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
						<a href="/automatics"><h3 class="lead"><i class="fas fa-magic fa-lg"></i> Автоматика и диспетчеризация</h3></a>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
						<a href="/water"><h3 class="lead"><i class="fas fa-temperature-high fa-lg"></i> Системы отопления и водоснабжения.</h3></a>
					</div>
				</div>
				</div>
			</div> <!-- row - about -->
		</div>
	</section>
		<!--/#about-us-->
  
  <section id="features" class="parallax">
    <div class="container">
		<div class="row">
			<div class="heading text-center wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="100ms">
				<h2>Почему мы</h2>
			</div>
		</div>
      <div class="row equal">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
		  <i class="fas fa-birthday-cake"></i>
          <h3 class="timer">20</h3>
          <p>20 лет успешной работы</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fas fa-hotel"></i>
          <h3 class="timer">100</h3>                    
          <p>Более 100 реализованных проектов</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
		  <i class="fas fa-edit"></i>
          <h3>Отзывы</h3>                    
          <p>Положительные результаты</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
		  <i class="fas fa-book"></i>
          <h3>Лицензии</h3>
          <p>Сертифицированные специалисты</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

  
  <section id="projects">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Некоторые наши проекты</h2>
        </div>
      </div>
      <div class="projects-members">
        <div class="row equal">
		<?php $lists = featured_posts_tag('featured', true, 3);?>
		<?php foreach ($lists as $l):?>
          <div class="col-xs-12 col-sm-4">
            <div class="projects-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
				<a href="<?php echo $l->url;?>"><img class="img-responsive" src="<?php echo get_image($l);?>" alt="<?php echo shorten($l->title,80);?>"></a> 
              </div>
              <div class="member-info">
				<h3><a href="<?php echo $l->url;?>"><?php echo shorten($l->title,120);?></a></h3>
				<!-- <span class="date"><?php echo date('d M Y', $l->date);?></span> -->
				<p><?php echo shorten($l->body, 300); ?>...</p>
              </div>
            </div>
          </div>
		<?php endforeach;?>
        </div>
		<div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
			<a href="/category/ppoekty" class="btn-loadmore">Все проекты</a>
		</div>                
      </div>            
    </div>
  </section><!--/#projects-->
  
 
		
  <section id="dynamic">

      <?php echo content();?>
  </section>

  
  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row"> 
          <div class="heading text-justify col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Связаться с нами</h2>
            <p><p>Мы ответственно относимся к вопросу конфиденциальности сведений, полученных в связи с Вашим обращением.
			Мы гарантируем, что любые данные, полученные от Вас, не будут разглашены или использованы в иных целях, кроме как для работы в ходе нашего совместного проекта. 
			<span><a href="/personal">Oб использовании персональных данных</a></span>
			</p>
          </div>
		  <div class="form_status"> </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="/sendemail.php">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Имя" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Адрес" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input id="subject1" type="text" name="subject" class="form-control" placeholder="Тема" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message1" class="form-control" rows="4" placeholder="Напишите сообщение" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn btn-submit">Отправить</button>
                </div>
                <div class="form-group">
                  <span>Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», 
				  на условиях и для целей, определенных в Согласии на обработку персональных данных</span>
                </div>
				
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>ООО «СКС»</p>
                <ul class="address">
                  <li><i class="fas fa-map-marker"></i> <span> Адрес:</span>  192029, Санкт-Петербург, ул. Ольминского, д.6</li>
                  <li><i class="fas fa-phone"></i> <span> Телефон:</span> <?php echo config('site.phone');?> </li>
                  <li><i class="fas fa-envelope"></i> <span> Email:</span><a href="mailto:<?php echo config('site.email');?>">  <?php echo config('site.email');?></a></li>
                  <li><i class="fas fa-globe"></i> <span> Website:</span> <a href="<?php echo config('site.url');?>"> <?php $str = config('site.url'); $str = preg_replace('#^https?://#', '', $str); echo $str;?></a></li>
                </ul>
              </div> 
			  <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<a href="/themes/my/assets/images/map-contact.jpg" data-lightbox="map-contact"><img class="img-responsive" src="/themes/my/assets/images/map-contact-ava.jpg" alt="Карта расположения офиса СКС Спб."></a> 
			  </div> 	
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  
  
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container">
        <div class="row equal"> 
          <div class="col-sm-6 col-lg-3">
              <div class="single-footer">
				<ul class="footer-menu">
                <li><i class="fas fa-phone"></i> <?php echo config('site.phone');?> </li> 
                <li><i class="fas fa-envelope"></i> <?php echo config('site.email');?> </li>
                </ul>
              </div>
		  </div>
          <div class="col-sm-6 col-lg-3 wow fadeInRight animated">
              <div class="single-footer">
				<ul class="footer-menu">
                <li><a href="/category/ppoekty">Проекты</a></li> 
                <li><a href="/category/novosti">Новости</a></li> 
                <li><a href="/blog">Блог</a></li> 
                </ul>
              </div>
		  </div>
          <div class="col-sm-6 col-lg-3 wow fadeInRight animated">
              <div class="single-footer">
				<ul class="footer-menu">
                <li><a href="/#contact">Контакты</a></li> 
                <li><a href="/review">Отзывы</a></li> 
                <li><a href="/licenses">Лицензии</a></li> 
                <li><a href="/vacancy">Вакансии</a></li> 
                </ul>
              </div>
		  </div>
          <div class="col-sm-6 col-lg-3">
              <div class="single-footer">
				<ul class="footer-menu">
				<li>				
					<div class="footer-logo">
						<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/logo_scs_44.gif" style="border-radius: 5px;" alt="logo">					
					</div>
				</li> 
                <li>&copy; 1998-2019 СКС.</li> 
                </ul>
              </div>
		  </div>
  	    </div>
	  </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/bootstrap.min.js"></script>
  <!-- script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script -->
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.bcSwipe.min.js"></script>   <!-- touch support for bs.carousel -->
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/main.js"></script>
  
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>

</body>
</html>