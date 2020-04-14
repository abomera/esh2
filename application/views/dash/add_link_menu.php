<div class="content-header row">
</div>
<div class="content-body">

    <form class="add_link_menu" method="post">


        <div class="row">

            <div class="col-md-12">

                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Link Info </b>
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
                                        <option value="<?php echo $pg->p_id ?>"><?php echo $pg->p_title ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group title">
                            <lable> Title </lable>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group title">
                            <lable> Arabic Title </lable>
                            <input type="text" name="ar_title" class="form-control">
                        </div>

                        <div class="normal-link title">
                            <div class="form-group">
                                <lable> Parent for </lable>
                                <select name="for" class="form-control for">
                                    <option value="0">None</option>
                                    <option value="1">Services</option>
                                </select>
                            </div>
                            <div class="form-group link">
                                <lable> Link </lable>
                                <input type="text" name="link" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>

</div>