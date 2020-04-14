<div class="content-header row">
</div>
<div class="content-body">
    <form class="form form-vertical add_client" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Click On The Box To Select
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


            <div class="col-12">
                <div class="card">
                    <div class="card-con">
                        <button type="submit" class="btn-block btn-primary btn">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </form>

</div>