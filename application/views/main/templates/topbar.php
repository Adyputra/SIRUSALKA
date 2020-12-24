<div id="preloder">
  <div class="loader"></div>
 </div>

 <!-- Offcanvas Menu Begin -->
 <div class="offcanvas-menu-overlay"></div>
 <div class="offcanvas-menu-wrapper">
  <div class="offcanvas__option">
   <div class="offcanvas__links">
    <?php if ($this->session->userdata('username')) :
     $name = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row()->nama;
    ?>
     <a href="#">Halo, <?= $name; ?></a>
     <a href="<?= base_url('Auth/logout') ?>">Log Out</a>
    <?php else : ?>
     <a href="<?= base_url('Auth/login') ?>">Log in</a>
    <?php endif ?>
   </div>
  </div>
  <div class="offcanvas__nav__option">
   <a href="#" class="search-switch"><img src="<?= base_url('assets/main/') ?>img/icon/search.png" alt=""></a>
   <a href="#"><img src="<?= base_url('assets/main/') ?>img/icon/cart.png" alt=""> <span><?= $this->cart->total_items() ?></span></a>
   <div class="price">Rp <?= number_format($this->cart->total(), 0, '.', '.'); ?></div>
  </div>
  <div id="mobile-menu-wrap"></div>
 </div>
 <!-- Offcanvas Menu End -->

 <!-- Header Section Begin -->
 <header class="header">
  <div class="header__top">
   <div class="container">
    <div class="row">
     <div class="col-lg-6 col-md-7">
     </div>
     <div class="col-lg-6 col-md-5">
      <div class="header__top__right">
       <div class="header__top__links">
        <?php if ($this->session->userdata('username')) :
         $name = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row()->nama;
        ?>
         <a href="#">Halo, <?= $name; ?></a>
         <a href="<?= base_url('Auth/logout') ?>">Log Out</a>
        <?php else : ?>
         <a href="<?= base_url('Auth/login') ?>">Log in</a>
        <?php endif ?>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-3">
     <div class="header__logo">
      <a href="./index.html"><img src="<?= base_url('assets/main/') ?>img/logo.png" alt=""></a>
     </div>
    </div>
    <div class="col-lg-6 col-md-6">
    </div>
    <div class="col-lg-3 col-md-3">
     <div class="header__nav__option">
      <a href="#" class="search-switch"><img src="<?= base_url('assets/main/') ?>img/icon/search.png" alt=""></a>
      <a href="#"><img src="<?= base_url('assets/main/') ?>img/icon/cart.png" alt=""> <span><?= $this->cart->total_items() ?></span></a>
      <div class="price">Rp <?= number_format($this->cart->total(), 0, '.', '.'); ?></div>
     </div>
    </div>
   </div>
   <div class="canvas__open"><i class="fa fa-bars"></i></div>
  </div>
 </header>
 <!-- Header Section End -->