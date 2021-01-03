<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Note</th>
            <th>Total Belanja</th>
            <th>Tanggal Pemesanan</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->kabupaten; ?> <?= $inv->jalan; ?></td>
                <td><?php echo $inv->note ?></td>
                <td><?php echo $inv->jumlah ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>