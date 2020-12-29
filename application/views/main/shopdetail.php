 <!-- Shop Details Section Begin -->
 <section class="shop-details">
     <div class="product__details__pic">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="product__details__breadcrumb">
                         <a href="./index.html">Home</a>
                         <a href="./shop.html">Shop</a>
                         <span>Product Details</span>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-3 col-md-3">
                     <?php foreach ($barang as $b) : ?>
                         <ul class="nav nav-tabs" role="tablist">
                             <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                     <div class="product__thumb__pic set-bg" data-setbg="<?= base_url('uploads/') ?><?= $b->gambar; ?>">
                                     </div>
                                 </a>
                             </li>
                         </ul>
                 </div>
                 <div class="col-lg-6 col-md-9">
                     <div class="tab-content">
                         <div class="tab-pane active" id="tabs-1" role="tabpanel">
                             <div class="product__details__pic__item">
                                 <img src="<?= base_url('uploads/') ?><?= $b->gambar; ?>" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="product__details__content">
             <div class="container">
                 <div class="row d-flex justify-content-center">
                     <div class="col-lg-8">
                         <div class="product__details__text">
                             <h4><?= $b->nama_brg ?></h4>
                             <h3>Rp <?= number_format($b->harga, 0, '.', '.'); ?></h3>
                             <p>
                                 <h5>Keterangan :</h5>
                                 <br>
                                 <a><?= $b->keterangan ?></a>
                             </p>
                         <?php endforeach;  ?>
                         <div class="product__details__cart__option">
                             <?php $nama_brg = urlencode($b->nama_brg) ?>
                             <a href="<?= base_url("Main/addCart?id=$b->id_brg&price=$b->harga&name=$nama_brg") ?>" class="primary-btn">add to cart</a>
                         </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </section>
 <!-- Shop Details Section End -->