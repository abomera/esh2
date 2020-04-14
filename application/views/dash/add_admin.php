<div class="content-header row">
</div>
<div class="content-body">

    <form class="add_admin" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Add Admin </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Name </lable>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Password </lable>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Email </lable>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Group </lable>
                            <select name="group" class="form-control">
                                <?php
                                if ($groups_num > 0) {
                                    foreach ($groups as $g) {
                                ?>
                                <option value="<?php echo $g->g_id?>"><?php echo $g->g_title?></option>

                                <?php
                                    }
                                }
                                ?>
                            </select>
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