@extends('frontend.layout.inner-template')
@section( 'body-content' )
    <div class="ps-page--single">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Pages</a></li>
                    <li><a href="vendor-store.html">Vendor Pages</a></li>
                    <li>Vendor Dashboard Free</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ps-vendor-dashboard">
        <div class="container">
            <div class="ps-section__header">
                <h3>Vendor Dasboard Free</h3>
                <p>Designed base on WC Vendor Plugin. Martfury also fully comptatiable with other popular plugins as Dokan, YITH, etc .Can help you turns your site into multi-vendor eCommerce site.</p>
            </div>
            <div class="ps-section__content">
                <ul class="ps-section__links">
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Order</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="#">View Store</a></li>
                </ul>
                <div class="ps-block--vendor-dashboard">
                    <div class="ps-block__header">
                        <h3>Sale Report</h3>
                    </div>
                    <div class="ps-block__content">
                        <form class="ps-form--vendor-datetimepicker" action="index.html" method="get">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="time-from">From</span></div>
                                        <input class="form-control" aria-label="Username" aria-describedby="time-from">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="time-form">To</span></div>
                                        <input class="form-control" aria-label="Username" aria-describedby="time-to">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                                    <button class="ps-btn"><i class="icon-sync2"></i> Update</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table ps-table ps-table--vendor">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Sold</th>
                                        <th>Commission</th>
                                        <th>Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nov 4, 2019</td>
                                        <td><a href="#">Marshall Kilburn Portable Wireless Bluetooth Spe...</a></td>
                                        <td>$235.35</td>
                                        <td>25</td>
                                        <td>$2940.00</td>
                                        <td>24.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Nov 4, 2019</td>
                                        <td><a href="#">Unero Military Classical Backpack</a></td>
                                        <td>$42.35</td>
                                        <td>10</td>
                                        <td>$211.00</td>
                                        <td>17.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Nov 4, 2019</td>
                                        <td><a href="#">Sleeve Linen Blend Caro Pana T-Shirt</a></td>
                                        <td>$23.35</td>
                                        <td>80</td>
                                        <td>$935.00</td>
                                        <td>62.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Nov 30, 2019</td>
                                        <td><a href="#">Harman Kardon Onyx Studio 2.0</a></td>
                                        <td>$299.35</td>
                                        <td>14</td>
                                        <td>$2095.00</td>
                                        <td>62.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Nov 30, 2019</td>
                                        <td><a href="#">Korea Long Sofa Fabric In Blu Navy Color</a></td>
                                        <td>$299.35</td>
                                        <td>5</td>
                                        <td>$6095.00</td>
                                        <td>62.5%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>Total</strong></td>
                                        <td><strong>124 Sale</strong></td>
                                        <td colspan="2"><strong>$12.104.725</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="ps-block--vendor-dashboard">
                    <div class="ps-block__header">
                        <h3>Recent Orders</h3>
                    </div>
                    <div class="ps-block__content">
                        <div class="table-responsive">
                            <table class="table ps-table ps-table--vendor">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>Order ID</th>
                                        <th>Shipping</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Information</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nov 4, 2019</td>
                                        <td><a href="#">MS46891357</a></td>
                                        <td>$00.00</td>
                                        <td>$295.47</td>
                                        <td><a href="#">Open</a></td>
                                        <td><a href="#">View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2, 2017</td>
                                        <td><a href="#">AP47305441</a></td>
                                        <td>$00.00</td>
                                        <td>$25.47</td>
                                        <td>Close</td>
                                        <td><a href="#">View Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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