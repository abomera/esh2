<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_link_menu" method="post">


        <div class="row">

            <div class="col-md-12">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Link Info & Content (English) </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Type </lable>
                            <select name="type" class="form-control type">
                                <option value="0">External Link</option>
                                <option value="1">Internal Link</option>
                                <?php
                                if ($pages_num > 0) {
                                    foreach ($pages as $pg) {
                                ?>
                                        <option value="<?php echo $pg->p_id ?>" <?php echo ($pg->p_id == $row->m_link_type) ? 'selected' : '' ?>><?php echo $pg->p_title ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group title" <?php echo ($row->m_link_type != 0 or $row->m_link_type != 1) ? 'style="display:none"' : '' ?>>
                            <lable> Title </lable>
                            <input type="text" name="title" value="<?php echo $row->m_title ?>" onpaste="filters()" class="form-control">
                        </div>
                        <div class="form-group title" <?php echo ($row->m_link_type != 0 or $row->m_link_type != 1) ? 'style="display:none"' : '' ?>>
                            <lable> Arabic Title </lable>
                            <input type="text" name="ar_title" value="<?php echo $row->m_ar_title ?>" class="form-control">
                        </div>
                        <div class="normal-link title" <?php echo ($row->m_link_type != 0 or $row->m_link_type != 1) ? 'style="display:none"' : '' ?>>
                            <div class="form-group">
                                <lable> Parent for </lable>
                                <select name="for" class="form-control for">
                                    <option value="0" <?php echo ($row->m_parent_for == 0) ? 'selected' : '' ?>>None</option>
                                    <option value="1" <?php echo ($row->m_parent_for == 1) ? 'selected' : '' ?>>Services</option>
                                </select>
                            </div>
                            <div class="form-group link" <?php echo ($row->m_parent_for != 0) ? 'style="display:none"' : '' ?>>
                                <lable> Link </lable>
                                <input type="text" name="link" value="<?php echo $row->m_link ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $row->m_id ?>">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>

</div>