<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_service" method="post">
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
                            <input type="text" name="ar_title" value="<?php echo $row->s_ar_title ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> Overview </lable>
                            <textarea name="ar_over" cols="30" rows="4" class="form-control page-content "><?php echo $row->s_ar_over ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> How It Works?! </lable>
                            <textarea name="ar_how" cols="30" rows="4" class="form-control page-content "><?php echo $row->s_ar_how ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Description </lable>
                            <textarea name="ar_desc" id="" cols="30" rows="4" class="form-control"><?php echo $row->s_ar_desc ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Keywords </lable>
                            <textarea name="ar_key" id="" cols="30" rows="4" class="form-control"><?php echo $row->s_ar_keys ?></textarea>
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
                            <input type="text" name="title" onpaste="filters()" value="<?php echo $row->s_title ?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $row->s_id ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> video </lable>
                            <input type="text" name="video" value="<?php echo $row->s_video_link ?>" class="form-control ">
                        </div>
                        <div class="form-group">
                            <lable> icon </lable>
                            <input type="file" name="icon" class="form-control ">
                        </div>
                        <div class="form-group">
                            <lable> Show On Index </lable>
                            <select name="on" class="form-control">
                                <option value="0" <?php echo ($row->s_on_index == 0) ? 'selected' : '' ?>> Off </option>
                                <option value="1" <?php echo ($row->s_on_index == 1) ? 'selected' : '' ?>> On </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <lable> Overview </lable>
                            <textarea name="over" cols="30" rows="4" class="form-control page-content "><?php echo $row->s_over ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> How It Works?! </lable>
                            <textarea name="how" cols="30" rows="4" class="form-control page-content "><?php echo $row->s_how ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Order </lable>
                            <select name="order" class="form-control">
                                <?php
                                if ($services_num > 0) {
                                    for ($i = 1; $i <= $services_num; $i++) {
                                ?>
                                        <option value="<?php echo $i ?>" <?php echo ($row->s_order == $i) ? 'selected' : '' ?>><?php echo $i ?></option>

                                    <?php
                                    }
                                } else {
                                    ?>
                                    <option value="0">0</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <lable> Tags </lable>
                            <input placeholder="press enter to add new tag" class="form-control v-tags">
                            <div class="tags">
                                <?php
                                $tags = explode(',', $row->s_tags);
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

                            <input type="hidden" name="tags" class="h-tags" value="<?php echo $row->s_tags ?>">
                            <input type="hidden" name="page_id" value="<?php echo $row->s_id ?>">
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
                        <img src="<?php echo base_url($row->s_cover) ?>" class="img-fluid d-block mx-auto preview" style="height: 200px; object-fit: contain; margin-bottom: 10px; width: 100%;cursor:pointer;border:2px dashed #ccc;padding:10px">
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
                            <textarea name="desc" id="" cols="30" rows="4" class="form-control"><?php echo $row->s_desc ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Keywords </lable>
                            <textarea name="key" id="" cols="30" rows="4" class="form-control"><?php echo $row->s_keys ?></textarea>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </form>

</div>