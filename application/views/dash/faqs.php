<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">faq Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_faq') ?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
            <?php
// echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

// echo password_verify ('rasmuslerdorf' , '$2y$10$vK89.qPqn1P7iUEpbZLRGOpCDsbJimjQKIhcqjhz1n2/yM7RPwCSm');

            ?>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>title</th>
                        <th>arabic title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($faqs_num > 0) {
                        $x = 0;
                        foreach ($faqs as $f) {
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><?php echo $f->f_q ?></td>
                                <td><?php echo $f->f_ar_q ?></td>
                                <td>
                                    <a href="<?PHP echo base_url('dash/edit_faq/' . $f->f_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $f->f_id ?>" class="del_faq btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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