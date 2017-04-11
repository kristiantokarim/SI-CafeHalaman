  <div class="order-menu-wrapper">
    <button class="close-order fa fa-cutlery"></button>
    <div class="order-menu">
      <button class="mobile-close">×</button>
      <div class="order-header">
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
        <input type="text" id="order-search" placeholder="search the menu">
      </div>
      <?php
        foreach ($categories as $cat) {
          $str = preg_replace('/\s+/', '', ($cat->nama_kategori));
          $str = str_replace('&', 'and', $str);
          $str = strtolower($str);
      ?>
          <section>
            <h2 class="color text-center"><?php echo $cat->nama_kategori; ?></h2>
            <?php
              foreach ($menus as $menu) {
                if ($menu->id_kategori == $cat->id_kategori) {
                  $str1 = str_replace(' ', '-', $menu->nama_produk);
                  $str1 = strtolower($str1);
            ?>
                  <article id="<?php echo $str1; ?>" class="food-item price-right">
                    <header>
                      <h3><?php echo $menu->nama_produk; ?></h3>
                      <h4 class="price" value="<?php echo $menu->harga; ?>" name="harga"><span>Rp </span><?php echo $menu->harga; ?></h4>
                      <div class="quantity">
                        <button class="minus">-</button><span class="num">0</span>
                        <button class="plus">+</button>
                      </div>
                    </header>
                  </article>
            <?php
                }
              }
            ?>
          </section>
      <?php
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
        <h6 id="total" value="0" class="price text-center color">total: Rp <span>0</span></h6>
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
  <script>
  function totalPrice() {
    var x = document.getElementsByName("harga");
    var i;
    var sum = 0;
    for (i = 0; i < x.length; i++) {
        if (x[i].value != "0") {
            sum = sum + parseInt(x[i].value);
        }
    }
    var tprice = document.getElementById("total");
    tprice.value = sum;
  }
  </script>
