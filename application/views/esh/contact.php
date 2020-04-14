<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_9) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php lang('Home', 'الرئيسيه') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('Contact Us', 'اتصل بنا') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang('Contact Us', 'اتصل بنا') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->


<!-- ==========================
       Contact panels
    ============================ -->
<section id="contactPanels" class="contact-panels text-center pb-70">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12offset-lg-3">
        <div class="heading text-center ">
          <h2 class="heading__title"><?php lang('Contact Us', 'اتصل بنا') ?></h2>
          <div class="divider__line divider__theme divider__center mb-0"></div>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row pp">

      <?php
      if ($branchs_num > 0) {
        foreach ($branchs as $b) {
      ?>
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="contact-panel">
              <div class="contact__panel-header">
                <h4 class="contact__panel-title"><?php lang($b->b_name, $b->b_ar_name) ?> <i class="fa fa-chevron-down iconty"></i></h4>
              </div>
              <ul class="contact__list list-unstyled">
                <li><?php echo $b->b_phone ?></li>
                <li>Email: <?php echo $b->b_email ?> </li>
                <li><?php lang($b->b_address, $b->b_ar_address) ?></li>
                <li><?php echo $b->b_hours ?></li>
              </ul>
              <a href="<?php echo $b->b_location ?>" class="btn btn__primary btn__hover3">Location</a>
            </div><!-- /.contact-panel -->
          </div><!-- /.col-lg-4 -->
      <?php
        }
      }
      ?>


    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /. Contact panels -->

<!-- ==========================
        contact 1
    =========================== -->
<section id="contact1" class="contact text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="heading text-center mb-50">
          <h2 class="heading__title"><?php lang('Feedback', 'اتصل بنا') ?></h2>
          <div class="divider__line divider__theme divider__center mb-0"></div>
        </div><!-- /.heading -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <form class="contact_form">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group"><input type="text" name="name" class="form-control" placeholder="<?php lang('Name', 'الاسم') ?>"></div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group"><input type="email" name="email" class="form-control" placeholder="<?php lang('Email', 'البريد الالكتروني') ?>"></div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group"><input type="text" name="phone" class="form-control" placeholder="<?php lang('Phone', 'الهاتف') ?>"></div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group"><input type="text" name="company" class="form-control" placeholder="<?php lang('Company', 'الشركه') ?>"></div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="form-group">
                <textarea class="form-control" name="msg" placeholder="<?php lang('Request Details', 'نص الطلب') ?>"></textarea>
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <button type="submit" class="btn btn__secondary btn__hover3"> <?php lang('Submit Request', 'ارسال الطلب') ?></button>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </form>
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.contact 1 -->