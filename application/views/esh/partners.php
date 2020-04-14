<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_3) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php lang('Home', 'الرئيسيه') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('Partners', 'الشركاء') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang('Partners', 'الشركاء') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- =========================== 
      projects Gallery 
    ============================= -->
<section id="projectsGallery" class="projects projects-gallery">
  <div class="container">
    <div class="row">
      <?php
      if ($partners_num > 0) {
        foreach ($partners as $p) {
      ?>
          <!-- project item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="<?php echo base_url($p->p_img) ?>" alt="project img">
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
      <?php
        }
      }
      ?>


    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.projects Gallery -->