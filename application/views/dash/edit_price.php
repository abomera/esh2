<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_price" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> edit City </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> title </lable>
                            <input type="text" name="title" value="<?php echo $row->c_title?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Price </lable>
                            <input type="text" name="price" value="<?php echo $row->c_price?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $row->c_id?>">
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