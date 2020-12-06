<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<? use Bitrix\Main\Page\Asset; ?>
<!-- Footer Section Begin -->

 <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="fo-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget fw-links">
                        <h5>Useful Links</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Model</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Join The Newsletter</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="news-form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Instagram</h5>
                        <div class="insta-pic">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/instagram/instagram-1.jpg" alt="">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/instagram/instagram-2.jpg" alt="">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/instagram/instagram-3.jpg" alt="">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/instagram/instagram-4.jpg" alt="">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/instagram/instagram-5.jpg" alt="">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/instagram/instagram-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<? Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/jquery-3.3.1.min.js",false); ?>
<? Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/bootstrap.min.js",false);?>
<? Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js",false);?>
<? Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/mixitup.min.js",false);?>
<? Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/jquery.slicknav.js",false);?>
<? Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/owl.carousel.min.js",false);?>
<? Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/main.js",false);?>
</body>
</html>