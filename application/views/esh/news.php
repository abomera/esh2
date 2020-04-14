<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_6) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الصفحه الرئيسيه') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('News & Events', 'الاخبار & الاحداث') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang('News & Events', 'الاخبار & الاحداث') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
      Blog Grid
    ========================= -->
<section id="blogGrid" class="blog blog-grid">
  <div class="container">
    <div class="row">
      <?php
      if ($article_num > 0) {
        foreach ($article as $art) {
          $where = array('a_id' => $art->a_writer);
          $admin = $this->data->get_data_where('admin', $where, 'a_id')->row();
          $num = $this->data->get_data_where('admin', $where, 'a_id')->num_rows();
      ?>
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item <?php lang('', 'text-right') ?>">
              <div class="blog__img">
                <a href="news_details.html">
                  <img src="<?php echo base_url($art->a_img) ?>" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat  <?php lang('', 'text-right') ?>">
                    <?php echo ($num > 0) ? $admin->a_name : 'Removed' ?>
                  </div><!-- /.blog-meta-cat -->
                  <span class="blog__meta-date" <?php lang('', 'style="margin-right:20px"') ?>><?php echo $art->a_date ?></span>
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="<?php echo base_url('article/' . $art->a_link) ?>"><?php lang($art->a_title, $art->a_ar_title) ?></a></h4>
                <p class="blog__desc  <?php lang('', 'text-right') ?>">
                  <?php lang(strip_tags(mb_substr($art->a_desc, 0, 150, 'utf-8')), strip_tags(mb_substr($art->a_ar_desc, 0, 150, 'utf-8'))) ?> ...
                </p>
                <a href="<?php echo base_url('article/' . $art->a_link) ?>" class="btn btn__secondary btn__link"><?php lang('Read More', 'المزيد') ?></a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->

      <?php
        }
      }
      ?>

    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.blog Grid -->