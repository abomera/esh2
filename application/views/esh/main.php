<!-- ============================
        Slider
    ============================== -->
<section id="slider1" class="slider slider-1" dir="ltr">
  <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false" data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">



    <?php
    if ($slider_num > 0) {
      foreach ($slider as $slide) {
    ?>
        <div class="slide-item align-v-h bg-overlay <?php lang('', 'text-right') ?>" <?php lang('', 'dir="rtl"') ?>>
          <div class="bg-img"><img src="<?php echo base_url($slide->s_en_img) ?>" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slide__content">
                  <h2 class="slide__title"><?php lang($slide->s_title, $slide->s_ar_title) ?></h2>
                  <p class="slide__desc"><?php lang($slide->s_content, $slide->s_ar_content) ?></p>
                  <a href="<?php echo $slide->s_link ?>" class="btn btn__white <?php lang('mr', 'ml') ?>-40"><?php lang('Our Services', 'عرض الخدمه'); ?></a>
                  <a class="btn btn__video popup-video" href="<?php echo $slide->s_video_link ?>">
                    <div class="video__player">
                      <span class="video__player-animation"></span>
                      <i class="fa fa-play"></i>
                    </div><?php lang('Our Video!', 'عرض الفيديو'); ?>
                  </a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
    <?php
      }
    }
    ?>

  </div><!-- /.carousel -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12  d-none d-lg-block">
        <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
          <?php
          if ($slider_num > 0) {
            foreach ($slider as $slide) {
          ?>
              <button class="owl-thumb-item">
                <img src="<?php echo base_url($slide->s_tab_icon) ?>" style="width:70px">
                <span> <?php lang($slide->s_tab_title, $slide->s_ar_tab_title) ?> </span>
              </button>

          <?php
            }
          }
          ?>

        </div><!-- /.owl-thumbs -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.slider -->

<!-- ========================
      About 4
    =========================== -->
<section id="about4" class="about about-2 about-4 pb-40 <?php lang('', 'text-right') ?>">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-7">
        <div class="row heading heading-2">
          <div class="col-sm-12 col-md-12 col-sm-12">
          </div><!-- /.col-lg-12 -->

          <div class="col-sm-12 col-md-12 col-lg-12">
            <?php lang($setting->s_who, $setting->s_ar_who) ?>
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.col-lg-7 -->
      <div class="col-sm-12 col-md-9 col-lg-5">
        <div class="about__img mb-60">
          <img src="<?php echo base_url('assets/esh/') ?>assets/images/about/2.jpg" alt="about img" class="img-fluid">
        </div><!-- /.about-img -->
      </div><!-- /.col-lg-5 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.About 4 -->

<!-- =========================
       video 1
      =========================== -->
<section id="video1" class="video video-1 bg-overlay bg-parallax counters-white">
  <div class="bg-img"><img src="<?php echo base_url('assets/esh/') ?>assets/images/backgrounds/3.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="video__btn mb-45">
          <a class="popup-video" href="<?php echo $setting->s_video_link ?>">
            <span class="video__player-animation"></span>
            <div class="video__player">
              <i class="fa fa-play"></i>
            </div>
          </a>
        </div><!-- /.video -->
      </div><!-- /.col-lg-12 -->
      <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 <?php lang('', 'text-right') ?>">
        <div class="heading">
          <span class="heading__subtitle color-white"> <?php lang($setting->s_title_1, $setting->s_title_2) ?></span>
          <h3 class="heading__title color-white"><?php lang($setting->s_title_3, $setting->s_title_4) ?></h3>
        </div><!-- /.heading -->
      </div><!-- /.col-xl-5 -->
      <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="counter-item">
              <div class="counter__icon"><i class="icon-worldwide"></i></div>
              <h4><span class="counter"><?php echo $setting->s_clients ?></span></h4>
              <p class="counter__desc"> <?php lang($setting->s_title_5, $setting->s_title_6) ?></p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="counter-item">
              <div class="counter__icon"><i class="icon-trolley"></i></div>
              <h4><span class="counter"><?php echo $setting->s_dlev ?></span></h4>
              <p class="counter__desc"> <?php lang($setting->s_title_7, $setting->s_title_8) ?></p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="counter-item">
              <div class="counter__icon"><i class="icon-truck"></i></div>
              <h4><span class="counter"><?php echo $setting->s_km ?></span></h4>
              <p class="counter__desc"> <?php lang($setting->s_title_9, $setting->s_title_10) ?></p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.col-xl-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.video 1 -->

<!-- ========================
        Request Quote Tabs
    =========================== -->
