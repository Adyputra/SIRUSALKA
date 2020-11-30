<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-info">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $items) {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                    echo "<h6>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>
            <h5>Input Alamat Pengiriman dan Pembayaran</h5>

            <form action="<?php echo base_url('dashboard/proses_pesanan'); ?>" method="post">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>POS Indonesia</option>
                        <option>GOJEK</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BNI - 123456799</option>
                        <option>BRI - 987654321</option>
                        <option>BCA - 192837465</option>
                        <option>Mandiri - 918273645</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-success mb-4">Pesan</button>

            </form>

        <?php
                } else {
                    echo "<h6>Keranjang Belanja Anda Masih Kosong !!!";
                }
        ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>