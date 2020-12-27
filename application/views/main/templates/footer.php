 <!-- Footer Section Begin -->
 <footer class="footer">
  <div class="container">
   <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
     <div class="footer__about">
      <div class="footer__logo">
       <a href="#"><img src="<?= base_url('assets/main/') ?>img/footer-logo.png" alt=""></a>
      </div>
      <p>The customer is at the heart of our unique business model, which includes design.</p>
      <a href="#"><img src="<?= base_url('assets/main/') ?>img/payment.png" alt=""></a>
     </div>
    </div>
    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
     <div class="footer__widget">
      <h6>Shopping</h6>
      <ul>
       <li><a href="#">Clothing Store</a></li>
       <li><a href="#">Trending Shoes</a></li>
       <li><a href="#">Accessories</a></li>
       <li><a href="#">Sale</a></li>
      </ul>
     </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
     <div class="footer__widget">
      <h6>Shopping</h6>
      <ul>
       <li><a href="#">Contact Us</a></li>
       <li><a href="#">Payment Methods</a></li>
       <li><a href="#">Delivary</a></li>
       <li><a href="#">Return & Exchanges</a></li>
      </ul>
     </div>
    </div>
    <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
     <div class="footer__widget">
      <h6>NewLetter</h6>
      <div class="footer__newslatter">
       <p>Be the first to know about new arrivals, look books, sales & promos!</p>
       <form action="#">
        <input type="text" placeholder="Your email">
        <button type="submit"><span class="icon_mail_alt"></span></button>
       </form>
      </div>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-12 text-center">
     <div class="footer__copyright__text">
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      <p>Copyright ©
       <script>
        document.write(new Date().getFullYear());
       </script>2020
       All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      </p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     </div>
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
 <script src="<?= base_url('assets/main/') ?>js/bootstrap.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.nice-select.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.nicescroll.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.magnific-popup.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.countdown.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/jquery.slicknav.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/mixitup.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/owl.carousel.min.js"></script>
 <script src="<?= base_url('assets/main/') ?>js/main.js"></script>

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
     $(document).on('click', '#hapus_item', function () {
        let rowid = $(this).data('id');
        hapus_item(rowid)
     })


    function hapus_item(rowid){
        $.ajax({
            method: "POST",
            url: `<?= base_url('API/delete_cart') ?>`,
            data: {
                row_id: rowid
            },
            dataType: "text",
            success: function (response) {
                location.reload();
            }
        });
    }

    $(document).on('change', '#quantity', function(){
        
    })
 </script>
    <script>
        $(document).on('change', '#dropdown_provinsi', function(){
            $('#dropdown_kabkota').html('<option selected>Silahkan Pilih Kab/Kota</option>');
            var provinsi = $('#dropdown_provinsi').val();
            $.ajax({
                method: "GET",
                url: `<?= base_url('API/tampilKabKota/') ?>${provinsi}`,
                dataType: "JSON",
                success: function (response) {
                    $('#dropdown_kabkota').removeAttr('disabled');
                    var provinsi = response.rajaongkir.results;
                    provinsi.forEach(value => {
                        $('#dropdown_kabkota').append('<option value='+ value.city_id + '>' + value.type + ' ' + value.city_name + '</option>');
                        $('#dropdown_kabkota').niceSelect('update');
                    })
                }
            });
        })

        $(document).on('change', '#dropdown_kabkota', function(){
            var kabkota = $(this).val();
            $.ajax({
                method: "GET",
                url: "<?= base_url('API/hitungOngkir/') ?>" + kabkota,
                dataType: "JSON",
                success: function (response) {
                    console.log(response)
                }
            });
        })
    </script>

</body>

</html>