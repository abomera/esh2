<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Groups Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_group') ?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($groups_num > 0) {
                        $x = 0;
                        foreach ($groups as $group) {
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><?php echo $group->g_title ?></td>
                                <td>
                                    <a href="<?PHP echo base_url('dash/edit_group/' . $group->g_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $group->g_id ?>" class="del_group btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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