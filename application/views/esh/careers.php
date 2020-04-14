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
                        <li class="breadcrumb-item "> <?php lang('Careers', 'الوظائف') ?></li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading  <?php lang('', 'text-right') ?>"><?php lang('Careers', 'الوظائف') ?></h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form class="career">
                    <h3> Job Application </h3>
                    <hr>
                    <div class="form-group">
                        <label> Job Title </label>
                        <input type="text" name="job" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> CV </label><br>
                        <input type="file" name="cv" class="">
                    </div>
                    <input type="submit" value="Submit" class="btn btn__secondary btn__block">
                </form>
            </div>
            <div class="col-md-8">
                <?php
                if ($career > 0) {
                    foreach ($career as $c) {
                ?>
                        <div class="bordi">
                            <h3> <?php echo $c->c_title?> </h3>
                            <p>
                                <?php echo $c->c_content?>
                            </p>
                        </div>
                        <hr>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>