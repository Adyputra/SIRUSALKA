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
                 <?php foreach ($barang as $b) : ?>
                     <div class="col-lg-6 col-md-9">
                         <div class="product__item__pic set-bg" data-setbg="<?= base_url('uploads/') ?><?= $b->gambar; ?>">
                             <span class="label">New</span>
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
                             <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-o"></i>
                                 <span> - 5 Reviews</span>
                             </div>
                             <h3>Rp <?= number_format($b->harga, 0, '.', '.'); ?></h3>
                             <p><?= $b->kategori ?></p>
                         <?php endforeach;  ?>
                         <div class="product__details__cart__option">
                             <a href="#" class="primary-btn">add to cart</a>
                         </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </section>
 <!-- Shop Details Section End -->