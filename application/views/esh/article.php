<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url('assets/esh/') ?>assets/images/page-titles/1.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الصفحه الرئيسيه') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang($row->a_title, $row->a_ar_title) ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang($row->a_title, $row->a_ar_title) ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
      Blog Single
    ========================= -->
<section id="blogSingleCentered" class="blog blog-single pb-60">
  <div class="container">
    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="blog-item">
          <div class="blog__img">
            <a href="#">
              <img src="<?php echo base_url($row->a_img) ?>" alt="blog image">
            </a>
          </div><!-- /.entry-img -->
          <div class="blog__content">
            <div class="blog__meta-cat">
            </div><!-- /.blog-meta-cat -->
            <h4 class="blog__title"><a href="#"><?php lang($row->a_title, $row->a_ar_title) ?></a></h4>
            <div class="blog__meta justify-content-center">
              <span class="blog__meta-date"><?php echo $row->a_date ?></span>
            </div><!-- /.blog-meta -->
            <div class="divider__line divider__theme divider__center"></div>
            <div class="blog__desc <?php lang('', 'text-right') ?>">
              <?php lang($row->a_desc, $row->a_ar_desc) ?>
            </div><!-- /.blog-desc -->
          </div><!-- /.entry-content -->
        </div><!-- /.blog-item -->
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="blog__tags mb-30">
              <?php
              $tags = explode(',', $row->a_tags);
              foreach ($tags as $tag) {
                if($tag == ''){
                  continue;
                }
              ?>
                <a href="#"><?php echo $tag ?></a>
              <?php
              }
              ?>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="blog-share">
              <div class="social__icons justify-content-end mb-30">
                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                  <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                  <a class="a2a_button_facebook"></a>
                  <a class="a2a_button_twitter"></a>
                  <a class="a2a_button_whatsapp"></a>
                  <a class="a2a_button_linkedin"></a>
                  <a class="a2a_button_google_gmail"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END -->
              </div>
            </div><!-- /.blog-share -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->

        <div class="blog-widget blog-nav">
          <?php
          if ($prev_num > 0) {
          ?>
            <div class="blog__prev <?php echo ($prev_num == 0) ? 'd-none' : '' ?>">
              <a href="<?php echo base_url('article/' . $prev_row->a_link) ?>">
                <div class="blog__nav-img">
                  <img src="<?php echo base_url($prev_row->a_img) ?>" alt="blog thumb">
                </div>
                <div class="blog__nav-content">
                  <span><?php lang('Previous', 'السابق') ?></span>
                  <h6><?php echo ($prev_num != 0) ? rlang($prev_row->a_title, $prev_row->a_ar_title) : '' ?></h6>
                </div>
              </a>
            </div><!-- /.blog-prev  -->
          <?php
          }
          ?>
          <?php
          if ($next_num > 0) {
          ?>
            <div class="blog__next <?php echo ($next_num == 0) ? 'd-none' : '' ?>">
              <a href="<?php echo base_url('article/' . $next_row->a_link) ?>">
                <div class="blog__nav-content">
                  <span><?php lang('Next', 'التالي') ?></span>
                  <h6><?php echo ($next_num !=  0) ? rlang($next_row->a_title, $next_row->a_ar_title) : '' ?></h6>
                </div>
                <div class="blog__nav-img">
                  <img src="<?php echo base_url($next_row->a_img) ?>" alt="blog thumb">
                </div>
              </a>
            </div><!-- /.blog-next  -->
          <?php
          }
          ?>


        </div><!-- /.blog-nav  -->

        <div class="blog-comments mb-50">
          <h5 class="blog__widget-title <?php lang('', 'text-right') ?>" <?php lang('', 'dir="ltr"') ?>><?php echo $blog_comments_num ?> <?php lang('comments', 'التعليقات') ?></h5>
          <ul class="comments-list">
            <?php
            if ($blog_comments_num > 0) {
              foreach ($blog_comments as $comm) {
            ?>
                <li class="comment__item">
                  <div class="comment__avatar">
                    <img src="<?php echo base_url('assets/esh/') ?>assets/images/user.png" alt="avatar">
                  </div>
                  <div class="comment__content">
                    <h6 class="comment__author"><?php echo $comm->c_writer ?></h6>
                    <p class="comment__desc"><?php echo $comm->c_comment ?></p>
                  </div>

                </li><!-- /.comment -->
            <?php
              }
            }
            ?>


          </ul><!-- /.comments-list -->
        </div><!-- /.blog-comments -->
        <div class="blog-widget blog-comments-form">
          <h5 class="blog__widget-title  <?php lang('', 'text-right') ?>"><?php lang('Leave A Reply','اترك تعليقك')?></h5>
          <form class="add_comment" method="post">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="<?php lang('Name','الاسم')?>">
                  <input type="hidden" name="id" value="<?php echo $row->a_id?>">
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="<?php lang('Email','البريد الالكتروني')?>">
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <textarea class="form-control" name="msg" placeholder="<?php lang('Comment','التعليق')?>"></textarea>
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <button type="submit" class="btn btn__secondary btn__block"><?php lang('Submit Comment','ارسال التعليق')?></button>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </form>
        </div><!-- /.blog-comments-form -->
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Single -->