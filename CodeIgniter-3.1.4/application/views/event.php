<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Kataleya - Restaurant One Page HTML Template</title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png">
    <!-- Including stylesheets-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/core.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,latin-ext">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/layerslider.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colorpicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
  </head>
  <body class="responsive sticky-menu">
    <!--include colorpicker-->
    <div class="site-wrapper">
      <!-- Site Header -->
      <header class="site-header">
        <div class="container">
          <div class="row">
            <!-- Site Logo: change the width to fit your logo size-->
            <div class="site-logo retina pull-left"><a href="index.html"><img src="<?php echo base_url() ?>assets/images/logo.png" width="160" alt="Kataleya Logo"></a></div>
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
                <li><a href="site_url('welcome/menu')">Menu</a></li>
                <li><a href="<?php echo base_url() ?>#contact">Contact Us</a></li>
                <li class="active"><a href="#">Event</a></li>
                <li><a href="#">Features</a>
                  <ul class="sub-menu">
                    <li><a href="<?php echo site_url('welcome/reservation'); ?>">Reserve a Table</a></li>
                    <li><a href="<?php echo site_url('member'); ?>">Membership</a></li>
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
                <h1>Events</h1>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="blog.html">Events</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="style-2">
        <div class="container">
          <div class="row">
            <div class="blog-loop columns">
              <article class="col-md-6">
                <header class="text-center"><a class="popup-youtube" href="https://www.youtube.com/watch?v=gGgakt3niys"><img src="<?php echo base_url() ?>assets/images/recent-post-1.jpg" alt="Blog post 1">
                    <div class="hover"><i class="fa fa-cutlery"></i>
                      <div class="day">22</div>
                      <div class="month">Mar</div>
                    </div></a></header>
                <div class="post-inner">
                  <h2>Click me to go to youtube!
                  </h2>
                </div>
              </article>
              <article class="col-md-6">
                <header class="text-center"><a class="popup-youtube" href="#"><img src="<?php echo base_url() ?>assets/images/recent-post-1.jpg" alt="Blog post 1">
                    <div class="hover"><i class="fa fa-cutlery"></i>
                      <div class="day">22</div>
                      <div class="month">Mar</div>
                    </div></a></header>
                <div class="post-inner">
                  <h2>Just showing an image
                  </h2>
                </div>
              </article>
              <article class="col-md-6">
                <header class="text-center"><a class="popup-youtube" href="#"><img src="<?php echo base_url() ?>assets/images/recent-post-1.jpg" alt="Blog post 1">
                    <div class="hover"><i class="fa fa-cutlery"></i>
                      <div class="day">22</div>
                      <div class="month">Mar</div>
                    </div></a></header>
                <div class="post-inner">
                  <h2>Showing an image, too!
                  </h2>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Including scripts-->
      <!-- script(src="")-->
      <input id="site-url" type="hidden" value="http://anpsthemes.com/kataleya-html">
      <footer class="site-footer">
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-sm-6"><img src="<?php echo base_url() ?>assets/images/footer-logo.png" alt="Footer Logo"></div>
              <div class="col-sm-6">
                <div class="social"><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-behance"></a><a href="#" class="fa fa-skype"></a><a href="#" class="fa fa-vimeo-square"></a><a href="#" class="fa fa-google-plus"></a><a href="#" class="fa fa-linkedin-square"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="<?php echo base_url() ?>assets/javascript/jquery.js"></script>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script src="<?php echo base_url() ?>assets/javascript/gmap3.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/jquery.cookie.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/theme.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/smoothscroll.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/bootstrap/tab.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/bootstrap/collapse.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/bootstrap/alert.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/bootstrap/carousel.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/bootstrap/transition.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/jquery.touchSwipe.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/picturefill.js" async></script>
      <script src="<?php echo base_url() ?>assets/javascript/parallax.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/imagesloaded.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/isotope.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/jflickrfeed.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/jquery.prettyPhoto.js"></script>
      <!-- LayerSlider-->
      <script src="<?php echo base_url() ?>assets/javascript/greensock.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/layerslider.transitions.js"></script>
      <script src="<?php echo base_url() ?>assets/javascript/layerslider.kreaturamedia.jquery.js"></script>
      <!-- Colorpicker-->
      <script src="<?php echo base_url() ?>assets/javascript/colorpicker.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
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
          skin        : 'kataleya',
          skinsPath       : 'assets/css/layerslider/skins/',
          responsiveUnder   : 1200,
          layersContainer   : 1200,
          responsive      : true,
          showCircleTimer   : false
         });
        });
        $(document).ready(function(){

              $('.popup-youtube').magnificPopup({
                    type:'iframe',
                    closeOnBgClick: true,
                    fixedContentPos: false,
                    callbacks: {
                         open: function() {
                            jQuery('body').addClass('noscroll');
                         },
                         close: function() {
                             jQuery('body').removeClass('noscroll');
                         }
                    }
              });
            });
      </script>
    </div>
  </body>
</html>
