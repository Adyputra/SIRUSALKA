 <!-- Footer Section Begin -->
 <footer class="footer">
     <div class="container">
         <div class="row">
             <div class="footer__about">
                 <div class="footer__logo">
                     <a href="#"><img src="<?= base_url('assets/main/') ?>img/logo2.png" alt=""></a>
                 </div>
                 <p>The customer is at the heart of our unique business model, which includes design.</p>
                 <a href="#"><img src="<?= base_url('assets/main/') ?>img/payment.png" alt=""></a>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer Section End -->

 <!-- Search Begin -->
 <div class="search-model">
     <div class="h-100 d-flex align-items-center justify-content-center">
         <div class="search-close-switch">+</div>
         <form class="search-model-form">
             <input type="text" id="search-input" placeholder="Search here.....">
         </form>
     </div>
 </div>
 <!-- Search End -->

 <!-- Js Plugins -->
 <script src="<?= base_url('assets/main/') ?>js/jquery-3.3.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="<?= base_url('assets/main/') ?>js/bootstrap.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.nice-select.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.nicescroll.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.magnific-popup.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.countdown.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.slicknav.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/mixitup.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/owl.carousel.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/main.js"></script>

 <?php if ($this->session->flashdata('transaksi_sukses')) : ?>
     <script>
         Swal.fire(
             'Hooray',
             'Transaksi Sudah Selesai',
             'success'
         )
     </script>
 <?php endif; ?>


 <?php if ($this->session->flashdata('addCart')) : ?>
     <script>
         $(document).ready(function() {
             const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 timer: 3000,
                 timerProgressBar: true,
                 didOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                 }
             })

             Toast.fire({
                 icon: 'success',
                 title: 'Sukses Ditambahkan Di Keranjang'
             })
         })
     </script>
 <?php endif; ?>

 <script>
     $(document).on('click', '#hapus_item', function() {
         let rowid = $(this).data('id');
         hapus_item(rowid)
     })


     function hapus_item(rowid) {
         $.ajax({
             method: "POST",
             url: `<?= base_url('API/delete_cart') ?>`,
             data: {
                 row_id: rowid
             },
             dataType: "text",
             success: function(response) {
                 location.reload();
             }
         });
     }

     $(document).on('change', '#quantity', function() {

     })
 </script>
 <script>
     $(document).on('change', '#dropdown_provinsi', function() {
         $('#dropdown_kabkota').html('<option selected>Silahkan Pilih Kab/Kota</option>');
         var provinsi = $('#dropdown_provinsi').val();
         var prov = $(this).html();
         $('#input_provinsi').val(prov);
         $.ajax({
             method: "GET",
             url: `<?= base_url('API/tampilKabKota/') ?>${provinsi}`,
             dataType: "JSON",
             success: function(response) {
                 $('#dropdown_kabkota').removeAttr('disabled');
                 var provinsi = response.rajaongkir.results;
                 provinsi.forEach(value => {
                     $('#dropdown_kabkota').append('<option value=' + value.city_id + '>' + value.type + ' ' + value.city_name + '</option>');
                     $('#dropdown_kabkota').niceSelect('update');
                 })
             }
         });
     })

     $(document).on('change', '#dropdown_kabkota', function() {
         var kabkota = $(this).val();
         var kota = document.getElementById("dropdown_kabkota").options[document.getElementById("dropdown_kabkota").selectedIndex].text;
         console.log(kota);
         $('#input_kabkota').val(kota);
         $.ajax({
             method: "GET",
             url: "<?= base_url('API/hitungOngkir/') ?>" + kabkota,
             dataType: "JSON",
             success: function(response) {
                 var output = response.rajaongkir.results[0].costs[0].cost[0].value;
                 var ongkir = (output / 1000).toFixed(3);
                 var subtotal = parseInt($('#input_subtotal').val());
                 var total = ((subtotal + output) / 1000).toFixed(3);
                 $('#input_ongkir').val(output);
                 $('#ongkir').html(`Ongkir <span id='ongkir'>Rp ${ongkir}</span>`);
                 $('#total_harga').html(`Total <span id='ongkir'>Rp ${total}</span>`);
             }
         });
     })
 </script>
 <script>
     function validateForm() {
         var x = document.forms["myForm"]["nama"].value;
         var x = document.forms["myForm"]["provinsi"].value;
         var x = document.forms["myForm"]["kabkota"].value;
         var x = document.forms["myForm"]["alamat"].value;
         var x = document.forms["myForm"]["phone"].value;
         var x = document.forms["myForm"]["email"].value;
         var x = document.forms["myForm"]["note"].value;
         if (x == "") {
             alert("isi data dengan lengkap");
             return false;
         }
     }
 </script>

 </body>

 </html>