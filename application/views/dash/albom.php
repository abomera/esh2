<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">alboms Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_albom') ?>" class="btn-primary btn btn-sm">Add New</a>
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
                        <th>type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($albom_num > 0) {
                        $x = 0;
                        foreach ($albom as $a) {
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><?php echo $a->a_ar_title ?></td>
                                <td><?php echo $a->a_title ?></td>
                                <td><?php echo ($a->a_type == 0)?'Images':'Videos' ?></td>
                                <td>
                                    <a href="<?PHP echo base_url('dash/edit_albom/' . $a->a_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $a->a_id ?>" class="del_albom btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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