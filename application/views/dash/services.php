<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">services Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_service') ?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Arabic Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($services_num > 0) {
                        $x = 0;
                        foreach ($services as $service) {
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><img src="<?php echo base_url() . $service->s_cover ?>" class="img-fluid" width="100"></td>
                                <td><?php echo $service->s_title ?></td>
                                <td><?php echo $service->s_ar_title ?></td>
                                <td>
                                    <?php
                                    if ($service->s_status == 0) {
                                    ?>
                                        <a href="<?PHP echo base_url('dash/active_service/' . $service->s_id . '/enable') ?>" class="btn btn-success btn-sm"> <i class="feather icon-check font-medium-2 "></i> </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="<?PHP echo base_url('dash/active_service/' . $service->s_id . '/disable') ?>" class="btn btn-warning btn-sm"> <i class="feather icon-pause-circle font-medium-2 "></i> </a>
                                    <?php
                                    }
                                    ?>
                                    <a href="<?PHP echo base_url('dash/edit_service/' . $service->s_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $service->s_id ?>" class="del_service btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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