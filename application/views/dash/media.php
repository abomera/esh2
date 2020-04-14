<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left"><?php echo ($type == 0)?'Images ':'Videos '?> Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_media/'.$type) ?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($media_num > 0) {
                        $x = 0;
                        foreach ($media as $m) {
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><img src="<?php echo base_url() . $m->m_img ?>" class="img-fluid" width="100"></td>
                                <td><?php echo $m->m_title ?></td>
                                <td>
                                    <a href="<?PHP echo base_url('dash/edit_media/' . $m->m_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $m->m_id ?>" class="del_media btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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