@extends('frontend.layout.inner-template')
@section( 'body-content' )

<div class="ps-page--simple">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop-default.html">Shop</a></li>
                <li>Whishlist</li>
            </ul>
        </div>
    </div>
    <div class="ps-section--shopping ps-shopping-cart">
        <div class="container">
            <div class="ps-section__header">
                <h1>Shopping Cart</h1>
            </div>
            <div class="ps-section__content">
                <div class="table-responsive">
                    <table class="table ps-table--shopping-cart ps-table--responsive">
                        <thead>
                            <tr>
                                <th>Product name</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Product">
                                    <div class="ps-product--cart">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('frontend/img/products/shop/1.jpg') }}" alt="" /></a></div>
                                        <div class="ps-product__content"><a href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                            <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price" data-label="Price">$1310.00</td>
                                <td data-label="Quantity">
                                    <div class="form-group--number">
                                        <button class="up">+</button>
                                        <button class="down">-</button>
                                        <input class="form-control" type="text" placeholder="1" value="1">
                                    </div>
                                </td>
                                <td data-label="Total">$1310.00</td>
                                <td data-label="Actions"><a href="#"><i class="icon-cross"></i></a></td>
                            </tr>
                            <tr>
                                <td data-label="Product">
                                    <div class="ps-product--cart">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('frontend/img/products/shop/1.jpg') }}" alt="" /></a></div>
                                        <div class="ps-product__content"><a href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                            <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price" data-label="Price">$1150.00</td>
                                <td data-label="Quantity">
                                    <div class="form-group--number">
                                        <button class="up">+</button>
                                        <button class="down">-</button>
                                        <input class="form-control" type="text" placeholder="1" value="1">
                                    </div>
                                </td>
                                <td data-label="Total">$1150.00</td>
                                <td data-label="Actions"><a href="#"><i class="icon-cross"></i></a></td>
                            </tr>
                            <tr>
                                <td data-label="Product">
                                    <div class="ps-product--cart">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('frontend/img/products/shop/2.jpg') }}" alt="" /></a></div>
                                        <div class="ps-product__content"><a href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                            <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price" data-label="Price">$42.99 - $60.00</td>
                                <td data-label="Quantity">
                                    <div class="form-group--number">
                                        <button class="up">+</button>
                                        <button class="down">-</button>
                                        <input class="form-control" type="text" placeholder="1" value="1">
                                    </div>
                                </td>
                                <td data-label="Total">$42.99 - $60.00</td>
                                <td data-label="Actions"><a href="#"><i class="icon-cross"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ps-section__cart-actions"><a class="ps-btn" href="shop-default.html"><i class="icon-arrow-left"></i> Back to Shop</a><a class="ps-btn ps-btn--outline" href="shop-default.html"><i class="icon-sync"></i> Update cart</a></div>
            </div>
            <div class="ps-section__footer">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>Coupon Discount</figcaption>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <button class="ps-btn ps-btn--outline">Apply</button>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>Calculate shipping</figcaption>
                            <div class="form-group">
                                <select class="ps-select">
                                    <option value="1">America</option>
                                    <option value="2">Italia</option>
                                    <option value="3">Vietnam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Town/City">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Postcode/Zip">
                            </div>
                            <div class="form-group">
                                <button class="ps-btn ps-btn--outline">Update</button>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--shopping-total">
                            <div class="ps-block__header">
                                <p>Subtotal <span> $683.49</span></p>
                            </div>
                            <div class="ps-block__content">
                                <ul class="ps-block__product">
                                    <li><span class="ps-block__shop">YOUNG SHOP Shipping</span><span class="ps-block__shipping">Free Shipping</span><span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="#"> MVMTH Classical Leather Watch In Black ×1</a></span></li>
                                    <li><span class="ps-block__shop">ROBERT’S STORE Shipping</span><span class="ps-block__shipping">Free Shipping</span><span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="#">Apple Macbook Retina Display 12” ×1</a></span></li>
                                </ul>
                                <h3>Total <span>$683.49</span></h3>
                            </div>
                        </div><a class="ps-btn ps-btn--fullwidth" href="checkout.html">Proceed to checkout</a>
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
<footer class="ps-footer">
    <div class="ps-container">
        <div class="ps-footer__widgets">
            <aside class="widget widget_footer widget_contact-us">
                <h4 class="widget-title">Contact us</h4>
                <div class="widget_content">
                    <p>Call us 24/7</p>
                    <h3>1800 97 97 69</h3>
                    <p>502 New Design Str, Melbourne, Australia <br><a href="/cdn-cgi/l/email-protection#4d2e2223392c2e390d202c3f392b383f34632e22"><span class="__cf_email__" data-cfemail="51323e3f25303225113c302325372423287f323e">[email&#160;protected]</span></a></p>
                    <ul class="ps-list--social">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </aside>
            <aside class="widget widget_footer">
                <h4 class="widget-title">Quick links</h4>
                <ul class="ps-list--link">
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Term & Condition</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Return</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                </ul>
            </aside>
            <aside class="widget widget_footer">
                <h4 class="widget-title">Company</h4>
                <ul class="ps-list--link">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="#">Affilate</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </aside>
            <aside class="widget widget_footer">
                <h4 class="widget-title">Bussiness</h4>
                <ul class="ps-list--link">
                    <li><a href="#">Our Press</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="my-account.html">My account</a></li>
                    <li><a href="shop-default.html">Shop</a></li>
                </ul>
            </aside>
        </div>
        <div class="ps-footer__links">
            <p><strong>Consumer Electric:</strong><a href="#">Air Conditioners</a><a href="#">Audios &amp; Theaters</a><a href="#">Car Electronics</a><a href="#">Office Electronics</a><a href="#">TV Televisions</a><a href="#">Washing Machines</a>
            </p>
            <p><strong>Clothing &amp; Apparel:</strong><a href="#">Printers</a><a href="#">Projectors</a><a href="#">Scanners</a><a href="#">Store &amp; Business</a><a href="#">4K Ultra HD TVs</a><a href="#">LED TVs</a><a href="#">OLED TVs</a>
            </p>
            <p><strong>Home, Garden &amp; Kitchen:</strong><a href="#">Cookware</a><a href="#">Decoration</a><a href="#">Furniture</a><a href="#">Garden Tools</a><a href="#">Garden Equipments</a><a href="#">Powers And Hand Tools</a><a href="#">Utensil &amp; Gadget</a>
            </p>
            <p><strong>Health &amp; Beauty:</strong><a href="#">Hair Care</a><a href="#">Decoration</a><a href="#">Hair Care</a><a href="#">Makeup</a><a href="#">Body Shower</a><a href="#">Skin Care</a><a href="#">Cologine</a><a href="#">Perfume</a>
            </p>
            <p><strong>Jewelry &amp; Watches:</strong><a href="#">Necklace</a><a href="#">Pendant</a><a href="#">Diamond Ring</a><a href="#">Sliver Earing</a><a href="#">Leather Watcher</a><a href="#">Gucci</a>
            </p>
            <p><strong>Computer &amp; Technologies:</strong><a href="#">Desktop PC</a><a href="#">Laptop</a><a href="#">Smartphones</a><a href="#">Tablet</a><a href="#">Game Controller</a><a href="#">Audio &amp; Video</a><a href="#">Wireless Speaker</a><a href="#">Done</a>
            </p>
        </div>
        <div class="ps-footer__copyright">
            <p>© 2021 Martfury. All Rights Reserved</p>
            <p><span>We Using Safe Payment For:</span><a href="#"><img src="{{ asset('frontend/img/payment-method/1.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/2.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/3.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/4.jpg') }}" alt=""></a><a href="#"><img src="{{ asset('frontend/img/payment-method/5.jpg') }}" alt=""></a></p>
        </div>
    </div>
</footer>

@endsection