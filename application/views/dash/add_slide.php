<div class="content-header row">
</div>
<div class="content-body">
    <form class="form form-vertical add_slide" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-8">
                <div class="langs" style="padding-bottom: 20px">
                    <?php
                    $langs = array('English', 'Arabic');
                    for ($i = 0; $i < count($langs); $i++) {
                    ?>
                        <a href="#" class="btn btn-info lang <?php echo ($i == 0) ? 'active' : 'title' ?>" data-lang="<?php echo $langs[$i] ?>"> <?php echo $langs[$i] ?> </a>
                    <?php
                    }
                    ?>
                    <br>
                </div>
                <div class="card lang-form d-none" data-lang='Arabic'>
                    <div class="card-header">
                        <b> Arabic Details </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group title">
                            <lable> Title </lable>
                            <input type="text" name="ar_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Tab Title </lable>
                            <input type="text" name="ar_tab_title" class="form-control img-inp">
                        </div>
                        <div class="form-group">
                            <lable> Content </lable>
                            <div class="editor">
                            </div>
                            <textarea name="ar_content" cols="30" rows="4" class="form-control page-content d-none"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b>Add Slide</b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable>Title </lable>
                            <input type="text" name="title" class="form-control img-inp">
                        </div>
                        <div class="form-group">
                            <lable> Link </lable>
                            <input type="text" name="link" class="form-control img-inp">
                        </div>
                        <div class="form-group">
                            <lable> Video Link </lable>
                            <input type="text" name="video_link" class="form-control img-inp">
                        </div>
                        <div class="form-group">
                            <lable> Tab Title </lable>
                            <input type="text" name="tab_title" class="form-control img-inp">
                        </div>
                        <div class="form-group">
                            <lable> Tab Icon </lable>
                            <input type="file" name="tab_icon" class="form-control img-inp">
                        </div>
                        <div class="form-group">
                            <lable> Content </lable>
                            <div class="editor2">
                            </div>
                            <textarea name="content" cols="30" rows="4" class="form-control page-content d-none"></textarea>
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Click On The Box To Select
                    </div>
                    <div class="card-con">
                        <img src="<?php echo base_url('assets/no-img.png') ?>" class="img-fluid d-block mx-auto preview" style="height: 200px; object-fit: contain; margin-bottom: 10px; width: 100%;cursor:pointer;border:2px dashed #ccc;padding:10px">
                        <p class="text-center file-name"></p>
                        2048 x 1365
                        <div class="form-group">
                            <input type="file" name="slide_img[]" class="form-control img-inp d-none">
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