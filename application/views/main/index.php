

 <!-- Hero Section Begin -->
 <section class="hero">
  <div class="hero__slider owl-carousel">
   <div class="hero__items set-bg" data-setbg="<?= base_url('assets/main/') ?>img/hero/hero-1.jpg">
    <div class="container">
     <div class="row">
      <div class="col-xl-5 col-lg-7 col-md-8">
       <div class="hero__text">
        <h6>Summer Collection</h6>
        <h2>Fall - Winter Collections 2030</h2>
        <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
         commitment to exceptional quality.</p>
        <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
        <div class="hero__social">
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-pinterest"></i></a>
         <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="hero__items set-bg" data-setbg="<?= base_url('assets/main/') ?>img/hero/hero-2.jpg">
    <div class="container">
     <div class="row">
      <div class="col-xl-5 col-lg-7 col-md-8">
       <div class="hero__text">
        <h6>Summer Collection</h6>
        <h2>Fall - Winter Collections 2030</h2>
        <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
         commitment to exceptional quality.</p>
        <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
        <div class="hero__social">
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-pinterest"></i></a>
         <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!-- Hero Section End -->


 <!-- Product Section Begin -->
 <section class="product spad mt-5">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <ul class="filter__controls">
      <li class="active" data-filter="*">New Arrival</li>
     </ul>
    </div>
   </div>
   <div class="row product__filter">
    <?php foreach ($barang as $b) : ?>
     <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
      <div class="product__item sale">
       <div class="product__item__pic set-bg" data-setbg="<?= base_url('uploads/') ?><?= $b->gambar; ?>">
        <span class="label">New</span>
        <ul class="product__hover">
         <li><a href="#"><img src="<?= base_url('assets/main/') ?>img/icon/heart.png" alt=""></a></li>
        </ul>
       </div>
       <div class="product__item__text">
        <h6><?= $b->nama_brg; ?></h6>
        <?php $nama_brg = urlencode($b->nama_brg) ?>
        <a href="<?= base_url("Main/addCart?id=$b->id_brg&price=$b->harga&name=$nama_brg") ?>" class="add-cart">+ Add To Cart</a>
        <div class="rating">
         <?php for ($i = 1; $i <= 5; $i++) { ?>
          <i class="fa fa-star<?= $i <= $b->rating ? '' : '-o' ?>"></i>
         <?php } ?>
        </div>
        <h5>Rp <?= number_format($b->harga, 0, '.', '.'); ?></h5>
       </div>
      </div>
     </div>
    <?php endforeach; ?>
   </div>
 </section>
 <!-- Product Section End -->

 <!-- Categories Section Begin -->
 <section class="categories spad">
  <div class="container">
   <div class="row">
    <div class="col-lg-3">
     <div class="categories__text">
      <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
     </div>
    </div>
    <div class="col-lg-4">
     <div class="categories__hot__deal">
      <img src="<?= base_url('assets/main/') ?>img/product-sale.png" alt="">
      <div class="hot__deal__sticker">
       <span>Sale Of</span>
       <h5>$29.99</h5>
      </div>
     </div>
    </div>
    <div class="col-lg-4 offset-lg-1">
     <div class="categories__deal__countdown">
      <span>Deal Of The Week</span>
      <h2>Multi-pocket Chest Bag Black</h2>
      <div class="categories__deal__countdown__timer" id="countdown">
       <div class="cd-item">
        <span>3</span>
        <p>Days</p>
       </div>
       <div class="cd-item">
        <span>1</span>
        <p>Hours</p>
       </div>
       <div class="cd-item">
        <span>50</span>
        <p>Minutes</p>
       </div>
       <div class="cd-item">
        <span>18</span>
        <p>Seconds</p>
       </div>
      </div>
      <a href="#" class="primary-btn">Shop now</a>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!-- Categories Section End -->

