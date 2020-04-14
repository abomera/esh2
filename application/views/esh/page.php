<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="<?php echo base_url($row->p_img) ?>" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الصفحه الرئيسيه') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php lang($row->p_title, $row->p_ar_title) ?></li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading <?php lang('', 'text-right') ?>"><?php lang($row->p_title, $row->p_ar_title) ?></h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<div class="container <?php lang('', 'text-right') ?>">
    <br>
    <br>
    <?php lang($row->p_desc, $row->p_ar_desc) ?>
</div>