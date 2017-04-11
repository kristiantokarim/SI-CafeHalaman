
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <title>Kataleya - Restaurant One Page HTML Template</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png"/>
  <!-- Including stylesheets-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/core.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css"/>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,latin-ext"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layerslider.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/prettyPhoto.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorpicker.css"/>
</head>
<body class="responsive">
  <!--include colorpicker-->
  <div class="site-wrapper">


    <!-- Site Header -->
    <header class="site-header">
      <div class="container">
        <div class="row">
          <!-- Site Logo: change the width to fit your logo size-->
          <div class="site-logo retina pull-left"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" width="160" alt="Kataleya Logo"/></a></div>
          <!-- Site Navigation-->
          <nav role="navigation" class="navbar pull-right">
            <!-- Site Navigation Header: this part is required and is used on mobile.-->
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".site-navigation" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="fa fa-bars"></span></button>
            </div>
            <!-- Site Navigation: main menu content-->
            <ul class="site-navigation">
              <li style="display:none"><a href="<?php echo base_url() ?>#home">Promo</a></li>
              <li><a href="<?php echo base_url() ?>#promo">Promo</a></li>
              <li><a href="<?php echo base_url() ?>#about-us">About Us</a></li>
              <li class="active"><a href="site_url('router/open_url/portfolio')">Menu</a></li>
              <li><a href="<?php echo base_url() ?>#contact">Contact Us</a></li>
              <li><a href="#">Features</a>
                <ul class="sub-menu">
                  <li><a href="<?php echo site_url('router/open_url/reservation'); ?>">Reserve a Table</a></li>
                  <li><a href="<?php echo site_url('router/open_url/register'); ?>">Membership</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <section class="no-spacing">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-heading">
              <h1><?php echo $menu_desc[0]->nama_produk; ?></h1>
              <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href=<?php echo site_url('welcome/menu'); ?>">Menu</a></li>
                <li><span><?php echo $menu_desc[0]->nama_produk; ?></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="style-2 portfolio-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="post-images" data-ride="carousel" class="carousel slide post-images">
              <div class="carousel-inner">
                <div class="item active"><img src="<?php echo base_url(); ?>assets/images/portfolio-single-1.jpg" alt="Portfolio single 1"/></div>
                <!--div class="item"><img src="<?php echo base_url(); ?>assets/images/portfolio-single-2.jpg" alt="Portfolio single 2"/></div>
                <div class="item"><img src="<?php echo base_url(); ?>assets/images/portfolio-single-3.jpg" alt="Portfolio single 3"/></div>
              </div>
              <!--ol class="carousel-indicators">
                <li data-target="#post-images" data-slide-to="0" class="active"></li>
                <li data-target="#post-images" data-slide-to="1"></li>
                <li data-target="#post-images" data-slide-to="2"></li>
              </ol><a href="#post-images" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-chevron-left"></i></a><a href="#post-images" role="button" data-slide="prev" class="right carousel-control"><i class="fa fa-chevron-right"></i></a-->
            </div>
            <h3>Fantastically juicy, fresh shortly just delicious.</h3>
            <p><?php 
              echo $menu_desc[0]->deskripsi;
            ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="blog-single">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <article>
                <h5 id="comments" class="comments-title">comments <span class="color">(3)</span></h5>
                <ul class="comment-list">
                  <li class="comment depth-1">
                    <article><img src="<?php echo base_url(); ?>assets/images/author-1.jpg" alt="Sara Doe">
                      <header>
                        <h5>Sara Doe</h5><span class="date">25.3.2014</span><a href="#" class="comment-reply-link">reply</a>
                      </header>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ipsum enim, fermentum eu dui eget, vestibulum vulputate massa. Etiam congue co modo dui, ut imperdiet risus vestibulum eu. Morbi molestie tortor nec consequat dictum. Pellentesque vitae tellus tellus. Vestibulum vulputate massa.</p>
                    </article>
                    <ul class="children">
                      <li class="comment depth-2">
                        <article><img src="<?php echo base_url(); ?>assets/images/author-2.jpg" alt="John Doe">
                          <header>
                            <h5>John Doe</h5><span class="date">25.3.2014</span><a href="#" class="comment-reply-link">reply</a>
                          </header>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ipsum enim, fermentum eu dui eget, vestibulum vulputate massa. Etiam congue co modo dui, ut imperdiet risus vestibulum eu. Morbi molestie tortor nec consequat dictum. Pellentesque vitae tellus tellus. Vestibulum vulputate massa.</p>
                        </article>
                      </li>
                    </ul>
                  </li>
                  <li class="comment depth-1">
                    <article><img src="<?php echo base_url(); ?>assets/images/author-3.jpg" alt="Jenny Smiles">
                      <header>
                        <h5>Jenny Smiles</h5><span class="date">25.3.2014</span><a href="#" class="comment-reply-link">reply</a>
                      </header>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ipsum enim, fermentum eu dui eget, vestibulum vulputate massa. Etiam congue co modo dui, ut imperdiet risus vestibulum eu. Morbi molestie tortor nec consequat dictum. Pellentesque vitae tellus tellus. Vestibulum vulputate massa.</p>
                    </article>
                  </li>
                </ul>
                <h5 class="comments-submit-title">leave a comment</h5>
                <form class="comment-form" method="post" action="/welcome/comments">
                  <div class="row">
                    <div class="col-sm-12">
                      <input type="email" placeholder="e-mail" name = "email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" placeholder="phone" name = "phone ">
                    </div>
                    <div class="col-sm-6">
                      <select name="rating">
                        <option value="1">Really Bad</option>
                        <option value="2">Bad</option>
                        <option value="3">Okay</option>
                        <option value="4">Good</option>
                        <option value="5">Very Good</option>
                      </select>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <textarea placeholder="message" name="message"></textarea>
                    </div>
                  </div>
                  <button data-form="submit" class="btn btn-md">submit</button>
                </form>
              </article>
            </div>
          </div>
        </div>
      </section>
    <section class="load-more text-center">
      <div class="container">
        <div class="row"><a href="#" class="btn btn-md"><i class="fa fa-chevron-left"></i>previous</a><a href="<?php echo base_url(); ?>" class="btn btn-md secondary"><i class="fa fa-home"> </i>home</a><a href="#" class="btn btn-md">next<i class="fa fa-chevron-right"></i></a></div>
      </div>
    </section>
    <section class="jumbotron text-center">
      <div class="container">
        <h1> <span class="color">all you need</span>, give it a go</h1><a href="#" class="btn btn-md">buy kateleya</a>
      </div>
    </section>
    <!-- Including scripts-->
    <!-- script(src="")-->
    <input id="site-url" type="hidden" value="<?php echo base_url(); ?>"/>
    <footer class="site-footer">
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-6"><img src="<?php echo base_url(); ?>assets/images/footer-logo.png" alt="Footer Logo"/></div>
            <div class="col-sm-6">
              <div class="social"><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-behance"></a><a href="#" class="fa fa-skype"></a><a href="#" class="fa fa-vimeo-square"></a><a href="#" class="fa fa-google-plus"></a><a href="#" class="fa fa-linkedin-square"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo base_url(); ?>assets/javascript/jquery.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/gmap3.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/jquery.cookie.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/theme.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/smoothscroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/bootstrap/tab.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/bootstrap/collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/bootstrap/alert.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/bootstrap/carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/bootstrap/transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/jquery.touchSwipe.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/picturefill.js" async="async"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/parallax.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/imagesloaded.js"></script>
    <script src="<?php echo base_url(); ?>vassets/javascript/isotope.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/jflickrfeed.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/jquery.prettyPhoto.js"></script>
    <!-- LayerSlider-->
    <script src="<?php echo base_url(); ?>assets/javascript/greensock.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/layerslider.transitions.js"></script>
    <script src="<?php echo base_url(); ?>assets/javascript/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Colorpicker-->
    <script src="<?php echo base_url(); ?>assets/javascript/colorpicker.js"></script>
    <script>
      jQuery(function($) {
       map('#map', '2 Elizabeth St, Melbourne', 14);

       $("#no-clutter").parallax("50%", 0.6);
       $("#home").parallax("50%", 0.6);
       $("#coffee-statement-1").parallax("50%", 0.6);
       $("#pizza-statement-1").parallax("50%", 0.6);
      });

    </script>
    <script>
      jQuery(function() {
       jQuery('#home').layerSlider({
        skin 				: 'kataleya',
        skinsPath 			: 'assets/css/layerslider/skins/',
        responsiveUnder		: 1200,
        layersContainer 	: 1200,
        responsive 			: true,
        showCircleTimer		: false
       });
      });
    </script>
  </div>
</body>
