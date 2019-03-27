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
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url();?>themes/my/assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url();?>themes/my/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url();?>themes/my/assets/images/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="<?php echo site_url();?>themes/my/assets/images/safari-pinned-tab.svg" color="#5bbad5">
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
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#home-slider" data-slide-to="0" class="active"></li>
			<li data-target="#home-slider" data-slide-to="1"></li>
			<li data-target="#home-slider" data-slide-to="2"></li>
			<li data-target="#home-slider" data-slide-to="3"></li>
			<li data-target="#home-slider" data-slide-to="4"></li>
			<li data-target="#home-slider" data-slide-to="5"></li>
			<li data-target="#home-slider" data-slide-to="6"></li>
			<li data-target="#home-slider" data-slide-to="7"></li>
		</ol>
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
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services" data-animation-wipe="btn btn-start animated fadeOut">а как это работает?</a>
          </div>
        </div>
        <div class="item slide3">
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/green.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceIn" data-animation-wipe="animated bounceOut">Системы безопасности</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services" data-animation-wipe="btn btn-start animated fadeOut">а как это работает?</a>
          </div>
        </div>
        <div class="item slide4" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/red.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceInDown" data-animation-wipe="animated bounceOutDown">Системы противопожарной защиты</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#portfolio" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide5" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/white.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceInDown" data-animation-wipe="animated bounceOutDown">Телекоммуникации</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#portfolio" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide6" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/biruz.gif">
		  </div>
          <div class="caption">
            <h2 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Автоматика и диспетчеризация</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#portfolio" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide7" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/blue.gif">
		  </div>
          <div class="caption">
            <h2 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Системы отопления и водоснабжения</span></h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#portfolio" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
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
					<li><a href="/category/news">Новости</a></li>
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
			<div class="row">
				<?php $lists = recent_posts(true, 3);?>
				<?php foreach ($lists as $l):?>
					<div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
						<div class="post-thumb">
							<a href="<?php echo $l->url;?>"><img class="img-responsive" src="<?php echo get_image($l);?>" alt="<?php echo shorten($l->title,80);?>"></a> 
							<div class="post-meta">
								<span><i class="fas fa-eye"></i> Просмотров <?php echo $l->views;?> </span>
								<span><i class="fas fa-comments-o"></i> Комментариев 0 </span> 
							</div>
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
							<span class="date"><?php echo date('d M Y', $l->date);?></span>
							<span class="cetagory">в <strong><?php echo $l->category;?></strong></span>
						</div>
						<div class="entry-content">
							<p><?php echo shorten($l->body, 200); ?>...</p>
						</div>
					</div>
				<?php endforeach;?>
			</div>
			<div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<a href="/blog" class="btn-loadmore"> Все новости</a>
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
						<p class="lead six-sec-ease-in-out"><i class="fas fa-bolt fa-lg"></i> Электроснабжение.</p>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
						<p class="lead six-sec-ease-in-out"><i class="fas fa-video fa-lg"></i> Системы безопасности.</p>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
						<p class="lead six-sec-ease-in-out"><i class="fas fa-fire-alt fa-lg"></i> Системы противопожарной защиты.</p>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
						<p class="lead six-sec-ease-in-out"><i class="fas fa-network-wired fa-lg"></i> Телекоммуникационные системы.</p>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
						<p class="lead six-sec-ease-in-out"><i class="fas fa-magic fa-lg"></i> Автоматика и диспетчеризация</p>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
						<p class="lead six-sec-ease-in-out"><i class="fas fa-temperature-high fa-lg"></i> Системы отопления и водоснабжения.</p>
					</div>
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
						<p class="lead six-sec-ease-in-out"><i class="fas fa-plug fa-lg"></i> Производство электрощитового оборудования.</p>
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
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
		  <i class="fas fa-birthday-cake"></i>
          <h3 class="timer">15</h3>
          <p>15 лет успешной работы</p>
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
		<?php $lists = recent_posts(true, 6);?>
		<?php foreach ($lists as $l):?>
        <div class="row">
          <div class="col-sm-4">
            <div class="projects-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
				<a href="<?php echo $l->url;?>"><img class="img-responsive" src="<?php echo get_image($l);?>" alt="<?php echo shorten($l->title,80);?>"></a> 
              </div>
              <div class="member-info">
				<h3><a href="<?php echo $l->url;?>"><?php echo shorten($l->title,120);?></a></h3>
				<span class="date"><?php echo date('d M Y', $l->date);?></span>
				<p><?php echo shorten($l->body, 300); ?>...</p>
              </div>
            </div>
          </div>
        </div>
		<?php endforeach;?>
		<div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
			<a href="/news" class="btn-loadmore">Все проекты</a>
		</div>                
      </div>            
    </div>
  </section><!--/#projects-->
  
 
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div  class="col-sm-7">
            <h2 class="text-center">Что вы получаете</h2>
			<ul class="services-what">
            <li>Подушка поставляется в коробке размером 82x46x15см, вес 5,8кг.</li>
            <li>goodnite подушка с моющейся наволочкой</li>
			<li>Электронный блок управления</li>
			<li>Инструкция пользователя, гарантийная карта</li>
			<li>Источник питания с переходным кабелем</li>
			</ul>
          </div>
          <div  class="col-sm-5">
			<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/nitetronic2.jpg" alt="Комплектация подушки против храпа">
          </div>
        </div> 
      </div>
	  
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" >
        <div class="row">
          <div class="text-center col-sm-6" style="background-color: #eee; margin-bottom: 50px;">
            <h2>Как работает подушка goodnite.</h2>
			<div class="services-what text-justify"> 
			<p>Goodnite продолжительно отслеживает дыхание пользователя. При выявлении признаков храпа устройство мягко автоматически поворачивает голову пользователя на сторону. 
			Поворот головы в сторону увеличивает расстояние между языком и горлом, что останавливает вибрацию мягких тканей в верхних дыхательных путях и понижают громкость храпа, также одновременно улучшает дыхание. 
			Воздушная камера внутри подушки остается наполненной в течение некоторого периода, поддерживая голову в определенном положении для того, чтобы предотвратить повторение храпа.</p>
			<p>Goodnite фокусируется на храпе человека, голова которого лежит на подушке. Это препятствует непреднамеренным действиям в отношении храпа супруга/и. 
			Пожалуйста, придерживайтесь расстояния 10 см между goodnite и подушкой вашего партнера.</p>
			<p>Эффективность goodnite и «Качество сна» может быть определено при использовании приложения на Nitelink2 на смартфонах Android или iOs.</p>
           </div>
          </div> 
          <div class="text-center col-sm-6">
			<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/Optimized-Nitetronic_Tech_Drawing_with_Rus_Labels_654.jpg" alt="Сон без храпа с умной подушкой">
          </div> 
        </div>
      </div>
    </div>
  </section><!--/#services-->
	  
  <section id="advantage" class="parallax">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Преимущества смарт-подушки goodnite </h2>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row equal" style="margin-top:20px; margin-bottom:0px;">
          <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fas fa-bell-slash"></i>
            </div>
            <div class="service-info">
              <h3>Невмешательство в сон</h3>
              <p>Одной из важнейших особенностей и главным преимуществом подушки goodnite является то, что она не мешает вам спать! 
			  Она не будет пробуждать вас ударами тока, звуками или вибрациями, заставляя сменить позу. Подушка goodnite заботится о качестве вашего сна, тихо и незаметно делая свою работу. 
			  Ваш ночной сон и отдых – это самое главное!.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fas fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>Неинвазивность</h3>
              <p>Несомненный плюс goodnite – это то, что устройство снижает и предотвращает храп щадящим для человека способом. 
				goodnite не оказывает воздействия на кожу, решая проблему храпа без помощи медицинских инструментов и операций.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="service-info">
              <h3>Высокие результаты</h3>
              <p>Клинические исследования, проведенные во время испытаний подушки, показали, что при использовании goodnite общий уровень храпа снижается минимум на 67%. 
			  Средние показатели снижения храпа по времени и громкости обычно варьируются от 80 до 90%. Такие показатели являются очень высоким результатом.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fas fa-procedures"></i>
            </div>
            <div class="service-info">
              <h3>Клинически доказанный эффект</h3>
              <p>goodnite прошла испытания в ряде университетов и клиник Европы. Ознакомиться с результатами испытаний вы можете на этой странице.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
			  <i class="fas fa-bed"></i>
            </div>
            <div class="service-info">
              <h3>Комфорт во время сна</h3>
              <p>goodnite – самое комфортное средство против храпа из всех, которые есть сегодня на рынке. Ничего лишнего и непривычного для вашего сна и отдыха! 
			  Вы просто используете goodnite как свою обычную подушку. </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fas fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3>Отсутствие побочных эффектов</h3>
              <p>goodnite не оказывает на организм каких-либо вредных воздействий, а противопоказания к её использованию отсутствуют или минимальны.</p>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:20px; margin-bottom:0px;">
	        <div class="text-center col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			  <a class="btn btn-primary btn-round-lg btn-lg" style="white-space:normal !important; word-wrap: break-word; word-break: normal;" href="#" data-toggle="modal" data-target="#exampleModalCenter">
				<i class="fas fa-shopping-cart fa-lg"></i> Купить смарт-подушку nitetronic goodnite за  <?php echo config('site.pillow.price');?> руб. для хорошего сна</a>
			</div>
		</div>
      </div>
   </div>
