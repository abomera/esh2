<div class="content-header row">
</div>
<div class="content-body">

    <form class="add_testimonial" method="post">
        <div class="row">

            <div class="col-md-8">

               
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b>  Info & Content </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Name </lable>
                            <input type="text" name="title" onpaste="filters()" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> company </lable>
                            <input type="text" name="company" class="form-control ">
                        </div>
                        <div class="form-group">
                            <lable> comment </lable>
                            <textarea name="comment" cols="30" rows="4" class="form-control page-content "></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <b>Click On The Box To Select Image</b>
                    </div>
                    <div class="card-con">
                        <img src="<?php echo base_url('assets/no-img.png') ?>" class="img-fluid d-block mx-auto preview" style="height: 200px; object-fit: contain; margin-bottom: 10px; width: 100%;cursor:pointer;border:2px dashed #ccc;padding:10px">
                        <p class="text-center file-name"></p>

                        <div class="form-group">
                            <input type="file" name="img" class="form-control img-inp d-none">
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </form>

</div>