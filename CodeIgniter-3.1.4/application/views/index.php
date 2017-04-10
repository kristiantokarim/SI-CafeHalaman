<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Kataleya - Restaurant One Page HTML Template</title>
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Including stylesheets-->
    <link rel="stylesheet" href="/application/views/assets/css/core.css">
    <link rel="stylesheet" href="/application/views/assets/css/theme.css">
    <link rel="stylesheet" href="/application/views/assets/css/font-awesome.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,latin-ext">
    <link rel="stylesheet" href="/application/views/assets/css/layerslider.css">
    <link rel="stylesheet" href="/application/views/assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="/application/views/assets/css/colorpicker.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
  </head>
  <body class="menu-style-2 menu-dark responsive sticky-menu">
    <!--include colorpicker-->
     <div id="loading">
      <div id="loading-center">
        <img src="/application/views/assets/images/loader.gif" alt="">
      </div>
    </div>

    <div class="site-wrapper">

      <!-- Site Header -->
      <header class="site-header">
        <div class="container">
          <div class="row">
            <!-- Site Logo: change the width to fit your logo size-->
            <div class="site-logo retina pull-left"><a href="#home"><img src="assets/images/logo-dark.png" data-sticky="/application/views/assets/images/logo.png" width="160" alt="Kataleya Logo"></a></div>
            <!-- Site Navigation-->
            <nav role="navigation" class="navbar pull-right">
              <!-- Site Navigation Header: this part is required and is used on mobile.-->
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".site-navigation" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="fa fa-bars"></span></button>
              </div>
              <!-- Site Navigation: main menu content-->
              <ul class="site-navigation">
                <li style="display:none"><a href="#home">Promo</a></li>
                <li><a href="#promo">Promo</a></li>
                <li><a href="#about-us">About Us</a></li>
                <!--li><a href="#coffee" data-toggle="dropdown" class="dropdown-toggle">coffee</a>
                  <ul class="sub-menu">
                    <li><a href="elements.html">elements</a></li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="404.html">error 404</a></li>
                    <li><a href="search.html">search page</a></li>
                    <li><a href="coming-soon.html" target="_blank">coming soon</a></li>
                  </ul>
                </li-->
                <li><a href="portfolio.html">Menu</a></li>
                <!--li><a href="#blends">blends</a></li-->
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="blog.html">Features</a>
                  <ul class="sub-menu">
                    <li><a href="blog-sidebar.html">Reserve a Table</a></li>
                    <li><a href="blog-masonry.html">Membership</a></li>
                    <!--li><a href="blog-3-columns.html">Delivery Order</a></li>
                    <li><a href="blog-single.html">blog article </a></li-->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <div id="home" style="background-image: url(/application/views/assets/images/coffee-slider.jpg); width: 100%; height: 862px;" class="parallax hidden-xs">
        <div data-ls="slidedelay: 4000; transition2d: 5,5;" class="ls-slide">
          <h1 style="top: 47%; left: 50%;" class="ls-l">invigorate your <span class="color">coffee </span>shop </h1>
          <h4 style="top: 55%; left: 50%;" class="style-2 ls-l">with kataleya</h4>
        </div>
        <div data-ls="slidedelay: 4000; transition2d: 5,5;" class="ls-slide">
          <h1 style="top: 47%; left: 50%;" class="ls-l text-center">simple yet <span class="color">beautiful  </span>template</h1>
          <h4 style="top: 55%; left: 50%;" class="style-2 ls-l">for your coffee shop</h4>
        </div>
        <div data-ls="slidedelay: 4000; transition2d: 5,5;" class="ls-slide">
          <h1 style="top: 47%; left: 50%;" class="ls-l">fresh  <span class="color">coffee </span>for you</h1>
          <h4 style="top: 55%; left: 50%;" class="style-2 ls-l">made every day</h4>
        </div>
      </div>
      <section class="style-2">
        <div class="container">
          <div class="row">
            <div  class="col-md-12">
              <svg style="display: none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
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
              <h2 id="promo" class="section-heading text-center">Promo</h2>
            </div>
          </div>
          <div class="row your-class">
            <?php
              foreach ($this->data['promos'] as $image) {
            ?>
              <div class="col-md-3 col-sm-6">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image->gambarPromo ).'"/>'; ?>
              </div>
            <?php
              }
            ?>
          </div>
          
        </div>
      </section>

      <section class="style-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <svg style="display: none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
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
              <h2 id="about-us" class="section-heading text-center">About Us</h2>
            </div>
            <div class="col-md-5 col-md-offset-1"><img src="assets/images/offer.jpg" alt="Offers"></div>
            <div class="col-md-5">
              <h5>know more about <span class="color">cafe halaman </span>story</h5>
              <ul class="list icons">
                <li> <i class="fa fa-cutlery"></i>we can acomodate 40 people</li>
                <li><i class="fa fa-leaf"></i>fresh food every day, produced locally from our neightbours</li>
                <li><i class="fa fa-trophy"></i>world renouned chefs with 20 years experience</li>
                <li><i class="fa fa-glass"></i>need a romantic getaway, kateleya is for you</li>
                <li><i class="fa fa-suitcase"></i>or maybe a business dinner, try us now</li>
                <li><i class="fa fa-coffee"></i>or just come for a cupcontact us of exelent coffee</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="style-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
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
              <h2 class="section-heading text-center">Feels like a second home</h2>
              <div class="col-md-12 text-center">
                Cafe halaman hadir memberi suasana baru dalam menyantap hidangan diluar rumah. Beragam menu andalan yang bervariasi mulai Sop Buntut dan Bakmi Tasik, Sate Solo, Kakap Asam Manis, Cumi Goreng Pedas, Es macha latte bisa menjadi pilihan bersantap saat sarapan, makan malam dan makan siang, atau sekedar hangout.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="posts blog">
                <article class="col-md-3 col-sm-5"><a href="blog-single.html"><img alt="Recent Blog Post 1" src="assets/images/recent-blog-post-1.jpg">
                    <div class="hover"><i class="fa fa-cutlery"></i></div></a><a href="blog-single.html">
                    <h2>firewood oven pizza is the best
                    </h2></a>
                  <p> Proin ut tincidunt ante, eget pulvinar ante. Sed nec erat et felis placerat facilisis id tristique diam. Aliquam ut pellentesque lorem.</p>
                </article>
                <article class="col-md-3 col-sm-5"><a href="blog-single.html"><img alt="Recent Blog Post 1" src="assets/images/recent-blog-post-1.jpg">
                    <div class="hover"><i class="fa fa-cutlery"></i></div></a><a href="blog-single.html">
                    <h2>firewood oven pizza is the best
                    </h2></a>
                  <p> Proin ut tincidunt ante, eget pulvinar ante. Sed nec erat et felis placerat facilisis id tristique diam. Aliquam ut pellentesque lorem.</p>
                </article>
                <article class="col-md-3 col-sm-5"><a href="blog-single.html"><img alt="Recent Blog Post 1" src="assets/images/recent-blog-post-1.jpg">
                    <div class="hover"><i class="fa fa-cutlery"></i></div></a><a href="blog-single.html">
                    <h2>firewood oven pizza is the best
                    </h2></a>
                  <p> Proin ut tincidunt ante, eget pulvinar ante. Sed nec erat et felis placerat facilisis id tristique diam. Aliquam ut pellentesque lorem.</p>
                </article>
                <article class="col-md-3 col-sm-5"><a href="blog-single.html"><img alt="Recent Blog Post 1" src="assets/images/recent-blog-post-1.jpg">
                    <div class="hover"><i class="fa fa-cutlery"></i></div></a><a href="blog-single.html">
                    <h2>firewood oven pizza is the best
                    </h2></a>
                  <p> Proin ut tincidunt ante, eget pulvinar ante. Sed nec erat et felis placerat facilisis id tristique diam. Aliquam ut pellentesque lorem.</p>
                </article>

              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!--section style="background-image: url(assets/images/capucino.jpg); background-repeat: no-repeat; background-size: 501px auto;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
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
              <h2 id="coffee" class="section-heading text-center">our blends</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 col-md-offset-3">
              <div class="food-item price-right">
                <h3>pure arabica</h3>
                <p>onion, carrot, celery, olive oil, tomato purée, sugar, bay leaves, vegetable stock</p>
                <h4 class="price"><span>$</span>2</h4>
              </div>
              <div class="food-item price-right">
                <h3>brazilian mix</h3>
                <p>onion, carrot, celery, olive oil, tomato puree, sugar, bay leaves, vegetable stock</p>
                <h4 class="price"><span>$</span>4</h4>
              </div>
              <div class="food-item price-right">
                <h3>just a cup of joy</h3>
                <p>onion, carrot, celery, olive oil, tomato puree, sugar, bay leaves, vegetable stock</p>
                <h4 class="price"><span>$</span>1</h4>
              </div>
              <div class="food-item price-right">
                <h3>spunky morning</h3>
                <p>onion, carrot, celery, olive oil, tomato puree, sugar, bay leaves, vegetable stock</p>
                <h4 class="price"><span>$</span>3</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="coffee-statement-1" style="background-image: url(assets/images/coffee-statement-1.jpg);" class="jumbotron parallax text-center">
        <div class="container">
          <h2>
             
            the last <span class="color style-2">coffee </span>theme you’ll need
          </h2><a href="#" class="btn btn-md">buy kateleya      </a>
        </div>
      </section-->
      
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
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
              <h2 id="blends" class="section-heading text-center">make a reservation</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <form role="form" data-form="reservation" data-success="You have successfully made a reservation!" class="box">
                <div class="form-group">
                  <input type="text" placeholder="name" name="name">
                </div>
                <div class="form-group">
                  <input type="email" placeholder="email" name="email">
                </div>
                <div class="form-group">
                  <input type="tel" placeholder="phone" name="phone">
                </div>
                <button type="submit" class="btn btn-md">submit       </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--section style="background-image: url(assets/images/twitter.jpg);" class="twitter text-center">
        <div class="container">
          <div class="row">
            <h2>twitter feeds</h2>
            <div id="twitter" data-twitter="AstudioTweet" data-ride="carousel" class="carousel slide">
              <div class="carousel-inner">Loading tweets...</div>
              <ol class="carousel-indicators">
                <li data-target="#twitter" data-slide-to="0" class="active">a</li>
                <li data-target="#twitter" data-slide-to="1">b</li>
                <li data-target="#twitter" data-slide-to="2">c</li>
              </ol>
            </div><a href="#" class="btn btn-md">follow us</a>
          </div>
        </div>
      </section-->
      <section id="map" class="map"></section>
      <section class="style-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <svg style="display: none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="126px" height="112px" viewBox="0 0 126 112" enable-background="new 0 0 126 112" xml:space="preserve" class="mini-logo">
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
              <h2 id="contact" class="section-heading text-center">Contact us</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3>contact details</h3>
              <p>Tell us what are think about us.</p>
              <ul class="contact-info">
                <li><i class="fa fa-home"></i>Jalan Tamansari 92, Bandung</li>
                <li><i class="fa fa-phone"></i>Phone: +386 40 555 666</li>
                <li><i class="fa fa-print"></i>Fax: +386 10 555 66677</li>
                <li><i class="fa fa-envelope"></i>Email: <a href="mailto:support@anpsthemes.com">support@anpsthemes.com</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <form role="form">
                <div class="form-group">
                  <input type="email" placeholder="e-mail">
                </div>
                <div class="form-group">
                  <select>
                    <option>test</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="tel" placeholder="phone">
                </div>
                <div class="form-group">
                  <textarea placeholder="message"></textarea>
                </div>
                <button type="submit" class="btn btn-md">submit       </button>
              </form>
            </div>
          </div>
        </div>

      </section>
      
      <!--section class="jumbotron text-center">
        <div class="container">
          <h2> <span class="color">all you need</span>, give it a go</h2><a href="#" class="btn btn-md">buy kateleya</a>
        </div>
      </section-->
      <!-- Including scripts-->
      <!-- script(src="")-->
      <input id="site-url" type="hidden" value="http://anpsthemes.com/kataleya-html">
      <footer class="site-footer">
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-sm-6"><img src="assets/images/footer-logo.png" alt="Footer Logo"></div>
              <div class="col-sm-6">
                <div class="social"><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-behance"></a><a href="#" class="fa fa-skype"></a><a href="#" class="fa fa-vimeo-square"></a><a href="#" class="fa fa-google-plus"></a><a href="#" class="fa fa-linkedin-square"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="/application/views/assets/javascript/jquery.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="http://maps.google.com/maps/api/js?key=AIzaSyBGtSijXR41rWTCDeBdc9ZmXlbV4Z8J8s0&sensor=false"></script>
      <script src="/application/views/assets/javascript/gmap3.js"></script>
      <script src="/application/views/assets/javascript/jquery.cookie.js"></script>
      <script src="/application/views/assets/javascript/theme.js"></script>
      <script src="/application/views/assets/javascript/smoothscroll.js"></script>
      <script src="/application/views/assets/javascript/bootstrap/tab.js"></script>
      <script src="/application/views/assets/javascript/bootstrap/collapse.js"></script>
      <script src="/application/views/assets/javascript/bootstrap/alert.js"></script>
      <script src="/application/views/assets/javascript/bootstrap/carousel.js"></script>
      <script src="/application/views/assets/javascript/bootstrap/transition.js"></script>
      <script src="/application/views/assets/javascript/jquery.touchSwipe.js"></script>
      <script src="/application/views/assets/javascript/picturefill.js" async></script>
      <script src="/application/views/assets/javascript/parallax.js"></script>
      <script src="/application/views/assets/javascript/imagesloaded.js"></script>
      <script src="/application/views/assets/javascript/isotope.js"></script>
      <script src="/application/views/assets/javascript/jflickrfeed.js"></script>
      <script src="/application/views/assets/javascript/jquery.prettyPhoto.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
      <!-- LayerSlider-->
      <script src="/application/views/assets/javascript/greensock.js"></script>
      <script src="/application/views/assets/javascript/layerslider.transitions.js"></script>
      <script src="/application/views/assets/javascript/layerslider.kreaturamedia.jquery.js"></script>
      <!-- Colorpicker-->
      <script src="/application/views/assets/javascript/colorpicker.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
      <script>
        jQuery(function($) {
         map('#map', 'Cafe Halaman Tamansari 92, Bandung', 17);
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
          skinsPath       : '/application/views/assets/css/layerslider/skins/',
          responsiveUnder   : 1200,
          layersContainer   : 1200,
          responsive      : true,
          showCircleTimer   : false
         });
        });
      </script>

      <script type="text/javascript">
            $(document).ready(function(){
             
              $('.your-class').slick({
                centerMode: true,
                arrows: false,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      arrows: false,
                      centerMode: true,
                      centerPadding: '40px',
                      slidesToShow: 3
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      arrows: false,
                      centerMode: true,
                      centerPadding: '40px',
                      slidesToShow: 1
                    }
                  }
                ]
              });
            });

      </script>
    </div>
  </body>
</html>