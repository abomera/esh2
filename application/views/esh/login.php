<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax" style="    padding: 50px 0 86px">
    <div class="bg-img"><img src="<?php echo base_url('assets/login.jpg') ?>" alt="background"></div>
    <div class="container">

    </div><!-- /.container -->
</section><!-- /.page-title -->

<div class="container">
    <form class="login">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="cover">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bord <?php lang('', 'text-right'); ?>">
                        <h4> <?php lang('Login Now ', 'تسجيل الدخول'); ?> </h4>
                        <hr>
                        <div class="form-group">
                            <label><?php lang('Username', 'اسم المستخدم') ?></label>
                            <input type="text" name="name" class="form-control" placeholder="<?php lang('Username', 'اسم المستخدم') ?>">
                        </div>
                        <div class="form-group">
                            <label><?php lang('Password', 'كلمة المرور') ?></label>
                            <input type="password" name="password" class="form-control" placeholder="<?php lang('Password', 'كلمة المرور') ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="<?php lang('Login Now ', 'تسجيل الدخول'); ?>" class="btn btn__primary ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>