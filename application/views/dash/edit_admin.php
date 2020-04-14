<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_admin" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Edit Admin </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Name </lable>
                            <input type="text" name="name" value="<?php echo $row->a_name ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Password </lable>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Email </lable>
                            <input type="email" name="email" value="<?php echo $row->a_email ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Group </lable>
                            <select name="group" class="form-control">
                                <?php
                                if ($groups_num > 0) {
                                    foreach ($groups as $g) {
                                ?>
                                        <option value="<?php echo $g->g_id ?>" <?php echo ($g->g_id == $row->a_group)?'selected':''?>><?php echo $g->g_title ?></option>

                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $row->a_id?>">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>

</div>