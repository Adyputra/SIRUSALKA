    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action=" <?= base_url('main/bayar'); ?> " method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                                    here</a> to enter your code</h6>
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        <input type="text" name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Province<span>*</span></p>
                                <select name="provinsi" id="dropdown_provinsi">
                                    <option value="">Jawa Timur</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <select name="kabupaten" id="dropdown_provinsi">
                                    <option value="">Jawa Timur</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Address<span>*</span></p>
                                        <input type="text" nama="jalan" placeholder="Street Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="nomer">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Notes<span>*</span></p>
                                <input type="text" name="note" placeholder="Mohon Cantumkan Ukuran dan Warna">
                                <p class="font-italic"><span>*</span> jika tidak mencantumkan akan di kirim random</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <?php $i = 1 ?>
                                    <?php foreach ($this->cart->contents() as $cart) : ?>
                                        <li> <?= $i++; ?> <?= $cart['name'] ?> <span> Rp <?= number_format($cart['price'], 0, '.', '.'); ?> </span></li>
                                    <?php endforeach; ?>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>$750.99</span></li>
                                    <li>Total <span>$750.99</span></li>
                                </ul>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->