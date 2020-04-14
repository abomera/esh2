<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_albom" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> edit albom </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Name </lable>
                            <input type="text" name="name" value="<?php echo $row->a_title?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $row->a_id?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Arabic Name </lable>
                            <input type="text" name="ar_name" value="<?php echo $row->a_ar_title?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> For </lable>
                            <select name="type" class="form-control">
                                <option value="0" <?php echo ($row->a_type == 0)?'selected':''?>> Images </option>
                                <option value="1" <?php echo ($row->a_type == 1)?'selected':''?>> Videos </option>
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