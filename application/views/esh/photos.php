<section id="page-title" class="page-title bg-overlay bg-parallax">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_4) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الرئسيه') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('Photo Gallery', 'معرض الصور') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang('Photos', 'الصور') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- =========================== 
      projects Grid Default
    ============================= -->
<section id="projectsGridDefault" class="projects projects-grid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <ul class="projects-filter">
          <li><a class="filter active" href="#" data-filter="all"><?php lang('All', 'الكل') ?></a></li>
          <?php
          if ($albom_num > 0) {
            foreach ($albom as $a) {
              $t = explode(' ', $a->a_title);
          ?>
              <li><a class="filter" href="#" data-filter=".filter-<?php echo $t[0] ?>"><?php lang($a->a_title, $a->a_ar_title) ?></a></li>
          <?php
            }
          }
          ?>
        </ul><!-- /.projects-filter  -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <div id="filtered-items-wrap" class="row">

      <?php
      if ($media_num > 0) {
        foreach ($media as $m) {
          $a_where = array('a_id'=>$m->m_albom);
          $al = $this->data->get_data_where('albom',$a_where,'a_id')->row();
          $al_num = $this->data->get_data_where('albom',$a_where,'a_id')->num_rows();
          if($al_num > 0){
            $malbom = explode(' ',$al->a_title);
            $filter = $malbom[0];
          }else{
            $filter = 'removed';
          }
      ?>
          <!-- project item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-<?php echo $filter?>">
            <div class="project-item">
              <div class="project__img">
                <img src="<?php echo base_url($m->m_img)?>" alt="project img">
                <!-- <a href="#" class="zoom__icon"></a> -->
              </div><!-- /.project-img -->
              <div class="project__content <?php lang('','text-right')?>">
                <div class="project__cat">
                  <a href="#"><?php lang($al->a_title,$al->a_ar_title)?></a>
                </div><!-- /.project-cat -->
                <h4 class="project__title"><a href="#"><?php lang($m->m_title, $m->m_ar_title)?></a></h4>
              </div><!-- /.project-content -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
      <?php
        }
      }
      ?>


    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.projects Grid Default -->