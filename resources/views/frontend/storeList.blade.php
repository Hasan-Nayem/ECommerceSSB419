@extends('frontend.layout.inner-template')
@section( 'body-content' )

    <div class="ps-page--single ps-page--vendor">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Store List</li>
                </ul>
            </div>
        </div>
        <section class="ps-store-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Store list</h3>
                </div>
                <div class="ps-section__wrapper">
                    <div class="ps-section__left">
                        <aside class="widget widget--vendor">
                            <h3 class="widget-title">Search</h3>
                            <input class="form-control" type="text" placeholder="Search...">
                        </aside>
                        <aside class="widget widget--vendor">
                            <h3 class="widget-title">Filter by Category</h3>
                            <div class="form-group">
                                <select class="ps-select">
                                    <option>Lighting</option>
                                    <option>Exterior</option>
                                    <option>Custom Grilles</option>
                                    <option>Wheels & Tires</option>
                                    <option>Performance</option>
                                </select>
                            </div>
                        </aside>
                        <aside class="widget widget--vendor">
                            <h3 class="widget-title">Filter by Location</h3>
                            <div class="form-group">
                                <select class="ps-select">
                                    <option>Chooose Location</option>
                                    <option>Exterior</option>
                                    <option>Custom Grilles</option>
                                    <option>Wheels & Tires</option>
                                    <option>Performance</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="ps-select">
                                    <option>Chooose State</option>
                                    <option>Exterior</option>
                                    <option>Custom Grilles</option>
                                    <option>Wheels & Tires</option>
                                    <option>Performance</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Search by City">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Search by ZIP">
                            </div>
                        </aside>
                    </div>
                    <div class="ps-section__right">
                        <section class="ps-store-box">
                            <div class="ps-section__header">
                                <p>Showing 1 -8 of 22 results</p>
                                <select class="ps-select">
                                    <option value="1">Sort by Newest: old to news</option>
                                    <option value="2">Sort by Newest: New to old</option>
                                    <option value="3">Sort by average rating: low to hight</option>
                                </select>
                            </div>
                            <div class="ps-section__content">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                        <article class="ps-block--store">
                                            <div class="ps-block__thumbnail bg--cover" data-background="img/vendor/store/1.jpg"></div>
                                            <div class="ps-block__content">
                                                <div class="ps-block__author"><a class="ps-block__user" href="#"><img src="{{ asset('frontend/img/vendor/store/user/3.jpg') }}" alt=""></a><a class="ps-btn" href="#">Visit Store</a></div>
                                                <h4>GoPro</h4>
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select>
                                                <p>325 Orchard, Buenos Aires, Formosa Argentina</p>
                                                <ul class="ps-block__contact">
                                                    <li><i class="icon-envelope"></i><a href="/cdn-cgi/l/email-protection#a3c0cccdd7c2c0d7e3dbcbcccec68dc0ccce"><span class="__cf_email__" data-cfemail="71121e1f051012053109191e1c145f121e1c">[email&#160;protected]</span></a></li>
                                                    <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                                </ul>
                                                <div class="ps-block__inquiry"><a href="#"><i class="icon-question-circle"></i> inquiry</a></div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                        <article class="ps-block--store">
                                            <div class="ps-block__thumbnail bg--cover" data-background="img/vendor/store/2.jpg"></div>
                                            <div class="ps-block__content">
                                                <div class="ps-block__author"><a class="ps-block__user" href="#"><img src="{{ asset('frontend/img/vendor/store/user/4.jpg') }}" alt=""></a><a class="ps-btn" href="#">Visit Store</a></div>
                                                <h4>Robert's Store</h4>
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select>
                                                <p>325 Orchard, Buenos Aires, Formosa Argentina</p>
                                                <ul class="ps-block__contact">
                                                    <li><i class="icon-envelope"></i><a href="/cdn-cgi/l/email-protection#ceada1a0baafadba8eb6a6a1a3abe0ada1a3"><span class="__cf_email__" data-cfemail="ff9c90918b9e9c8bbf879790929ad19c9092">[email&#160;protected]</span></a></li>
                                                    <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                                </ul>
                                                <div class="ps-block__inquiry"><a href="#"><i class="icon-question-circle"></i> inquiry</a></div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                        <article class="ps-block--store">
                                            <div class="ps-block__thumbnail bg--cover" data-background="img/vendor/store/3.jpg"></div>
                                            <div class="ps-block__content">
                                                <div class="ps-block__author"><a class="ps-block__user" href="#"><img src="{{ asset('frontend/img/vendor/store/user/5.jpg') }}" alt=""></a><a class="ps-btn" href="#">Visit Store</a></div>
                                                <h4>Youngshop</h4>
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select>
                                                <p>325 Orchard, Buenos Aires, Formosa Argentina</p>
                                                <ul class="ps-block__contact">
                                                    <li><i class="icon-envelope"></i><a href="/cdn-cgi/l/email-protection#5b3834352f3a382f1b233334363e75383436"><span class="__cf_email__" data-cfemail="01626e6f756062754179696e6c642f626e6c">[email&#160;protected]</span></a></li>
                                                    <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                                </ul>
                                                <div class="ps-block__inquiry"><a href="#"><i class="icon-question-circle"></i> inquiry</a></div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                        <article class="ps-block--store">
                                            <div class="ps-block__thumbnail bg--cover" data-background="img/vendor/store/1.jpg"></div>
                                            <div class="ps-block__content">
                                                <div class="ps-block__author"><a class="ps-block__user" href="#"><img src="{{ asset('frontend/img/vendor/store/user/5.jpg') }}" alt=""></a><a class="ps-btn" href="#">Visit Store</a></div>
                                                <h4>Global Offical</h4>
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select>
                                                <p>325 Orchard, Buenos Aires, Formosa Argentina</p>
                                                <ul class="ps-block__contact">
                                                    <li><i class="icon-envelope"></i><a href="/cdn-cgi/l/email-protection#4a2925243e2b293e0a322225272f64292527"><span class="__cf_email__" data-cfemail="61020e0f150002152119090e0c044f020e0c">[email&#160;protected]</span></a></li>
                                                    <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                                </ul>
                                                <div class="ps-block__inquiry"><a href="#"><i class="icon-question-circle"></i> inquiry</a></div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="ps-pagination">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="ps-newsletter">
        <div class="container">
            <form class="ps-form--newsletter" action="do_action" method="post">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="ps-footer ps-footer--2">
        <div class="container">
            <div class="ps-footer__content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <aside class="widget widget_footer">
                            <h4 class="widget-title">Quick links</h4>
                            <ul class="ps-list--link">
                                <li><a href="policy.html">Policy</a></li>
                                <li><a href="term-condition.html">Term & Condition</a></li>
                                <li><a href="shipping.html">Shipping</a></li>
                                <li><a href="return.html">Return</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <aside class="widget widget_footer">
                            <h4 class="widget-title">Company</h4>
                            <ul class="ps-list--link">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="affilate.html">Affilate</a></li>
                                <li><a href="shipping.html">Career</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <aside class="widget widget_footer">
                            <h4 class="widget-title">Bussiness</h4>
                            <ul class="ps-list--link">
                                <li><a href="our-press.html">Our Press</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My account</a></li>
                                <li><a href="shop.html">Shop</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 ">
                        <aside class="widget widget_newletters">
                            <h4 class="widget-title">Newsletter</h4>
                            <form class="ps-form--newletter" action="#" method="get">
                                <div class="form-group--nest">
                                    <input class="form-control" type="text" placeholder="Email Address">
                                    <button class="ps-btn">Subscribe</button>
                                </div>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="ps-footer__copyright">
                <p>© 2021 Martfury. All Rights Reserved</p>
                <p><span>We Using Safe Payment For:</span><a href="#"><img src="{{ asset('frontend/img/payment-method/1.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/2.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/3.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/4.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/5.jpg') }}" alt=""></a></p>
            </div>
        </div>
    </footer>

@endsection
