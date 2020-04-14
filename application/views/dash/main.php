<div class="content-header row">

</div>
<div class="content-body">

    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-3 col-sm-6 <?php echo ($group->g_pages == 1) ? '' : 'd-none' ?>">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                                    <div class="avatar-content">
                                        <i class="feather icon-square text-info font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700"><?php echo $pages; ?></h2>
                                <p class="mb-0 line-ellipsis">Pages</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 <?php echo ($group->g_menu == 1) ? '' : 'd-none' ?>">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                                    <div class="avatar-content">
                                        <i class="feather icon-more-horizontal text-warning font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700"><?php echo $menus ?></h2>
                                <p class="mb-0 line-ellipsis">Menus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6  <?php echo ($group->g_slider == 1) ? '' : 'd-none' ?>">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                                    <div class="avatar-content">
                                        <i class="feather icon-tv text-primary font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700"><?php echo $slider ?></h2>
                                <p class="mb-0 line-ellipsis">Slides</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 <?php echo ($group->g_blog  == 1) ? '' : 'd-none' ?>">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                                    <div class="avatar-content">
                                        <i class="feather icon-type text-success font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700"><?php echo $articles ?></h2>
                                <p class="mb-0 line-ellipsis">Articles</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">New Requests</h4> <a href="<?php echo base_url('dash/request') ?>" class="btn btn-primary btn-sm">View All</a>
                </div>
                <div class="card-content card-con">
                    <div class="table-responsive mt-1">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Writer</th>
                                    <th>Email</th>
                                    <th>company</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($requests_num > 0) {
                                    $x = 0;
                                    foreach ($requests as $r) {

                                ?>
                                        <tr>
                                            <td width="5%"><?php echo ++$x ?></td>
                                            <td><?php echo $r->r_name ?></td>
                                            <td><?php echo $r->r_email ?></td>
                                            <td><?php echo $r->r_company ?></td>
                                            <td>

                                                <a href="<?php echo base_url('dash/show_request/') . $r->r_id ?>" class="btn btn-primary btn-sm"> <i class="feather icon-eye font-medium-2"></i> </a>
                                                <a href="<?php echo base_url('dash/del_request/') . $r->r_id ?>" class="btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">New Messages</h4> <a href="<?php echo base_url('dash/request') ?>" class="btn btn-primary btn-sm">View All</a>
                </div>
                <div class="card-content card-con">
                    <div class="table-responsive mt-1">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Message</th>
                                    <th>Writer</th>
                                    <th>Email</th>
                                    <th>company</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($contact_num > 0) {
                                    $x = 0;
                                    foreach ($contact as $c) {

                                ?>
                                        <tr>
                                            <td width="5%"><?php echo ++$x ?></td>
                                            <td><i class="fa fa-comment"></i> <?php echo mb_substr($c->c_msg, 0, 100, 'utf-8') ?></td>
                                            <td><?php echo $c->c_name ?></td>
                                            <td><?php echo $c->c_email ?></td>
                                            <td><?php echo $c->c_company ?></td>
                                            <td>

                                                <a href="<?php echo base_url('dash/show_msg/') . $c->c_id ?>" class="btn btn-primary btn-sm"> <i class="feather icon-eye font-medium-2"></i> </a>
                                                <a href="<?php echo base_url('dash/del_msg/') . $c->c_id ?>" class="btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>