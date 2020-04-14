<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_section" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Section Info & Content  </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Title </lable>
                            <input type="text" name="title" value="<?php echo $row->c_title ?>" class="form-control title">
                        </div>
                        <div class="form-group">
                            <lable> Link </lable>
                            <input type="text" name="link" value="<?php echo $row->c_link ?>" class="form-control link">
                        </div>
                        <div class="form-group">
                            <lable> Tags </lable>
                            <input placeholder="press enter to add new tag" class="form-control v-tags">
                            <div class="tags">
                                <?php
                                $tags = explode(',', $row->c_tags);
                                foreach ($tags as $tag) {
                                    if ($tag == '') {
                                        continue;
                                    }
                                ?>
                                    <span><?php echo $tag; ?></span>

                                <?php
                                }
                                ?>
                            </div>
                            <input type="hidden" name="tags" class="h-tags" value="<?php echo $row->c_tags ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $row->c_id ?>">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <b>Seo</b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Description </lable>
                            <textarea name="desc" id="" cols="30" rows="4" class="form-control"><?php echo $row->c_desc ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable> Keywords </lable>
                            <textarea name="key" id="" cols="30" rows="4" class="form-control"><?php echo $row->c_keys ?></textarea>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>

</div>