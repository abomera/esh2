<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_branch" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> edit branch </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Name </lable>
                            <input type="text" name="name" value="<?php echo $row->b_name?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Arabic Name </lable>
                            <input type="text" name="ar_name" value="<?php echo $row->b_ar_name?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Email </lable>
                            <input type="email" name="email" value="<?php echo $row->b_email?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> phone </lable>
                            <input type="text" name="phone" value="<?php echo $row->b_phone?>" class="form-control">
                        </div>
                     
                        <div class="form-group">
                            <lable> address </lable>
                            <input type="text" name="address" value="<?php echo $row->b_address?>" class="form-control">
                        </div>
                     
                        <div class="form-group">
                            <lable> Arabic address </lable>
                            <input type="text" name="ar_address" value="<?php echo $row->b_ar_address?>" class="form-control">
                        </div>
                     
                        <div class="form-group">
                            <lable> hours </lable>
                            <input type="text" name="hours" value="<?php echo $row->b_hours?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $row->b_id?>" class="form-control">
                        </div>
                     
                        <div class="form-group">
                            <lable> location </lable>
                            <input type="text" name="location" value="<?php echo $row->b_location?>" class="form-control">
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