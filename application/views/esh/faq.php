<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_8) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الصفحه الرئيسيه') ?></a></li>
            <li class="breadcrumb-item"><a href="#"> <?php lang('Support', 'الدعم') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('FAQs', 'الاشئلة الشائعه') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang('FAQs', 'الاشئلة الشائعه') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
       FAQ
    ========================= -->
<section id="faq" class="faq">
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
                    <li><a href="<?php echo base_url('service/' . $s->s_id) ?>"><?php lang($s->s_title, $s->s_ar_title) ?></a></li>

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
        <div id="accordion">
          <?php
          if ($faqs_num > 0) {
            foreach ($faqs as $f) {
          ?>
              <div class="accordion-item <?php lang('', 'text-right') ?>">
                <div class="accordion__item-header " data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#"><?php lang($f->f_q, $f->f_ar_q) ?></a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse " data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p><?php lang($f->f_a, $f->f_ar_a) ?></p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
          <?php
            }
          }
          ?>


        </div><!-- / #accordion -->
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.FAQ -->