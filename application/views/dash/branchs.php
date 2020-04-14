<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Branchs Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_branch') ?>" class="btn-primary btn btn-sm">Add New</a>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($branchs_num > 0) {
                        $x = 0;
                        foreach ($branchs as $b) {
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><?php echo $b->b_name ?></td>
                                <td><?php echo $b->b_email ?></td>
                                <td><?php echo $b->b_phone ?></td>
                                <td><?php echo $b->b_address ?></td>
                                <td>
                                    <a href="<?PHP echo base_url('dash/edit_branch/' . $b->b_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $b->b_id ?>" class="del_branch btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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