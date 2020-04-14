<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Partners Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_partner') ?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($partners_num > 0) {
                        $x = 0;
                        foreach ($partners as $partner) {
                    ?>
                    <tr>
                        <td width="5%"><?php echo ++$x ?></td>
                        <td><img src="<?php echo base_url() . $partner->p_img ?>" class="img-fluid" width="100"></td>
                        <td>
                            <a href="<?PHP echo base_url('dash/edit_partner/' . $partner->p_id) ?>"
                                class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                            <a href="#" data-id="<?php echo $partner->p_id ?>" class="del_partner btn btn-danger btn-sm"> <i
                                    class="feather icon-trash-2 font-medium-2"></i> </a>
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