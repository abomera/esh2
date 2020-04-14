<div class="content-header row">
</div>
<div class="content-body">

    <form class="add_price" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Add City </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> title </lable>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Price </lable>
                            <input type="text" name="price" class="form-control">
                            <input type="hidden" name="parent" value="<?php echo $type?>">
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