@extends('frontend.layout.inner-template')
@section( 'body-content' )
    <div class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </div>
        <div class="ps-my-account">
            <div class="container">
                <form class="ps-form--account ps-tab-root" action="link.html" method="get">
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#sign-in">Login</a></li>
                        <li><a href="#register">Register</a></li>
                    </ul>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="sign-in">
                            <div class="ps-form__content">
                                <h5>Log In Your Account</h5>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Username or email address">
                                </div>
                                <div class="form-group form-forgot">
                                    <input class="form-control" type="text" placeholder="Password"><a href="">Forgot?</a>
                                </div>
                                <div class="form-group">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="remember-me" name="remember-me" />
                                        <label for="remember-me">Rememeber me</label>
                                    </div>
                                </div>
                                <div class="form-group submtit">
                                    <button class="ps-btn ps-btn--fullwidth">Login</button>
                                </div>
                            </div>
                            <div class="ps-form__footer">
                                <p>Connect with:</p>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ps-tab" id="register">
                            <div class="ps-form__content">
                                <h5>Register An Account</h5>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Username or email address">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Password">
                                </div>
                                <div class="form-group submtit">
                                    <button class="ps-btn ps-btn--fullwidth">Login</button>
                                </div>
                            </div>
                            <div class="ps-form__footer">
                                <p>Connect with:</p>
                                <ul class="ps-list--social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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