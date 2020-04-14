<!-- ========================= 
            cta 1
    =========================  -->
<section id="cta1" class="cta cta-1 border-top pt-40 pb-10">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-4 <?php lang('', 'text-right') ?>">
                <h2 class="cta__title"><?php lang($setting->s_title_11, $setting->s_title_12) ?>
                </h2>
            </div><!-- /.col-lg-3 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
                <form class="news">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control mr-30" name="email" placeholder="<?php lang('Your Email Address', 'ضع بريدك الالكتروني هنا ') ?>">
                        <button class="btn btn__primary btn__hover3"><?php lang('Sign Up!', 'تسجيل') ?></button>
                    </div>
                </form>
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta1 -->



<!-- ========================
Footer
    ========================== -->
<footer id="footer" class="footer footer-1 <?php lang('', 'text-right') ?>">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
                    <div class="footer__widget-content">
                        <img src="<?php echo base_url('assets/esh/') ?>assets/images/logo/logo-dark.png" alt="logo" class="mb-30">
                        <p><?php lang(strip_tags(mb_substr($setting->s_short_about, 0, 200, 'utf-8')), strip_tags(mb_substr($setting->s_ar_short_about, 0, 200, 'utf-8'))) ?></p>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                    <h6 class="footer__widget-title"><?php lang('Who We Are', 'من نحن') ?></h6>
                    <div class="footer__widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#"><?php lang('About Us', 'عنا') ?></a></li>
                                <li><a href="#"><?php lang('News & Events', 'الاخبار والاحداث') ?></a></li>
                                <li><a href="#"><?php lang('Photo Gallery', 'معرض الصور') ?></a></li>
                                <li><a href="#"><?php lang('Video Gallery', 'معرض الفيديو') ?></a></li>
                                <li><a href="#"><?php lang('Contact Us', 'اتصل بنا') ?></a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                    <h6 class="footer__widget-title"><?php lang('What We Do', 'خدماتنا') ?></h6>
                    <div class="footer__widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <?php
                                if ($footer_pages_num > 0) {
                                    foreach ($footer_pages as $fb) {
                                ?>
                                        <li><a href="<?php echo basE_url('page/' . $fb->p_link) ?>"><?php lang($fb->p_title, $fb->p_ar_title); ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-lg-2 -->

                <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                    <h6 class="footer__widget-title"><?php lang('Quick Links', 'روابط سريعه') ?></h6>
                    <div class="footer__widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url('qout') ?>"><?php lang('Request A Quote', 'طلب سعر') ?></a></li>
                                <li><a href="<?php echo base_url('track2') ?>"><?php lang('Track & Trace', 'التتبع') ?></a></li>
                                <li><a href="<?php echo base_url('contact') ?>"><?php lang('Find A Location', 'اين نحن ') ?></a></li>
                                <li><a href="<?php echo base_url('faq') ?>"><?php lang('Help & FAQ', 'الاسئله الشائعه') ?></a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class="container">
        <div class="footer-bottom">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="footer__copyright">
                        <nav>
                            <ul class="list-unstyled footer__copyright-links d-flex flex-wrap">
                                <li><a href="#"> <?php lang('Terms & Conditions', 'البنود') ?></a></li>
                                <li><a href="#"> <?php lang('Privacy Policy ', 'الخصوصيه') ?></a></li>
                                <li><a href="#"> <?php lang('Sitemap', 'خريطة الموقع') ?></a></li>
                            </ul>
                        </nav>
                        <span>&copy; 2020 All Rights Reserved, with Love by</span>
                        <a href="http://www.newvision-it.com">New Vision IT</a>
                    </div><!-- /.Footer-copyright -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
                    <div class="social__icons justify-content-end w-100">
                        <a href="<?php echo $setting->s_fb ?>" style="<?php echo ($setting->s_fb == '') ? 'display:none' : '' ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $setting->s_tw ?>" style="<?php echo ($setting->s_tw == '') ? 'display:none' : '' ?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $setting->s_insta ?>" style="<?php echo ($setting->s_insta == '') ? 'display:none' : '' ?>"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $setting->s_in ?>" style="<?php echo ($setting->s_in == '') ? 'display:none' : '' ?>"><i class="fa fa-linkedin"></i></a>
                    </div><!-- /.social-icons -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.Footer-bottom -->
    </div><!-- /.container -->
</footer><!-- /.Footer -->
<button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

<div class="module__search-container">
    <i class="fa fa-times close-search"></i>
    <form class="module__search-form">
        <input type="text" class="search__input" placeholder="<?php lang('Search Here', 'ابحث هنا') ?>">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
        <div class="search-results"></div>
    </form>
</div><!-- /.module-search-container -->

</div><!-- /.wrapper -->
<div class="track-overlay"></div>
<div class="track-over">
    <form action="<?php echo base_url('home/track') ?>" method="post">
        <textarea class="form-control" name="numbers" placeholder="xxxxxxx,xxxxxxxx,xxxxxxxx,...x100"></textarea>
        <input type="submit" class="btn btn__secondary btn__block" value="<?php lang('Track', 'تتبع') ?>">
    </form>
</div>
<a href="#" class="track-btn"><?php lang('Track', 'تتبع') ?></a>
<script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url('assets/esh/') ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/esh/') ?>assets/js/plugins.js"></script>
<script>
    var base_url = '<?php echo base_url() ?>';
</script>
<script src="https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js"></script>
<script src="<?php echo base_url('assets/esh/') ?>assets/js/main.js"></script>
</body>


</html>