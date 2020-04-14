<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Articles Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_article') ?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>writer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($arts_num > 0) {
                        $x = 0;
                        foreach ($arts as $art) {
                            $where = array('a_id' => $art->a_writer);
                            $user = $this->data->get_data_where('admin', $where, 'a_id')->row();
                            $num = $this->data->get_data_where('admin', $where, 'a_id')->num_rows();
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><img src="<?php echo base_url() . $art->a_img ?>" class="img-fluid" width="100"></td>
                                <td><?php echo $art->a_title ?></td>
                                <td><?php echo ($num > 0) ? $user->a_name : 'Removed' ?></td>
                                <td>
                                    <?php
                                    if ($art->a_status == 0) {
                                    ?>
                                        <a href="<?PHP echo base_url('dash/active_art/' . $art->a_id . '/enable') ?>" class="btn btn-success btn-sm"> <i class="feather icon-check font-medium-2"></i> </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="<?PHP echo base_url('dash/active_art/' . $art->a_id . '/disable') ?>" class="btn btn-warning btn-sm"> <i class="feather icon-pause-circle font-medium-2"></i> </a>
                                    <?php
                                    }
                                    ?>
                                    <a href="<?PHP echo base_url('dash/edit_article/' . $art->a_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $art->a_id ?>" class="del_article btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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