</section> <!-- advantage -->

 
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Наши последние проекты</h2>
          </div>
      </div> 
    </div>
    <div class="container-fluid">
       <div class="row">   <!-- row 1-->
		 <?php $lists = recent_posts(true, 3);?>
		 <?php foreach ($lists as $l):?>
	   
		 <div class="col-sm-3 col-xs-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
		
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
					<img class="img-responsive" src="<?php echo get_image($l);?>" alt="<?php echo shorten($l->title,80);?>"></a> 
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
					<div class="entry-header">
						<h3><a href="<?php echo $l->url;?>"><?php echo shorten($l->title,120);?></a></h3>
						<span class="date"><?php echo date('d M Y', $l->date);?></span>
					</div>
					<div class="entry-content">
						<p><?php echo shorten($l->body, 200); ?>...</p>
					</div>

                  </div>
                  <div class="folio-overview">
					<span class="folio-link"><a class="folio-read-more" href="<?php echo $l->url;?>"><i class="fas fa-link"></i></a></span> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php endforeach;?>
		
		</div>  <!-- row 1-->

	  
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
	
  </section><!--/#portfolio-->

  <section id="purchase">
  
    <div class="container">
	
		<div itemscope itemtype="http://schema.org/Product" class="row">
	      <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
			<span class="pull-right"><img class="img-responsive" itemprop="image" src="<?php echo site_url();?>themes/my/assets/images/main-purchase.jpg" alt="купить подушку от храпа goodnite"></span>
           </div>
 	      <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
			<h2 itemprop="name">Обновленная смарт-подушка от храпа goodnite™ по специальной цене</h2>
			<meta itemprop="brand" content="Nitetronic goodnite">
			<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<h2><span style="text-decoration:line-through;"><?php echo config('site.pillow.oldprice');?> руб.</span>  <span><?php echo config('site.pillow.price');?> руб.</span></h2>
				<meta itemprop="price" content="<?php echo config('site.pillow.price');?>">
				<meta itemprop="priceCurrency" content="RUB">
				<meta itemprop="availability" content="PreOrder" />
			</div>	
			<div align="center">
			<a class="btn btn-primary btn-round-lg btn-lg" style="white-space:normal !important; word-wrap: break-word; word-break: normal;" href="#" data-toggle="modal" data-target="#exampleModalCenter">
				<i class="fas fa-shopping-cart fa-lg"></i> Заказать goodnite</a>
			</div>
			
			<ul itemprop="description">
			<li>Более удобная для сна</li>
			<li>Улучшенный алгоритм для точного определения храпа</li>
			<li>Расширенный анализ в приложении Nitelink2 для смартфона</li>
			<li>Точное определение храпа при различных положениях головы</li>
			<li>Неинвазивная, Без рецепта, Без сторонних эффектов</li>
			<li>Подключается к смартфону</li>
			</ul>
          </div>
		</div>
    </div>



	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form id="purchase-form" name="purchase-form" method="post" action="/orderbymail.php">
				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLongTitle">Заказать смарт-подушку goodnite</h3>
					<button type="button" class="close" id="purchase_close" data-dismiss="modal" aria-label="Закрыть">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Имя" required="required"  />
						<input type="email" name="email" class="form-control" placeholder="Email Адрес" required="required" />
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="Телефон" pattern="(\+?\d[- .]*){7,13}" title="Международный, федеральный или местный телефонный номер" 
						required="required" />
						<span class="validity"></span>
						<textarea name="message" id="message" class="form-control" rows="4" placeholder="Комментарий к заказу"></textarea>
					</div>                        
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="submit" class="btn btn-submit">Отправить заказ</button>
					<h4>Или позвоните по телефону <?php echo config('site.phone');?> для заказа.</h4>
					<div class="form_purchase_status"></div>
				</div>
				</form> 
			</div>
		</div>
	</div>
  
  </section><!--/#purchase-->
  
  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fas fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fas fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="twitter-icon text-center">
              <i class="fab fa-twitter"></i>
              <h4>Наш канал в Twitter <a href="https://twitter.com/goodniteru">@goodniteru</a></h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Сравнение устройств от храпа. Что такое храп? Это низкие и вибрирующие звуки, которые издают некоторые люди во время сна из-за расслабления мягкого нёба и язычка... <a href="https://twitter.com/goodniteru/status/1069904474490179584"><span>#MYGOODNITE #храп #стопхрап #goodnite</span></a></p>
                </div>
                <div class="item">
                  <p>#Храп и #семейные отношения. Рассмотрим одну из частых ситуаций, в которой один из супругов страдает храпом... <a href="https://twitter.com/goodniteru/status/1068573320206065664"><span>#MYGOODNITE #храп #семейныеотношения</span></a></p>
                </div>
                <div class="item">                                
                  <p>Презентация MYGOODNITE обновленной smart-системы nitronic goodnite и мобильного приложения Nitelink2 <a href="https://twitter.com/goodniteru/status/1069541145422766080"><span>#ПодушкаОтХрапа #храп #Nitelink #goodnite</span></a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Блог компании</h2>
          <p>Документы, статьи, обсуждения, новинки и разработки из области сомнологии</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
		<?php $lists = recent_posts(true, 3);?>
		<?php foreach ($lists as $l):?>
			<div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
				<div class="post-thumb">
					<a href="<?php echo $l->url;?>"><img class="img-responsive" src="<?php echo get_image($l);?>" alt="<?php echo shorten($l->title,80);?>"></a> 
					<div class="post-meta">
						<span><i class="fas fa-eye"></i> Просмотров <?php echo $l->views;?> </span>
						<span><i class="fas fa-comments-o"></i> Комментариев 0 </span> 
					</div>
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
					<span class="date"><?php echo date('d M Y', $l->date);?></span>
					<span class="cetagory">в <strong><?php echo $l->category;?></strong></span>
				</div>
				<div class="entry-content">
					<p><?php echo shorten($l->body, 200); ?>...</p>
				</div>
			</div>
		<?php endforeach;?>
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="/blog" class="btn-loadmore"><i class="fas fa-repeat"></i> Перейти в блог</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->
		
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
                  <li><i class="fas fa-map-marker"></i> <span> Адрес:</span> 196084, Санкт-Петербург, Измайловский пр., д. 2</li>
                  <li><i class="fas fa-phone"></i> <span> Телефон:</span> <?php echo config('site.phone');?> </li>
                  <li><i class="fas fa-envelope"></i> <span> Email:</span><a href="mailto:<?php echo config('site.email');?>">  <?php echo config('site.email');?></a></li>
                  <li><i class="fas fa-globe"></i> <span> Website:</span> <a href="http://scs.spb.ru"> scs.spb.ru</a></li>
                </ul>
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
                <li><a href="#">Проекты</a></li> 
                <li><a href="#">Новости</a></li> 
                <li><a href="#">Блог</a></li> 
                </ul>
              </div>
		  </div>
          <div class="col-sm-6 col-lg-3 wow fadeInRight animated">
              <div class="single-footer">
				<ul class="footer-menu">
                <li><a href="#">Контакты</a></li> 
                <li><a href="#">Отзывы</a></li> 
                <li><a href="#">Лицензии</a></li> 
                <li><a href="#">Вакансии</a></li> 
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