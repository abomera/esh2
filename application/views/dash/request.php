<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">requests Settings</p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Writer</th>
                        <th>Email</th>
                        <th>company</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($requests_num > 0) {
                        $x = 0;
                        foreach ($requests as $r) {
          
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><?php echo $r->r_name ?></td>
                                <td><?php echo $r->r_email ?></td>
                                <td><?php echo $r->r_company?></td>
                                <td>

                                    <a href="<?php echo base_url('dash/show_request/').$r->r_id ?>" class="btn btn-primary btn-sm"> <i class="feather icon-eye font-medium-2"></i> </a>
                                    <a href="<?php echo base_url('dash/del_request/').$r->r_id ?>" class="btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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