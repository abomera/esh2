<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_1) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php lang('Home', 'الرئيسيه') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('About Us', 'من نحن') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang('About Us', 'من نحن') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
      About 2
    =========================== -->
<section id="about4" class="about about-2 about-4 pb-40 <?php lang('', 'text-right') ?>">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-7">
        <div class="row heading heading-2">
          <div class="col-sm-12 col-md-12 col-sm-12">
          </div><!-- /.col-lg-12 -->

          <div class="col-sm-12 col-md-12 col-lg-12">
            <p class="heading__desc mb-30"><?php lang($setting->s_who, $setting->s_ar_who) ?>

          </div><!-- /.col-lg-7 -->

          <div class="col-sm-12 col-md-12 col-sm-12">
          </div><!-- /.col-lg-12 -->

          <div class="col-sm-12 col-md-12 col-lg-12">

            <?php lang($setting->s_vision, $setting->s_ar_vision) ?>

          </div><!-- /.col-lg-7 -->

          <div class="col-sm-12 col-md-12 col-sm-12">
          </div><!-- /.col-lg-12 -->
          <div class="col-sm-12 col-md-12 col-lg-12">

            <?php lang($setting->s_mission, $setting->s_ar_mission) ?>

          </div><!-- /.col-lg-7 -->

        </div><!-- /.row -->
      </div><!-- /.col-lg-7 -->
      <div class="col-sm-12 col-md-9 col-lg-5">
        <div class="about__img mb-60">
          <img src="<?php echo base_url('assets/esh/'); ?>assets/images/about/2.jpg" alt="about img" class="img-fluid">
        </div><!-- /.about-img -->
      </div><!-- /.col-lg-5 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.About 4 -->


<!-- =====================
       Clients 1
    ======================== -->
<section id="clients1" class="clients clients-1 border-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="carousel owl-carousel" dir="ltr" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
          <?php
          if ($client_num > 0) {
            foreach ($client as $cl) {
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
          <span class="heading__subtitle mb-0"><?php lang('Client’s Testimonials', 'اراء العملاء') ?></span>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
        <div class="owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">
          <?php
          if ($testimonial_num > 0) {
            foreach ($testimonial as $test) {
          ?>
              <!-- Testimonial -->
              <div class=" testimonial-item">
                <div class="testimonial__content">
                  <p class="testimonial__desc">
                    <?php echo $test->t_comment ?>
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
          if ($testimonial_num > 0) {
            foreach ($testimonial as $test) {
          ?>
              <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="<?php echo base_url($test->t_img) ?>" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title"><?php echo $test->t_name ?></span>
                  <span class="testimonial__meta-desc"><?php echo $test->t_company ?></span>
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