<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Slider Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_slide')?>" class="btn-primary btn btn-sm">Add New</a>
            </p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Image</th>
                        <th>Language</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($slider_num > 0){
                            $x = 0;
                            foreach ($slider as $slide) {
                                ?>
                    <tr>
                        <td width="5%"><?php echo ++$x?></td>
                        <td><img src="<?php echo base_url().$slide->s_img?>" class="img-responsive"></td>
                        <td><?php echo $slide->s_lang?></td>
                        <td>
                            <a href="<?PHP echo base_url('dash/edit_slide/'.$slide->s_id)?>" class="btn btn-primary btn-sm"> <i class="feather icon-edit-2 font-medium-2"></i> </a>
                            <a href="#" data-id="<?php echo $slide->s_id?>" class="btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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