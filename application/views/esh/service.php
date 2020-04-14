<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_2) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الصفحه الرئيسيه') ?></a></li>
            <li class="breadcrumb-item "> <?php lang('Services', 'الخدمات') ?></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang($row->s_title, $row->s_ar_title) ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading  <?php lang('', 'text-right') ?>"><?php lang($row->s_title, $row->s_ar_title) ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
      case studies Single
    ========================= -->
<section id="caseStudiesSingle" class="case-studies-single <?php lang('', 'text-right') ?>">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4">
        <aside class="sidebar mb-30">
          <div class="widget widget-categories widget-categories-2">
            <div class="widget-content">
              <ul class="list-unstyled <?php lang('', 'text-right') ?>">
                <?php
                if ($service_num > 0) {
                  foreach ($service as $s) {
                ?>
                    <li><a href="<?php echo base_url('service/' . $s->s_id) ?>" <?php echo ($s->s_id == $row->s_id) ? 'class="active"' : '' ?>><?php lang($s->s_title, $s->s_ar_title) ?></a></li>

                <?php
                  }
                }

                ?>
              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-categories -->
          <div class="widget widget-download">
            <h5 class="widget__title <?php lang('', 'text-right') ?>"><?php lang('Download', 'تنزيل') ?></h5>
            <div class="widget__content">
              <a href="<?php echo $setting->s_pdf ?>" class="btn btn__primary btn__block btn__hover2 mb-20 d-flex justify-content-between">
                <span><?php echo $setting->s_title_13 ?></span>
                <img src="<?php echo base_url('assets/esh/') ?>assets/icons/pdf.png" alt="pdf">
              </a>
              <a href="<?php echo $setting->s_pdf1 ?>" class="btn btn__primary btn__block btn__hover2">
                <span><?php echo $setting->s_title_14 ?></span>
                <img src="<?php echo base_url('assets/esh/') ?>assets/icons/pdf.png" alt="pdf">
              </a>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-download -->
          <div class="widget widget-help bg-theme <?php lang('', 'text-right') ?>">
            <div class="widget__content">
              <h5><?php lang('How Can', 'كيف نستطيع') ?> <br> <?php lang('We Help You!', 'مساعدتك') ?></h5>
              <p><?php lang('E.C.S handles all business making you focus on running your business successfully by having the:
                          Right Tools Right Resources Right pricing We strongly believe your success is our success.', 'تتولى شركة E.C.S التعامل مع جميع الأعمال مما يجعلك تركز على إدارة أعمالك بنجاح من خلال: الأدوات المناسبة الموارد الصحيحة التسعير الصحيح نحن نعتقد بقوة أن نجاحك هو نجاحنا.') ?></p>
              <a href="<?php echo base_url('contact') ?>" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i><?php lang('Contact Us', 'اتصل بنا ') ?></a>
            </div><!-- /.widget-download -->
          </div><!-- /.widget-help -->
        </aside><!-- /.sidebar -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="case-single-item">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="text__block mb-40">
                <h5 class="text__block-title"><?php lang('Overview', 'نظره عامه') ?></h5>
                </p><?php lang($row->s_over, $row->s_ar_over) ?>
              </div><!-- /.text-block -->

              <div class="text__block">
                <h5 class="text__block-title"><?php lang('How It Works?!', 'كيف نعمل ؟') ?></h5>
                <?php lang($row->s_how, $row->s_ar_how) ?>
              </div><!-- /.text-block -->
              <br>
              <br>
              <div class="video-3 bg-overlay mb-50">
                <div class="bg-img"><img src="<?php echo base_url($row->s_cover) ?>" alt="background"></div>
                <div class="video__btn align-v-h">
                  <a class="popup-video" href="<?php echo $row->s_video_link ?>">
                    <span class="video__player-animation"></span>
                    <div class="video__player">
                      <i class="fa fa-play"></i>
                    </div>
                  </a>
                </div>
              </div><!-- /.video -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->





        </div><!-- /.case-single-item -->
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.case studies Single -->