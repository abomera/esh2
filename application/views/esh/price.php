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
                        <li class="breadcrumb-item "> <?php lang('Prices', 'الاسعار') ?></li>
                    </ol>
                </nav>
                <h1 class="pagetitle__heading  <?php lang('', 'text-right') ?>"><?php lang('Prices', 'الاسعار') ?></h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->


<section>
    <div class="container">
        <form class="prices row">
            <div class="col-md-8 offset-md-2">
                <h3 class="text-center">Get Shipping Estimates</h3>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="num" placeholder="No. of shipments" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="city" placeholder="No. of shipments" class="form-control">
                                <?php
                                foreach ($citis as $c) {
                                ?>
                                    <option value="<?php echo $c->c_id?>"><?php echo $c->c_title?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn__secondary btn__block" value="Get a quot">
                    </div>
                </div>
                <div class="pr" style="margin-top:50px"></div>
            </div>
        </form>
    </div>
</section>