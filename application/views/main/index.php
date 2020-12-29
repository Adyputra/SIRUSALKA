<!-- Hero Section Begin -->
<section class="hero">
  <div class="hero__slider owl-carousel">
    <div class="hero__items set-bg" data-setbg="<?= base_url('assets/main/') ?>img/hero/hero.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-7 col-md-8">
            <div class="hero__text">
              <h6>REBORN OF RUSALKA</h6>
              <h2>New Realease</h2>
              <p>Urban X Streetwear X OldSchool</p>
              <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
              <div class="hero__social">
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
            <?php echo anchor('main/shopdetail/' . $b->id_brg, '<div class="btn btn-sm btn-dark">Detail</div>') ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <a href="<?= base_url('main/shop'); ?>" class="primary-btn">more <span class="arrow_right"></span></a>
</section>
<!-- Product Section End -->

<!-- Categories Section End -->