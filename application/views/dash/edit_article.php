<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_article" method="post">
        <div class="row">

            <div class="col-md-8">
                <div class="langs" style="padding-bottom: 20px">
                    <?php
                    $langs = array('English', 'Arabic');
                    for ($i = 0; $i < count($langs); $i++) {
                    ?>
                        <a href="#" class="btn btn-info lang active" data-lang="<?php echo $langs[$i] ?>"> <?php echo $langs[$i] ?> </a>
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
                        <div class="form-group">
                            <lable> Title </lable>
                            <input type="text" name="ar_title" onpaste="filters()" value="<?php echo $row->a_ar_title ?>" class="form-control title">
                        </div>
                        <div class="form-group">
                            <lable> Content </lable>
                            <div class="editor2">
                                <?php echo $row->a_ar_desc ?>
                            </div>
                            <textarea name="ar_content" cols="30" rows="4" class="form-control page-content d-none"><?php echo $row->a_ar_desc ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Description </lable>
                            <textarea name="ar_desc" id="" cols="30" rows="4" class="form-control"><?php echo $row->a_ar_seo_desc ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Keywords </lable>
                            <textarea name="ar_key" id="" cols="30" rows="4" class="form-control"><?php echo $row->a_ar_seo_keys ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Article Info & Content (English) </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Title </lable>
                            <input type="text" name="title" value="<?php echo $row->a_title ?>" onpaste="filters()" class="form-control title">
                        </div>
                        <div class="form-group">
                            <lable> Link </lable>
                            <input type="text" name="link" value="<?php echo $row->a_link ?>" class="form-control link">
                        </div>
                        <div class="form-group">
                            <lable> Section </lable>
                            <select name="pos" class="form-control">
                                <?php
                                if ($sections_num > 0) {
                                    foreach ($sections as $section) {
                                ?>
                                        <option value="<?php echo $section->c_id ?>" <?php echo ($section->c_id == $row->a_cat) ? 'selected' : '' ?>> <?php echo $section->c_title ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <lable> Content </lable>
                            <div class="editor">
                                <?php echo $row->a_desc ?>
                            </div>
                            <textarea name="content" cols="30" rows="4" class="form-control page-content d-none"><?php echo $row->a_desc ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Tags </lable>
                            <input placeholder="press enter to add new tag" class="form-control v-tags">
                            <div class="tags">
                                <?php
                                $tags = explode(',', $row->a_tags);
                                foreach ($tags as $tag) {
                                    if ($tag == '') {
                                        continue;
                                    }
                                ?>
                                    <span><?php echo $tag; ?></span>
                                    <script>
                                        tags.push('<?php echo $tag ?>');
                                    </script>
                                <?php
                                }
                                ?>
                            </div>
                            <input type="hidden" name="tags" class="h-tags" value="<?php echo $row->a_tags ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $row->a_id ?>">
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
                        <img src="<?php echo base_url($row->a_img) ?>" class="img-fluid d-block mx-auto preview" style="height: 200px; object-fit: contain; margin-bottom: 10px; width: 100%;cursor:pointer;border:2px dashed #ccc;padding:10px">
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
                            <textarea name="desc" id="" cols="30" rows="4" class="form-control"><?php echo $row->a_seo_desc ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Keywords </lable>
                            <textarea name="key" id="" cols="30" rows="4" class="form-control"><?php echo $row->a_seo_keys ?></textarea>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>

</div>