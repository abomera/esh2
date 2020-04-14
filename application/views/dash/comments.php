<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Comments Settings</p>
        </div>
        <div class="card-con">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Comment</th>
                        <th>Writer</th>
                        <th>Email</th>
                        <th>Article</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($comments_num > 0) {
                        $x = 0;
                        foreach ($comments as $comment) {
                            $where = array('a_id' => $comment->c_article);
                            $art = $this->data->get_data_where('articles', $where, 'a_id')->row();
                            $num = $this->data->get_data_where('articles', $where, 'a_id')->num_rows();
                    ?>
                            <tr>
                                <td width="5%"><?php echo ++$x ?></td>
                                <td><i class="fa fa-comment"></i> <?php echo $comment->c_comment ?></td>
                                <td><?php echo $comment->c_writer ?></td>
                                <td><?php echo $comment->c_email ?></td>
                                <td><?php echo ($num > 0) ? $art->a_title : 'Removed' ?></td>
                                <td>
                                    <?php
                                    if ($comment->c_status == 0) {
                                    ?>
                                        <a href="<?PHP echo base_url('dash/active_comment/' . $comment->c_id . '/enable') ?>" class="btn btn-success btn-sm"> <i class="feather icon-check font-medium-2"></i> </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="<?PHP echo base_url('dash/active_comment/' . $comment->c_id . '/disable') ?>" class="btn btn-warning btn-sm"> <i class="feather icon-pause-circle font-medium-2"></i> </a>
                                    <?php
                                    }
                                    ?>

                                    <a href="<?php echo base_url('dash/comment/').$comment->c_id ?>" class="btn btn-primary btn-sm"> <i class="feather icon-eye font-medium-2"></i> </a>
                                    <a href="#" data-id="<?php echo $comment->c_id ?>" class="del_comment btn btn-danger btn-sm"> <i class="feather icon-trash-2 font-medium-2"></i> </a>
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