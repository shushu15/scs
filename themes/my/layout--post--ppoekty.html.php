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
            <a  class="btn btn-start animated fadeInUpBig" href="/#about-us" data-animation-wipe="btn btn-start animated fadeOut">посмотреть</a>
          </div>
        </div>
        <div class="item slide2">
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/yellow.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceIn" data-animation-wipe="animated bounceOut">Электроснабжение</span></h2>
            <a  class="btn btn-start animated fadeInUpBig" href="/electro" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide3">
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/green.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceIn" data-animation-wipe="animated bounceOut">Системы безопасности</span></h2>
            <a  class="btn btn-start animated fadeInUpBig" href="/security" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide4" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/red.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceInDown" data-animation-wipe="animated bounceOutDown">Системы противопожарной защиты</span></h2>
            <a  class="btn btn-start animated fadeInUpBig" href="/fireguard" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide5" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/white.gif">
		  </div>
          <div class="caption">
            <h2 class="animated bounceInDown" data-animation-wipe="animated bounceOutDown">Телекоммуникации</span></h2>
            <a  class="btn btn-start animated fadeInUpBig" href="/telecommunication" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide6" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/biruz.gif">
		  </div>
          <div class="caption">
            <h2 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Автоматика и диспетчеризация</span></h2>
            <a  class="btn btn-start animated fadeInUpBig" href="/automatics" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide7" >
          <div class="picture">
			<img src="<?php echo site_url();?>themes/my/assets/images/slider/blue.gif">
		  </div>
          <div class="caption">
            <h2 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Системы отопления и водоснабжения</span></h2>
            <a  class="btn btn-start animated fadeInUpBig" href="/water" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fas fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fas fa-angle-right"></i></a>

      <a data-scroll id="tohash" href="#"><i class="fas fa-angle-down"></i></a>

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
            <li><a href="/#home"><i class="fas fa-home fa-lg"></i></a></li>
            <li><a href="/#about-us">О нас </a></li> 
			<?php $cattag = config('category.tags');  ?> 
			<?php if (empty($cattag)) :?>
				<li><a href="/category/ppoekty">Проекты</a></li>
			<?php else: ?>	
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Проекты <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/category/ppoekty">Все проекты</a></li>
						<li><a href="/category/ppoekty/tag/promyshlennost"><?php echo i18n('Category_tag_promyshlennost');?></a></li>
						<li><a href="/category/ppoekty/tag/kommercheskie"><?php echo i18n('Category_tag_kommercheskie');?></a></li>
						<li><a href="/category/ppoekty/tag/goszakaz"><?php echo i18n('Category_tag_goszakaz');?></a></li>
						<li><a href="/category/ppoekty/tag/zhilstroj"><?php echo i18n('Category_tag_zhilstroj');?></a></li>
					</ul>
				</li>			
			<?php endif; ?>
            <li><a href="/#contact">Контакты</a></li> 
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v fa-lg"></i></a>
				<ul class="dropdown-menu">
					<li><a href="/category/novosti">Новости</a></li>
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
  
  
	
    <!-- Set your background image for this header on the line below. -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php if (isset($is_post)):?>
                        <div class="post-heading">
                            <h1><?php echo $p->title;?></h1>
                            <span class="meta"><?php echo i18n('Published_in');?> <?php echo $p->category;?> <?php echo i18n('Author');?> <a href="<?php echo $p->authorUrl;?>"><?php echo $p->author;?></a></span>
                        </div>
                    <?php endif;?>
                    <?php if (!empty($breadcrumb)): ?>
                        <div class="breadcrumb <?php if (isset($is_post)):?>left<?php endif;?>"><?php echo $breadcrumb ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	

	
    <?php echo content();?>
    <hr>
	
	
	
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
  <!-- script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/mousescroll.js"></script -->
  <!-- script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/smoothscroll.js"></script -->
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/main.js"></script>
  
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>

</body>
</html>
