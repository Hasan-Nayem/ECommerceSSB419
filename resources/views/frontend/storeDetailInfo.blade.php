@extends('frontend.layout.inner-template')
@section( 'body-content' )

<div class="ps-page--single ps-page--vendor">
    <section class="ps-store-list">
        <div class="container">
            <aside class="ps-block--store-banner">
                <div class="ps-block__content bg--cover" data-background="{{ asset('frontend/img/vendor/store/default_banner.jpg') }}">
                    <h3>Go Pro</h3><a class="ps-block__inquiry" href="#"><i class="fa fa-question"></i> Inquiry</a>
                </div>
                <div class="ps-block__user">
                    <div class="ps-block__user-avatar"><img src="{{ asset('frontend/img/vendor/store/user/5.jpg') }}" alt="">
                        <select class="ps-rating" data-read-only="true">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                        </select>
                    </div>
                    <div class="ps-block__user-content">
                        <p><i class="icon-map-marker"></i> 326 Orchard Str, Riau, Riau Indonesia</p>
                        <p><i class="icon-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="64030b14160b240309050d084a070b09">[email&#160;protected]</a></p>
                    </div>
                </div>
            </aside>
            <div class="ps-section__wrapper">
                <div class="ps-section__left">
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Product Search</h3>
                        <div class="form-group--icon">
                            <input class="form-control" type="text" placeholder="Search..."><i class="icon-magnifier"></i>
                        </div>
                    </aside>
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Store Categories</h3>
                        <ul class="ps-list--arrow">
                            <li><a href="#">Interior</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li class="menu-item-has-children"><a href="#">Exterior</a>
                                <ul class="sub-menu ps-list--arrow">
                                    <li><a href="#"> Custom Grilles</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Wheels & Tires</a>
                                <ul class="sub-menu ps-list--categories">
                                    <li><a href="#"> Custom Grilles</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Factory Wheels</a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget--vendor widget--open-time">
                        <h3 class="widget-title"><i class="icon-clock3"></i> Store Hours</h3>
                        <ul>
                            <li><strong>Monday:</strong><span>8:00 am - 6:00 pm</span></li>
                            <li><strong>Monday:</strong><span>8:00 am - 6:00 pm</span></li>
                            <li><strong>Monday:</strong><span>8:00 am - 6:00 pm</span></li>
                            <li><strong>Monday:</strong><span>8:00 am - 6:00 pm</span></li>
                            <li><strong>Monday:</strong><span>8:00 am - 6:00 pm</span></li>
                        </ul>
                    </aside>
                </div>
                <div class="ps-section__right">
                    <nav class="ps-store-link">
                        <ul>
                            <li><a href="store-detail.html">Products</a></li>
                            <li class="active"><a href="store-detail-info.html">About</a></li>
                            <li><a href="store-detail.html">Policies</a></li>
                            <li><a href="store-detail.html">Reviews(0)</a></li>
                        </ul>
                    </nav>
                    <div class="ps-document">
                        <p>We connect millions of buyers and sellers around the world, empowering people & creating economic opportunity for all. Within our markets, millions of people around the world connect, both online and offline, to make, sell and buy unique goods. We also offer a wide range of Seller Services and tools that help creative entrepreneurs start, manage and scale their businesses. Our mission is to reimagine commerce in ways that build a more fulfilling and lasting world, and we’re committed to using the power of business to strengthen communities and empower people.</p>
                    </div>
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