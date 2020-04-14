<div class="content-header row">
</div>
<div class="content-body">

    <form class="add_service" method="post">
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
                            <lable> Overview </lable>
                            <textarea name="ar_over" cols="30" rows="4" class="form-control page-content "></textarea>
                        </div>
                        <div class="form-group">
                            <lable> How It Works?! </lable>
                            <textarea name="ar_how" cols="30" rows="4" class="form-control page-content "></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Description </lable>
                            <textarea name="ar_desc" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Keywords </lable>
                            <textarea name="ar_key" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Info & Content </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> title </lable>
                            <input type="text" name="title" onpaste="filters()" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> video </lable>
                            <input type="text" name="video" class="form-control ">
                        </div>
                        <div class="form-group">
                            <lable> icon </lable>
                            <input type="file" name="icon" class="form-control ">
                        </div>
                        <div class="form-group">
                            <lable> Show On Index </lable>
                            <select name="on" class="form-control">
                                <option value="0"> Off </option>
                                <option value="1"> On </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <lable> Overview </lable>
                            <textarea name="over" cols="30" rows="4" class="form-control page-content "></textarea>
                        </div>
                        <div class="form-group">
                            <lable> How It Works?! </lable>
                            <textarea name="how" cols="30" rows="4" class="form-control page-content "></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Tags </lable>
                            <input placeholder="press enter to add new tag" class="form-control v-tags">
                            <div class="tags">

                            </div>
                            <input type="hidden" name="tags" class="h-tags" value="">
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
                        964 x 500
                        <div class="form-group">
                            <input type="file" name="img" class="form-control img-inp d-none">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <b>Seo</b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Description </lable>
                            <textarea name="desc" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Keywords </lable>
                            <textarea name="key" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </form>

</div>