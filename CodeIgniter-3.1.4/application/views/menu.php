
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
    <div id="loading">
      <div id="loading-center">
        <img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="">
      </div>
    </div>
  <!--include colorpicker-->
  <div class="site-wrapper">
    <div class="order-menu-wrapper">
        <button class="close-order fa fa-cutlery"></button>
        <div class="order-menu">
          <button class="mobile-close">×</button>
          <div class="order-header">
            <svg style= "display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
              <g>
                <g>
                  <g>
                    <path d="M63.016,1.134C55.414,6.166,53.994,17.37,53,29c5.021,1.321,9.101,3.579,10.016,8.998 C63.93,32.579,68.01,30.321,73.031,29C72.037,17.37,70.617,6.166,63.016,1.134z"></path>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <g>
                    <path d="M63.125,49.996C61.076,24.065,20.794,22.264,1,34c0,0.667,0.167,0.25,0.167,0.917C7.297,55.219,27.661,71.48,55.109,64 c-6.523,7.979,3.71,30.104-5.01,40c3.785,3.008,10.959,1.13,13.026-2.999c2.068,4.129,9.242,6.007,13.027,2.999 c-8.721-9.896,1.512-32.021-5.011-40c27.448,7.48,47.813-8.781,53.942-29.083c0-0.667,0.167-0.25,0.167-0.917 C105.457,22.264,65.175,24.065,63.125,49.996z"></path>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <g>
                    <path d="M50,70c-25.705-1.039-29.236,20.098-34,40C31.967,101.301,53.156,97.822,50,70z"></path>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <g>
                    <path d="M76.297,70c25.705-1.039,29.236,20.098,34,40C94.33,101.301,73.141,97.822,76.297,70z"></path>
                  </g>
                </g>
              </g>
            </svg>
            <input type="text" id="order-search" placeholder="search the menu">
          </div>
            <?php
              foreach($categories as $category) { ?>
                <section>
                <h2 class="color text-center"><?php echo $category->nama_kategori;?></h2>

                <?php foreach($menus as $menu) {
                    if ($menu->nama_kategori == $category->nama_kategori) { ?>
                      <article class="food-item price-right">
                      <header>
                        <h3><?php echo $menu->nama_produk ?></h3>
                        <h4 class="price"><span>Rp</span><?php echo $menu->harga ;?></h4>
                        <div class="quantity">
                          <button class="minus">-</button><span class="num">0</span>
                          <button class="plus">+</button>
                        </div>
                      </header>
                    </article>
            <?php
                  }
                }
                ?></section><?php
              }
            ?>
          <div class="order-footer">
            <h6 class="price text-center color">total: $<span>0</span></h6>
            <textarea placeholder="Add Notes" class="order-notes hidden"></textarea>
            <div class="row">
              <div class="col-md-6">
                <button data-menu-order="notes" class="btn btn-md">add order notes</button>
              </div>
              <div class="col-md-6">
                <button data-menu-order="review" class="btn btn-md">review your order</button>
              </div>
            </div>
          </div>
          <div class="order-review hidden">
            <h2 class="color text-center">your order</h2>
            <ul class="order-summary"></ul>
            <h6 class="price text-center color">total: $<span>0</span></h6>
            <h2 class="color text-center">your delivery info</h2>
            <form role="form" data-menu-order="customer" data-success="You order was successfully sent!">
              <div class="form-group">
                <input type="text" placeholder="name" id="order-name" name="name">
              </div>
              <div class="form-group">
                <input type="email" placeholder="email" id="order-email" name="email">
              </div>
              <div class="form-group">
                <input type="tel" placeholder="phone" id="order-phone" name="phone">
              </div>
              <div class="form-group">
                <input type="text" placeholder="delivery address" id="order-address" name="address">
              </div>
              <div class="form-group">
                <textarea placeholder="Add Notes" name="note" class="order-notes hidden"></textarea>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <button data-menu-order="back" class="btn btn-md">go back</button>
                </div>
                <div class="col-md-6">
                  <button data-menu-order="place" type="submit" class="btn btn-md">place order</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
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
              <li class="active"><a href="#">Menu</a></li>
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
              <h1>Menu</h1>
              <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><span>Menu</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="style-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="filter text-center">
              <li>
                <button data-filter="*" class="selected">all</button>
              </li>
              <?php
                foreach($categories as $category) {
                  $str = preg_replace('/\s+/', '', ($category->nama_kategori));
                  $str = str_replace('&', 'and', $str);
                  $str = strtolower($str);
                  echo('<li>
                    <button data-filter="'.$str.'">'.$category->nama_kategori.'</button>
                  </li>');
                }
              ?>
            </ul>
          </div>
          <div class="posts portfolio">
            <?php
              foreach($menus as $menu) {
                $str = preg_replace('/\s+/', '', ($menu->nama_kategori));
                $str = str_replace('&', 'and', $str);
                $str = strtolower($str);
            ?>
              <article class="col-md-4 col-xs-6 <?php echo $str; ?>"><a href="<?php echo site_url('welcome/descMenu/'.$menu->id_produk); ?>">
                <?php
                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $menu->gambar_produk ).'"/>';
                ?>
                <div class="hover"><i class="fa fa-cutlery"></i>
                  <h2><?php echo $menu->nama_produk; ?></h2>
                </div></a>
              </article>
            <?php
              }
            ?>

          </div>
        </div>
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
    <script src="<?php echo base_url(); ?>assets/javascript/isotope.js"></script>
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
        skinsPath 			: '<?php echo base_url(); ?>assets/css/layerslider/skins/',
        responsiveUnder		: 1200,
        layersContainer 	: 1200,
        responsive 			: true,
        showCircleTimer		: false
       });
      });
    </script>
  </div>
</body>
