<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Admin Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_admin') ?>" class="btn-primary btn btn-sm">Add New</a>
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
                        <th>Group</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($admin_num > 0) {
                        $x = 0;
                        foreach ($admin as $ad) {
                            $where = array('g_id'=>$ad->a_group);
                            $group = $this->data->get_data_where('groups',$where,'g_id')->row();
                            $group_num = $this->data->get_data_where('groups',$where,'g_id')->num_rows();
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><?php echo $ad->a_name ?></td>
                                <td><?php echo $ad->a_email ?></td>
                                <td><?php echo ($group_num > 0)?$group->g_title:'Removed' ?></td>
                                <td>
                                    <a href="<?PHP echo base_url('dash/edit_admin/' . $ad->a_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $ad->a_id ?>" class="del_admin btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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