<section id="requestQuoteTabs" class="request-quote request-quote-tabs pt-0 bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="request__form">
          <nav class="nav nav-tabs">
            <a class="nav__link active" data-toggle="tab" href="#quote">
              <div class="request__form-header d-flex align-items-center">
                <i class="icon-box"></i>
                <h4 class="request__form-title"><?php lang('Request A Quote', 'اطلب سعر') ?></h4>
              </div><!-- /.request-form-header -->
            </a>
            <a class="nav__link" data-toggle="tab" href="#track">
              <div class="request__form-header d-flex align-items-center">
                <i class="icon-worldwide"></i>
                <h4 class="request__form-title"><?php lang('Track & Trace', ' تتبع الشحنات ') ?></h4>
              </div><!-- /.request-form-header -->
            </a>
          </nav>
          <div class="tab-content">
            <div class="tab-pane fade show active <?php lang('', 'text-right') ?>" id="quote">
              <div class="request__form-body">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="">
                      <form class="requestq row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <h6><?php lang('Personal Data', 'المعلومات الشخصيه') ?></h6>
                      </div><!-- /.col-lg-12 -->
                      <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="<?php lang('Name', 'الاسم') ?>">
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="<?php lang('Email', 'البريد الالكتروني') ?>">
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                          <input type="text" name="phone" class="form-control" placeholder=" <?php lang('Phone', 'الهاتف') ?>">
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <h6 class="mt-5"> <?php lang('Shipment Data', 'معلومات الشحن') ?></h6>
                      </div><!-- /.col-lg-12 -->
                      
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="text" name="city_from" class="form-control" placeholder=" <?php lang('City of Departure', 'مدينة الشحن') ?>">
                        </div>
                      </div><!-- /.col-lg-6 -->
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="text" name="city_to" class="form-control" placeholder=" <?php lang('Delivery City', 'مدينة التوصيل') ?>">
                        </div>
                      </div><!-- /.col-lg-6 -->
                
                      <div class="col-sm-6 col-md-4 col-lg-4 d-flex">
                        <div class="form-group mr-20">
                          <input type="text" name="weight" class="form-control" placeholder="<?php lang('Weight', 'الوزن') ?>">
                        </div>
                        <div class="form-group">
                          <input type="text" name="height" class="form-control" placeholder="<?php lang('Height', 'الارتفاع') ?>">
                        </div>
                      </div><!-- /.col-lg-3 -->
                      <div class="col-sm-6 col-md-4 col-lg-4  d-flex">
                        <div class="form-group mr-20">
                          <input type="text" name="width" class="form-control" placeholder="<?php lang('Width', 'العرض') ?>">
                        </div>
                        <div class="form-group">
                          <input type="text" name="length" class="form-control" placeholder="<?php lang('Length', 'الطول') ?>">
                        </div>
                      </div><!-- /.col-lg-4 -->
                     
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn__secondary btn__block"><?php lang('Request A Quote ', ' اطلب سعر') ?></button>
                      </div><!-- /.col-lg-12 -->
                      </form>
                    </div>
                  </div><!-- /.col-lg-8 -->
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="widget widget-help bg-theme">
                      <div class="widget__content">
                        <h5><?php lang('How Can', 'كيف نستطيع') ?> <br> <?php lang('We Help You!', 'مساعدتك') ?></h5>
                        <p><?php lang('E.C.S handles all business making you focus on running your business successfully by having the:
                          Right Tools Right Resources Right pricing We strongly believe your success is our success.', 'تتولى شركة E.C.S التعامل مع جميع الأعمال مما يجعلك تركز على إدارة أعمالك بنجاح من خلال: الأدوات المناسبة الموارد الصحيحة التسعير الصحيح نحن نعتقد بقوة أن نجاحك هو نجاحنا.') ?></p>
                        <a href="<?php echo base_url('contact') ?>" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i><?php lang('Contact Us', 'اتصل بنا ') ?></a>
                      </div><!-- /.widget-download -->
                    </div><!-- /.widget-help -->
                  </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
              </div><!-- /.request-form-body -->
            </div><!-- /.tab -->
            <div class="tab-pane fade text-right" id="track">
              <div class="request__form-body">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="row">


                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <form action="<?php echo base_url('home/track')?>" method="post">
                          <div class="form-group">
                          <label><?php lang('Tracking Number','رقم التتبع')?></label>
                          <div class="form-group">
                            <textarea class="form-control" name="numbers" placeholder="xxxxxxxx,xxxxxxx,xxxxxxxx,...x100"></textarea>
                          </div>
                        </div>
                      </div><!-- /.col-lg-12 -->


                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn__secondary btn__block" type="submit"><?php lang('Track & Trace','تتبع')?></button>
                        </form>

                      </div><!-- /.col-lg-12 -->
                    </div>
                  </div><!-- /.col-lg-8 -->
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="widget widget-help bg-theme">
                      <div class="widget__content">
                        <h5><?php lang('How Can', 'كيف نستطيع') ?> <br> <?php lang('We Help You!', 'مساعدتك') ?></h5>
                        <p><?php lang('E.C.S handles all business making you focus on running your business successfully by having the:
                          Right Tools Right Resources Right pricing We strongly believe your success is our success.', 'تتولى شركة E.C.S التعامل مع جميع الأعمال مما يجعلك تركز على إدارة أعمالك بنجاح من خلال: الأدوات المناسبة الموارد الصحيحة التسعير الصحيح نحن نعتقد بقوة أن نجاحك هو نجاحنا.') ?></p>
                        <a href="<?php echo base_url('contact') ?>" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i><?php lang('Contact Us', 'اتصل بنا ') ?></a>
                      </div><!-- /.widget-download -->
                    </div><!-- /.widget-help -->
                  </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
              </div><!-- /.request-form-body -->
            </div><!-- /.tab -->
          </div><!-- /.tab-content -->
        </div><!-- /.request-form -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Request Quote Tabs -->

<!-- ========================
        Services
    =========================== -->
<section id="services" class="services pt-0 bg-gray">
  <div class="container">
    <div class="row heading mb-40 <?php lang('','text-right')?>">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <span class="heading__subtitle"><?php lang('esh7enly courier Service','خدمة البريد السريع لدى اشحنلي')?></span>
      </div><!-- /.col-lg-12 -->
      <div class="col-sm-12 col-md-6 col-lg-8">
        <h2 class="heading__title"><?php lang('Our Services','خدماتنا')?></h2>
        <p><?php lang('E.C.S handles all business making you focus on running your business successfully by having the:
          Right Tools Right Resources Right pricing We strongly believe your success is our success.','تتولى شركة E.C.S التعامل مع جميع الأعمال مما يجعلك تركز على إدارة أعمالك بنجاح من خلال: الأدوات المناسبة الموارد الصحيحة التسعير الصحيح نحن نعتقد بقوة أن نجاحك هو نجاحنا.')?></p>
      </div><!-- /.col-lg-5 -->

    </div><!-- /.row -->
    <div class="row">

      <?php
        if($service_num > 0){
          foreach($service as $ser){
            ?>
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="<?php echo base_url($ser->s_cover) ?>" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__overlay">
                  <div class="service__icon"><img src="<?php echo base_url($ser->s_icon)?>"></div>
                  <h4 class="service__title"><?php lang($ser->s_title, $ser->s_ar_title)?></h4>
                  <p class="service__desc"><?php lang(strip_tags(mb_substr($ser->s_over,0,100,'utf-8')), strip_tags(mb_substr($ser->s_ar_over, 0, 100, 'utf-8')))?></p>
                  <a href="<?php echo base_url('service/'.$ser->s_id)?>" class="btn btn__white btn__link btn__underlined">Details</a>
                </div>
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <?php
          }
        }
      ?>
    
    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.Services -->



<!-- =====================
       Clients 1
    ======================== -->
<section id="clients1" class="clients clients-1 border-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="carousel owl-carousel" dir="ltr" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
          <?php 
            if($client_num > 0){
              foreach($client as $cl){
                ?>
          <div class="client">
            <a href="#"><img src="<?php echo base_url($cl->c_img) ?>" alt="client"></a>
          </div><!-- /.client -->
                <?php
              }
            }
          ?>
          
          
        </div><!-- /.carousel -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.clients 1 -->



<!-- ========================= 
            Testimonial #2
    =========================  -->
<section id="testimonial2" dir="ltr" class="testimonial testimonial-2 text-center pt-0 pb-170">
  <div class="bg-img"><img src="<?php echo base_url('assets/esh/') ?>assets/images/backgrounds/2.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center">
          <span class="heading__subtitle mb-0"><?php lang('Client’s Testimonials','اراء العملاء')?></span>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
        <div class="owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">
          <?php 
            if($testimonial_num > 0){
              foreach($testimonial as $test){
                ?>
                <!-- Testimonial -->
                <div class=" testimonial-item">
                  <div class="testimonial__content">
                    <p class="testimonial__desc">
                      <?php echo $test->t_comment?>
                    </p>
                  </div><!-- /.testimonial-content -->
                </div><!-- /. testimonial-item -->
              
                <?php
              }
            }
          ?>
        </div>
        <div class="owl-thumbs" data-slider-id="1">
          
          
            <?php 
            if($testimonial_num > 0){
              foreach($testimonial as $test){
                ?>
                <button class="owl-thumb-item">
                  <span class="testimonial__meta">
                    <span class="testimonial__thumb">
                      <img src="<?php echo base_url($test->t_img) ?>" alt="author thumb">
                    </span><!-- /.testimonial-thumb -->
                    <span class="testimonial__meta-title"><?php echo $test->t_name?></span>
                    <span class="testimonial__meta-desc"><?php echo $test->t_company?></span>
                  </span><!-- /.testimonial-meta -->
                </button>
                <?php
              }
            }
          ?>

        </div><!-- /.owl-thumbs -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.testimonial2 -->