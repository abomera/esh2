<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_10) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الصفحه الرئيسيه') ?></a></li>
            <li class="breadcrumb-item"><a href="#"> <?php lang('Support', 'الدعم') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('Request A Quote ', 'طلب سعر') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"> <?php lang('Request A Quote', 'طلب سعر') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
       Request Quote
    ========================= -->
<section id="requestQuote" class="request-quote">
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
        <form class="request-quote-form qout <?php lang('', 'text-right') ?>">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

              <p class="fz-16 mb-45"> <?php lang('Need dependable, cost effective transportation of your commodities? Fill out
                our easy Quote Request Form below to get a fast quote on your job.', 'تحتاج موثوقة ، فعالة من حيث التكلفة النقل للسلع الخاصة بك؟ املأ نموذج طلب الأسعار السهل أدناه للحصول على عرض أسعار سريع لعملك.') ?></p>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div class="row mb-30">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h5 class="form__title"><?php lang('Personal Data', 'البيانات الشخصيه') ?></h5>
              <div class="divider__line divider__theme divider__sm mb-30"></div>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="form-group">
                <input type="text" class="form-control" name="company" placeholder="<?php lang('Company', 'الشركه') ?>">
              </div>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="<?php lang('Name', 'الاسم') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="<?php lang('Email', 'البريد الالكتروني') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="<?php lang('Phone', 'الهاتف') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row mb-30">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h5 class="form__title"><?php lang('Pickup Address', 'عنوان الشحنه') ?> </h5>
              <div class="divider__line divider__theme divider__sm mb-30"></div>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="form-group">
                <input type="text" class="form-control" name="pstreet" placeholder="<?php lang('Street', 'الشارع') ?>">
              </div>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="pcountry" placeholder="<?php lang('Country', 'الدوله') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="pcity" placeholder="<?php lang('City', 'المدينه') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="pzip" placeholder="<?php lang('Zip', 'الرقم البريدي') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
              <div class="form-group input-radio mr-30">
                <label class="label-radio"><?php lang('Lift Gate at Pickup Point', 'بوابة الرفع عند نقطة الالتقاط') ?>
                  <input type="radio" value='Lift Gate at Pickup Point' name="lift" checked>
                  <span class="radio-indicator"></span>
                </label>
              </div>
              <div class="form-group input-radio">
                <label class="label-radio"><?php lang('Limited Access Pick Up', 'وصول محدود التقاط') ?>
                  <input type="radio" value='Limited Access Pick Up' name="lift">
                  <span class="radio-indicator"></span>
                </label>
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div class="row mb-30">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h5 class="form__title"><?php lang('Drop-Off Address', 'عنوان توصيل الشحنه') ?></h5>
              <div class="divider__line divider__theme divider__sm mb-30"></div>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="form-group">
                <input type="text" class="form-control" name="dstreet" placeholder="<?php lang('Street', 'الشارع') ?>">
              </div>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="dcountry" placeholder="<?php lang('Country', 'الدوله') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="dcity" placeholder="<?php lang('City', 'المدينه') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="dzip" placeholder="<?php lang('Zip', 'الرقم البريدي') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
              <div class="form-group input-radio mr-30">
                <label class="label-radio"><?php lang('Call before Delivery', 'الاتصال قبل التوصيل') ?>
                  <input type="radio" value="Call before Delivery" name="call" checked>
                  <span class="radio-indicator"></span>
                </label>
              </div>
              <div class="form-group input-radio mr-30">
                <label class="label-radio"><?php lang('Lift Gate at Pickup Point', 'بوابة الرفع عند نقطة الالتقاط') ?>
                  <input type="radio" value="Lift Gate at Pickup Point" name="call">
                  <span class="radio-indicator"></span>
                </label>
              </div>
              <div class="form-group input-radio mr-30">
                <label class="label-radio"><?php lang('Limited Access Pick Up', 'وصول محدود التقاط') ?>
                  <input type="radio" value="Limited Access Pick Up" name="call">
                  <span class="radio-indicator"></span>
                </label>
              </div>
              <div class="form-group input-radio">
                <label class="label-radio"><?php lang('Hazmat', 'مواد خطره') ?>
                  <input type="radio" value="Hazmat" name="call">
                  <span class="radio-indicator"></span>
                </label>
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div class="row mb-10">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h5 class="form__title"><?php lang('Item To Be Shipped', 'البند ليتم شحنها') ?></h5>
              <div class="divider__line divider__theme divider__sm mb-30"></div>
            </div><!-- /.col-lg-12 -->
            <div class="col-sm-12 col-md-8 col-lg-8">
              <div class="form-group">
                <input type="text" class="form-control" name="weight" placeholder="<?php lang('Total Weight, lbs', 'الوزن') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="qty" placeholder="<?php lang('QTY', 'الكميه') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="length" placeholder="<?php lang('Length', 'الطول') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="width" placeholder="<?php lang('Width', 'العرض') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" name="height" placeholder="<?php lang('Height', 'الارتفاع') ?>">
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap flex-wrap">
              <div class="form-group input-radio mr-30">
                <label class="label-radio"><?php lang('Stackable', 'سهل التخزين') ?>
                  <input type="radio" value="Stackable" name="stack" checked>
                  <span class="radio-indicator"></span>
                </label>
              </div>
              <div class="form-group input-radio">
                <label class="label-radio"><?php lang('Non-Stackable', 'غير سهل التخزين') ?>
                  <input type="radio" value="Non-Stackable" name="stack">
                  <span class="radio-indicator"></span>
                </label>
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <button type="submit" class="btn btn__secondary btn__block"><?php lang('Request A Quote', 'طلب سعر') ?></button>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </form>
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Request Quote -->