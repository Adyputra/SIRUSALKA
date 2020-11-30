<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row text-center mt-4">
      <?php foreach ($barang as $brg) : ?>

        <div class="card ml-3 mb-3" style="width: 18rem;">
          <img style="height: 200px" src="<?php echo base_url() . 'uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
            <small><?php echo $brg->keterangan ?></small><br>
            <span class="badge badge-pill badge-info mb-3">Rp. <?= number_format($brg->harga, '0', ',', '.') ?></span><br>
            <a href="#" class="btn btn-sm btn-primary">Detail</a>
            <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Tambah ke Keranjang </div>') ?>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
  </div>