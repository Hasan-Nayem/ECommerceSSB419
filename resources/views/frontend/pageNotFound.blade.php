@extends('frontend.layout.inner-template')

@section( 'body-content' )
    
    <div class="ps-page--404">
        <div class="container">
            <div class="ps-section__content"><img src="{{ asset('frontend/img/404.jpg') }}" alt="">
                <h3>ohh! page not found</h3>
                <p>It seems we can't find what you're looking for. Perhaps searching can help or go back to<a href="index.html"> Homepage</a></p>
                <form class="ps-form--widget-search" action="do_action" method="get">
                    <input class="form-control" type="text" placeholder="Search...">
                    <button><i class="icon-magnifier"></i></button>
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

    <footer class="ps-footer">
        <div class="ps-container">
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title">Contact us</h4>
                    <div class="widget_content">
                        <p>Call us 24/7</p>
                        <h3>1800 97 97 69</h3>
                        <p>502 New Design Str, Melbourne, Australia <br><a href="/cdn-cgi/l/email-protection#f2919d9c86939186b29f9380869487808bdc919d"><span class="__cf_email__" data-cfemail="d4b7bbbaa0b5b7a094b9b5a6a0b2a1a6adfab7bb">[email&#160;protected]</span></a></p>
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
                <p><span>We Using Safe Payment For:</span><a href="#"><img src="img/payment-method/1.jpg" alt=""></a><a href="#"><img src="img/payment-method/2.jpg" alt=""></a><a href="#"><img src="img/payment-method/3.jpg" alt=""></a><a href="#"><img src="img/payment-method/4.jpg" alt=""></a><a href="#"><img src="img/payment-method/5.jpg" alt=""></a></p>
            </div>
        </div>
    </footer>


    <div class="ps-filter--sidebar">
        <div class="ps-filter__header">
            <h3>Filter Products</h3><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
        </div>
        <div class="ps-filter__content">
            <aside class="widget widget_shop">
                <h4 class="widget-title">Categories</h4>
                <ul class="ps-list--categories">
                    <li class="menu-item-has-children"><a href="shop-default.html">Clothing &amp; Apparel</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop-default.html">Womens</a>
                            </li>
                            <li><a href="shop-default.html">Mens</a>
                            </li>
                            <li><a href="shop-default.html">Bags</a>
                            </li>
                            <li><a href="shop-default.html">Sunglasses</a>
                            </li>
                            <li><a href="shop-default.html">Accessories</a>
                            </li>
                            <li><a href="shop-default.html">Kid's Fashion</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop-default.html">Garden &amp; Kitchen</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop-default.html">Cookware</a>
                            </li>
                            <li><a href="shop-default.html">Decoration</a>
                            </li>
                            <li><a href="shop-default.html">Furniture</a>
                            </li>
                            <li><a href="shop-default.html">Garden Tools</a>
                            </li>
                            <li><a href="shop-default.html">Home Improvement</a>
                            </li>
                            <li><a href="shop-default.html">Powers And Hand Tools</a>
                            </li>
                            <li><a href="shop-default.html">Utensil &amp; Gadget</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop-default.html">Consumer Electrics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children"><a href="shop-default.html">Air Conditioners</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Accessories</a>
                                    </li>
                                    <li><a href="shop-default.html">Type Hanging Cell</a>
                                    </li>
                                    <li><a href="shop-default.html">Type Hanging Wall</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Audios &amp; Theaters</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Headphone</a>
                                    </li>
                                    <li><a href="shop-default.html">Home Theater System</a>
                                    </li>
                                    <li><a href="shop-default.html">Speakers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Car Electronics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Audio &amp; Video</a>
                                    </li>
                                    <li><a href="shop-default.html">Car Security</a>
                                    </li>
                                    <li><a href="shop-default.html">Radar Detector</a>
                                    </li>
                                    <li><a href="shop-default.html">Vehicle GPS</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Office Electronics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Printers</a>
                                    </li>
                                    <li><a href="shop-default.html">Projectors</a>
                                    </li>
                                    <li><a href="shop-default.html">Scanners</a>
                                    </li>
                                    <li><a href="shop-default.html">Store &amp; Business</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">TV Televisions</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">4K Ultra HD TVs</a>
                                    </li>
                                    <li><a href="shop-default.html">LED TVs</a>
                                    </li>
                                    <li><a href="shop-default.html">OLED TVs</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Washing Machines</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Type Drying Clothes</a>
                                    </li>
                                    <li><a href="shop-default.html">Type Horizontal</a>
                                    </li>
                                    <li><a href="shop-default.html">Type Vertical</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-default.html">Refrigerators</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop-default.html">Health &amp; Beauty</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop-default.html">Equipments</a>
                            </li>
                            <li><a href="shop-default.html">Hair Care</a>
                            </li>
                            <li><a href="shop-default.html">Perfumer</a>
                            </li>
                            <li><a href="shop-default.html">Skin Care</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop-default.html">Computers &amp; Technologies</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop-default.html">Desktop PC</a>
                            </li>
                            <li><a href="shop-default.html">Laptop</a>
                            </li>
                            <li><a href="shop-default.html">Smartphones</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop-default.html">Jewelry &amp; Watches</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop-default.html">Gemstone Jewelry</a>
                            </li>
                            <li><a href="shop-default.html">Men's Watches</a>
                            </li>
                            <li><a href="shop-default.html">Women's Watches</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop-default.html">Phones &amp; Accessories</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop-default.html">Iphone 8</a>
                            </li>
                            <li><a href="shop-default.html">Iphone X</a>
                            </li>
                            <li><a href="shop-default.html">Sam Sung Note 8</a>
                            </li>
                            <li><a href="shop-default.html">Sam Sung S8</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop-default.html">Sport &amp; Outdoor</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop-default.html">Freezer Burn</a>
                            </li>
                            <li><a href="shop-default.html">Fridge Cooler</a>
                            </li>
                            <li><a href="shop-default.html">Wine Cabinets</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="shop-default.html">Babies &amp; Moms</a>
                    </li>
                    <li><a href="shop-default.html">Books &amp; Office</a>
                    </li>
                    <li><a href="shop-default.html">Cars &amp; Motocycles</a>
                    </li>
                </ul>
            </aside>
            <aside class="widget widget_shop">
                <h4 class="widget-title">BY BRANDS</h4>
                <form class="ps-form--widget-search" action="do_action" method="get">
                    <input class="form-control" type="text" placeholder="">
                    <button><i class="icon-magnifier"></i></button>
                </form>
                <figure class="ps-custom-scrollbar" data-height="250">
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-1" name="brand" />
                        <label for="m-brand-1">Adidas (3)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-2" name="brand" />
                        <label for="m-brand-2">Amcrest (1)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-3" name="brand" />
                        <label for="m-brand-3">Apple (2)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-4" name="brand" />
                        <label for="m-brand-4">Asus (19)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-5" name="brand" />
                        <label for="m-brand-5">Baxtex (20)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-6" name="brand" />
                        <label for="m-brand-6">Adidas (11)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-7" name="brand" />
                        <label for="m-brand-7">Casio (9)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-8" name="brand" />
                        <label for="m-brand-8">Electrolux (0)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-9" name="brand" />
                        <label for="m-brand-9">Gallaxy (0)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="m-brand-10" name="brand" />
                        <label for="m-brand-10">Samsung (0)</label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="brand-11" name="brand" />
                        <label for="brand-11">Sony (0)</label>
                    </div>
                </figure>
                <figure>
                    <h4 class="widget-title">By Price</h4>
                    <div class="ps-slider" data-default-min="13" data-default-max="1300" data-max="1311" data-step="100" data-unit="$"></div>
                    <p class="ps-slider__meta">Price:<span class="ps-slider__value ps-slider__min"></span>-<span class="ps-slider__value ps-slider__max"></span></p>
                </figure>
                <figure>
                    <h4 class="widget-title">By Price</h4>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="review-1" name="review">
                        <label for="review-1"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i></span><small>(13)</small></label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="review-2" name="review">
                        <label for="review-2"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i></span><small>(13)</small></label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="review-3" name="review">
                        <label for="review-3"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="review-4" name="review">
                        <label for="review-4"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="review-5" name="review">
                        <label for="review-5"><span><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(1)</small></label>
                    </div>
                </figure>
                <figure>
                    <h4 class="widget-title">By Color</h4>
                    <div class="ps-checkbox ps-checkbox--color color-1 ps-checkbox--inline">
                        <input class="form-control" type="checkbox" id="color-1" name="size" />
                        <label for="color-1"></label>
                    </div>
                    <div class="ps-checkbox ps-checkbox--color color-2 ps-checkbox--inline">
                        <input class="form-control" type="checkbox" id="color-2" name="size" />
                        <label for="color-2"></label>
                    </div>
                    <div class="ps-checkbox ps-checkbox--color color-3 ps-checkbox--inline">
                        <input class="form-control" type="checkbox" id="color-3" name="size" />
                        <label for="color-3"></label>
                    </div>
                    <div class="ps-checkbox ps-checkbox--color color-4 ps-checkbox--inline">
                        <input class="form-control" type="checkbox" id="color-4" name="size" />
                        <label for="color-4"></label>
                    </div>
                    <div class="ps-checkbox ps-checkbox--color color-5 ps-checkbox--inline">
                        <input class="form-control" type="checkbox" id="color-5" name="size" />
                        <label for="color-5"></label>
                    </div>
                </figure>
                <figure class="sizes">
                    <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
                </figure>
            </aside>
        </div>
    </div>

    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>

    <!--include ../../data/menu/menu-product-categories-->
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                <div class="menu__content">
                    <ul class="menu--mobile">
                        <li><a href="#.html">Hot Promotions</a>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Electronic<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="#.html">Home Audio &amp; Theathers</a>
                                        </li>
                                        <li><a href="#.html">TV &amp; Videos</a>
                                        </li>
                                        <li><a href="#.html">Camera, Photos &amp; Videos</a>
                                        </li>
                                        <li><a href="#.html">Cellphones &amp; Accessories</a>
                                        </li>
                                        <li><a href="#.html">Headphones</a>
                                        </li>
                                        <li><a href="#.html">Videosgames</a>
                                        </li>
                                        <li><a href="#.html">Wireless Speakers</a>
                                        </li>
                                        <li><a href="#.html">Office Electronic</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="#.html">Digital Cables</a>
                                        </li>
                                        <li><a href="#.html">Audio &amp; Video Cables</a>
                                        </li>
                                        <li><a href="#.html">Batteries</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#.html">Clothing &amp; Apparel</a>
                        </li>
                        <li><a href="#.html">Home, Garden &amp; Kitchen</a>
                        </li>
                        <li><a href="#.html">Health &amp; Beauty</a>
                        </li>
                        <li><a href="#.html">Yewelry &amp; Watches</a>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="#.html">Computer &amp; Tablets</a>
                                        </li>
                                        <li><a href="#.html">Laptop</a>
                                        </li>
                                        <li><a href="#.html">Monitors</a>
                                        </li>
                                        <li><a href="#.html">Networking</a>
                                        </li>
                                        <li><a href="#.html">Drive &amp; Storages</a>
                                        </li>
                                        <li><a href="#.html">Computer Components</a>
                                        </li>
                                        <li><a href="#.html">Security &amp; Protection</a>
                                        </li>
                                        <li><a href="#.html">Gaming Laptop</a>
                                        </li>
                                        <li><a href="#.html">Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#.html">Babies &amp; Moms</a>
                        </li>
                        <li><a href="#.html">Sport &amp; Outdoor</a>
                        </li>
                        <li><a href="#.html">Phones &amp; Accessories</a>
                        </li>
                        <li><a href="#.html">Books &amp; Office</a>
                        </li>
                        <li><a href="#.html">Cars &amp; Motocycles</a>
                        </li>
                        <li><a href="#.html">Home Improments</a>
                        </li>
                        <li><a href="#.html">Vouchers &amp; Services</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--+createMenu(product_categories, 'menu--mobile')-->
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="index">Home</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Marketplace Full Width</a>
                        </li>
                        <li><a href="home-autopart.html">Home Auto Parts</a>
                        </li>
                        <li><a href="home-technology.html">Home Technology</a>
                        </li>
                        <li><a href="home-organic.html">Home Organic</a>
                        </li>
                        <li><a href="home-marketplace.html">Home Marketplace V1</a>
                        </li>
                        <li><a href="home-marketplace-2.html">Home Marketplace V2</a>
                        </li>
                        <li><a href="home-marketplace-3.html">Home Marketplace V3</a>
                        </li>
                        <li><a href="home-marketplace-4.html">Home Marketplace V4</a>
                        </li>
                        <li><a href="home-electronic.html">Home Electronic</a>
                        </li>
                        <li><a href="home-furniture.html">Home Furniture</a>
                        </li>
                        <li><a href="home-kid.html">Home Kids</a>
                        </li>
                        <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                        </li>
                        <li><a href="home-medical.html">Home Medical</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default">Shop</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shop-default.html">Shop Default</a>
                                </li>
                                <li><a href="shop-default.html">Shop Fullwidth</a>
                                </li>
                                <li><a href="shop-categories.html">Shop Categories</a>
                                </li>
                                <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                </li>
                                <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                </li>
                                <li><a href="shop-carousel.html">Shop Carousel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Default</a>
                                </li>
                                <li><a href="product-extend.html">Extended</a>
                                </li>
                                <li><a href="product-full-content.html">Full Content</a>
                                </li>
                                <li><a href="product-box.html">Boxed</a>
                                </li>
                                <li><a href="product-sidebar.html">Sidebar</a>
                                </li>
                                <li><a href="product-default.html">Fullwidth</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Types<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Simple</a>
                                </li>
                                <li><a href="product-default.html">Color Swatches</a>
                                </li>
                                <li><a href="product-image-swatches.html">Images Swatches</a>
                                </li>
                                <li><a href="product-countdown.html">Countdown</a>
                                </li>
                                <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                </li>
                                <li><a href="product-instagram.html">Instagram</a>
                                </li>
                                <li><a href="product-affiliate.html">Affiliate</a>
                                </li>
                                <li><a href="product-on-sale.html">On sale</a>
                                </li>
                                <li><a href="product-video.html">Video Featured</a>
                                </li>
                                <li><a href="product-groupped.html">Grouped</a>
                                </li>
                                <li><a href="product-out-stock.html">Out Of Stock</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Woo Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li><a href="checkout.html">Checkout</a>
                                </li>
                                <li><a href="whishlist.html">Whishlist</a>
                                </li>
                                <li><a href="compare.html">Compare</a>
                                </li>
                                <li><a href="order-tracking.html">Order Tracking</a>
                                </li>
                                <li><a href="my-account.html">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Basic Page<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="about-us.html">About Us</a>
                                </li>
                                <li><a href="contact-us.html">Contact</a>
                                </li>
                                <li><a href="faqs.html">Faqs</a>
                                </li>
                                <li><a href="comming-soon.html">Comming Soon</a>
                                </li>
                                <li><a href="404-page.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="become-a-vendor.html">Become a Vendor</a>
                                </li>
                                <li><a href="vendor-store.html">Vendor Store</a>
                                </li>
                                <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                </li>
                                <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Blog Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-grid.html">Grid</a>
                                </li>
                                <li><a href="blog-list.html">Listing</a>
                                </li>
                                <li><a href="blog-small-thumb.html">Small Thumb</a>
                                </li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Single Blog<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-detail.html">Single 1</a>
                                </li>
                                <li><a href="blog-detail-2.html">Single 2</a>
                                </li>
                                <li><a href="blog-detail-3.html">Single 3</a>
                                </li>
                                <li><a href="blog-detail-4.html">Single 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="false">
                            <div class="ps-product__images" data-arrow="true">
                                <div class="item"><img src="img/products/detail/fullwidth/1.jpg" alt=""></div>
                                <div class="item"><img src="img/products/detail/fullwidth/2.jpg" alt=""></div>
                                <div class="item"><img src="img/products/detail/fullwidth/3.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                            <div class="ps-product__meta">
                                <p>Brand:<a href="shop-default.html">Sony</a></p>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span>
                                </div>
                            </div>
                            <h4 class="ps-product__price">$36.78 – $56.99</h4>
                            <div class="ps-product__desc">
                                <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                                <ul class="ps-list--dot">
                                    <li> Unrestrained and portable active stereo speaker</li>
                                    <li> Free from the confines of wires and chords</li>
                                    <li> 20 hours of portable capabilities</li>
                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                </ul>
                            </div>
                            <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection   