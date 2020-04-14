<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">News letter Settings</p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($news_num > 0) {
                        $x = 0;
                        foreach ($news as $new) {
                          
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><?php echo $new->n_email ?></td>
                                <td>
                                    <a href="#" data-id="<?php echo $new->n_id ?>" class="del_news btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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