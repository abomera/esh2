<div class="content-header row">
</div>
<div class="content-body">

    <form class="add_page" method="post">
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
                            <lable> Content </lable>
                            <div class="editor2">
                            </div>
                            <textarea name="ar_content" cols="30" rows="4" class="form-control page-content d-none"></textarea>
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
                        <b> Page Info & Content </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Title </lable>
                            <input type="text" name="title" onpaste="filters()" class="form-control title">
                        </div>
                        <div class="form-group">
                            <lable> Link </lable>
                            <input type="text" name="link" class="form-control link">
                        </div>
                        <div class="form-group">
                            <lable> Position </lable>
                            <select name="pos" class="form-control">
                                <option value="0"> Navbar </option>
                                <option value="1"> Footer </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <lable> Content </lable>
                            <div class="editor">
                            </div>
                            <textarea name="content" cols="30" rows="4" class="form-control page-content d-none"></textarea>
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
                        1350 x 500
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