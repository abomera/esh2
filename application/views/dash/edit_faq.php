<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_faq" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> edit faq </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> title </lable>
                            <input type="text" value="<?php echo $row->f_q?>" name="q" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Arabic title </lable>
                            <input type="text" value="<?php echo $row->f_ar_q?>" name="ar_q" class="form-control">
                            <input type="hidden" value="<?php echo $row->f_id?>" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> answer </lable>
                            <textarea name="a" class="form-control"><?php echo $row->f_a?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Arabic answer </lable>
                            <textarea name="ar_a" class="form-control"><?php echo $row->f_ar_a?></textarea>
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