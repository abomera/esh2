<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">testimonials Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_testimonial') ?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($testimonials_num > 0) {
                        $x = 0;
                        foreach ($testimonials as $testimonial) {
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><img src="<?php echo base_url() . $testimonial->t_img ?>" class="img-fluid" width="100"></td>
                                <td><?php echo $testimonial->t_name ?></td>
                                <td><?php echo $testimonial->t_comment ?></td>
                                <td>
                                    <a href="<?PHP echo base_url('dash/edit_testimonial/' . $testimonial->t_id) ?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $testimonial->t_id ?>" class="del_testimonial btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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