<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <p class="pull-left">Menu Settings</p>
            <p class="pull-right">
                <a href="<?php echo base_url('dash/add_link_menu') ?>" class="btn-info btn btn-sm">Add New Link</a>
            </p>
        </div>
        <div class="card-con">
            <div class="dd" style="width:100%;max-width:100%">
                <ol class="dd-list">
                    <?php

                    function cat_tree($menu, $parent, $title,  $type, $model)
                    {
                        $where = array('m_parent' => $parent);
                        $num = $model->get_data_where('menu', $where, 'm_id')->num_rows();
                        $childs = $model->get_data_where('menu', $where, 'm_id')->result();
                        if($menu->m_link_type != 1 and $menu->m_link_type != 0){
                            $where = array('p_id' => $menu->m_link_type);
                            $page = $model->data->get_data_where('pages', $where, 'p_id')->row();
                            $page_num = $model->data->get_data_where('pages', $where, 'p_id')->num_rows();
                            $title = $page->p_title;
                        }
                        if ($num > 0) {
                    ?>
                            <li class="dd-item dd3-item" data-id="<?php echo $parent ?>">
                                <div class="dd-handle dd3-handle"> </div>
                                <div class="dd3-content"><?php echo $title ?>
                                    <div class="pull-right">

                                        <a href="<?php echo base_url('dash/') ?><?php echo ($type == 0) ? 'edit_menu' : 'edit_link_menu' ?>/<?php echo $parent ?>"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="del_menu" data-id="<?php echo $parent ?>"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                                <ol class="dd-list">
                                    <?php
                                    foreach ($childs as $child) {
                                    ?>
                                    <?php
                                        cat_tree($child, $child->m_id, $child->m_title, $child->m_type, $model);
                                    }
                                    ?>
                                </ol>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="dd-item dd3-item" data-id="<?php echo $parent ?>">
                                <div class="dd-handle dd3-handle "> </div>
                                <div class="dd3-content"><?php echo $title ?>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('dash/') ?><?php echo ($type == 0) ? 'edit_menu' : 'edit_link_menu' ?>/<?php echo $parent ?>"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="del_menu" data-id="<?php echo $parent ?>"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                    <?php
                        }
                    }

                    if ($menus_num > 0) {
                        $x = 0;
                        foreach ($menus as $menu) {
                            $where = array('m_parent' => $menu->m_id);
                            $num = $this->data->get_data_where('menu', $where, 'm_id')->num_rows();
                            $childs = $this->data->get_data_where('menu', $where, 'm_id')->result();
                            cat_tree($menu, $menu->m_id, $menu->m_title, $menu->m_type, $model);
                        }
                    }
                    ?>

                </ol>
            </div>

        </div>
    </div>

</div>