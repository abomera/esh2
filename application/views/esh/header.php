<!DOCTYPE html>
<html lang="en" dir="<?php lang('ltr', 'rtl'); ?>">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="<?php echo $desc ?> ">
    <meta name="keywords" content="<?php echo $keys ?> ">
    <link href="<?php echo base_url('assets/esh/') ?>assets/images/favicon/favicon.png" rel="icon">
    <title>Esh7enly | <?php echo $title ?></title>
    <?php
    if ($lang != 'arabic') {
    ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&amp;display=swap">
    <?php
    } else {
    ?>
        <link href="https://fonts.googleapis.com/css?family=El+Messiri:400,600&display=swap" rel="stylesheet">
    <?php
    }
    ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/esh/') ?>assets/css/libraries.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/esh/') ?>assets/css/style.css" />
    <?php
    if ($lang == 'arabic') {
    ?>
        <link rel="stylesheet" href="<?php echo base_url('assets/esh/') ?>assets/css/style-rtl.css" />

    <?php
    }
    ?>
</head>

<body>
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        <header id="header" class="header header-transparent">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                        <img src="<?php echo base_url('assets/esh/') ?>assets/images/logo/logo-light.png" class="logo-light" alt="logo">
                        <img src="<?php echo base_url('assets/esh/') ?>assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="header__top-right d-none d-lg-block">
                        <ul class="list-unstyled d-flex justify-content-end align-items-center">
                            <li><i class="icon-phone"></i><span><?php echo $setting->s_phone ?></span></li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle width-auto" id="langDrobdown" data-toggle="dropdown">
                                        <i class="icon-map"></i><span><?php echo ($lang == '') ? 'English' : $lang ?></span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="langDrobdown">
                                        <a class="dropdown-item" href="<?php echo base_url('home/lang/arabic') ?>">Arabic</a>
                                        <a class="dropdown-item" href="<?php echo base_url('home/lang/english') ?>">English</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <?php
                                if ($login == 1 and $this->session->userdata('name') != '') {
                                ?>
                                    <a href="<?php echo base_url('area') ?>" class="btn btn__white"><i class="icon-list"></i><span><?php echo $this->session->userdata('name') ?></span></a>
                                <?php
                                } else {
                                ?>
                                    <a href="<?php echo base_url('login') ?>" class="btn btn__white"><i class="icon-list"></i><span><?php lang('Login', 'تسجيل الدخول') ?></span></a>
                                <?php
                                }
                                ?>
                            </li>
                        </ul>
                    </div><!-- /.header-top-right -->
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav <?php lang('ml', 'mr') ?>-auto">
                            <?php
                            if ($menus_num > 0) {
                                foreach ($menus as $m) {
                                    echo menu($m);
                                }
                            }
                            ?>

                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                    <div class="navbar-modules">
                        <div class="modules__wrapper d-flex align-items-center">
                            <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
                            <a href="<?php echo base_url('login') ?>" class="module__btn"><i class="fa fa-user"></i></a>
                            <?php
                            lang('<a href="' . base_url('home/lang/arabic') . '" class="module__btn">AR</a>', '<a  class="module__btn" href="' . base_url('home/lang/english') . '">EN</a>');
                            ?>
                        </div><!-- /.modules-wrapper -->
                    </div><!-- /.navbar-modules -->
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->

        