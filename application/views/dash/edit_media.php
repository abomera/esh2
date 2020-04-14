<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_media" method="post">
        <div class="row">

            <div class="col-md-8">


                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Info & Content </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> title </lable>
                            <input type="text" name="title" onpaste="filters()" value="<?php echo $row->m_title ?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $row->m_id ?>" class="form-control">
                            <input type="hidden" name="type" value="<?php echo ($row->m_type == 1) ? 1 : 0; ?>" class="form-control ">

                        </div>
                        <div class="form-group">
                            <lable> arabic title </lable>
                            <input type="text" name="ar_title" onpaste="filters()" value="<?php echo $row->m_ar_title ?>" class="form-control">
                        </div>
                        <div class="form-group <?php echo ($row->m_type != 1) ? 'd-none' : '' ?>">
                            <lable> Video </lable>
                            <input type="text" name="video" onpaste="filters()" value="<?php echo $row->m_video ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable> albom </lable>
                            <select name="albom" class="form-control">
                                <?php
                                if ($albom_num > 0) {
                                    foreach ($albom as $a) {
                                ?>
                                        <option value="<?php echo $a->a_id ?>" <?php echo ($row->m_albom == $a->a_id) ? 'selected' : '' ?>> <?php echo $a->a_title ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
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
                        <img src="<?php echo base_url($row->m_img) ?>" class="img-fluid d-block mx-auto preview" style="height: 200px; object-fit: contain; margin-bottom: 10px; width: 100%;cursor:pointer;border:2px dashed #ccc;padding:10px">
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