<div class="content-header row">
</div>
<div class="content-body">

    <form class="settings" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Settings</b>
                    </div>
                    <div class="card-con">

                        <div class="form-group">
                            <lable> email </lable>
                            <input type="email" name="email" value="<?php echo $setting->s_email ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> mail from </lable>
                            <input type="text" name="s_sender_name" value="<?php echo $setting->s_sender_name ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> phone </lable>
                            <input type="text" name="phone" value="<?php echo $setting->s_phone ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> facebook </lable>
                            <input type="text" name="fb" value="<?php echo $setting->s_fb ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> twetter </lable>
                            <input type="text" name="tw" value="<?php echo $setting->s_tw ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> instagram </lable>
                            <input type="text" name="insta" value="<?php echo $setting->s_insta ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> linked in </lable>
                            <input type="text" name="in" value="<?php echo $setting->s_in ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> video link </lable>
                            <input type="text" name="video_link" value="<?php echo $setting->s_video_link ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Km Driven</lable>
                            <input type="text" name="km" value="<?php echo $setting->s_km ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Delivered Goods </lable>
                            <input type="text" name="dlev" value="<?php echo $setting->s_dlev ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> clients </lable>
                            <input type="text" name="clients" value="<?php echo $setting->s_clients ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> About Page</b>
                    </div>
                    <div class="card-con">

                        <div class="form-group">
                            <lable> Who We Are? </lable>
                            <div class="editor3"><?php echo $setting->s_who ?>
                            </div>
                            <textarea name="s_who" class="form-control d-none page-content"><?php echo $setting->s_who ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> arabic Who We Are? </lable>
                            <div class="editor4"><?php echo $setting->s_ar_who ?>
                            </div>
                            <textarea name="s_ar_who" class="form-control d-none page-content"><?php echo $setting->s_ar_who ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> Our Vision </lable>
                            <div class="editor5"><?php echo $setting->s_vision ?>
                            </div>
                            <textarea name="s_vision" class="form-control d-none page-content"><?php echo $setting->s_vision ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> arabic Our Vision </lable>
                            <div class="editor6"><?php echo $setting->s_ar_vision ?>
                            </div>
                            <textarea name="s_ar_vision" class="form-control d-none page-content"><?php echo $setting->s_ar_vision ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> Our Mission </lable>
                            <div class="editor7"><?php echo $setting->s_mission ?>
                            </div>
                            <textarea name="s_mission" class="form-control d-none page-content"><?php echo $setting->s_mission ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> arabic Our Mission </lable>
                            <div class="editor8"><?php echo $setting->s_ar_mission ?>
                            </div>
                            <textarea name="s_ar_mission" class="form-control d-none page-content"><?php echo $setting->s_ar_mission ?></textarea>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Downloads</b>
                    </div>
                    <div class="card-con">

                        <div class="form-group">
                            <lable> <?php echo $setting->s_title_13 ?> </lable>
                            <input type="file" name="pdf" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> <?php echo $setting->s_title_14 ?> </lable>
                            <input type="file" name="pdf1" class="form-control">
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> titles</b>
                    </div>
                    <div class="card-con">

                        <div class="form-group">
                            <input type="text" name="s_title_1" value="<?php echo $setting->s_title_1 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_2" value="<?php echo $setting->s_title_2 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_3" value="<?php echo $setting->s_title_3 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_4" value="<?php echo $setting->s_title_4 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_5" value="<?php echo $setting->s_title_5 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_6" value="<?php echo $setting->s_title_6 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_7" value="<?php echo $setting->s_title_7 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_8" value="<?php echo $setting->s_title_8 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_9" value="<?php echo $setting->s_title_9 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_10" value="<?php echo $setting->s_title_10 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_11" value="<?php echo $setting->s_title_11 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_12" value="<?php echo $setting->s_title_12 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_13" value="<?php echo $setting->s_title_13 ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="s_title_14" value="<?php echo $setting->s_title_14 ?>" class="form-control">
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Covers</b>
                    </div>
                    <div class="card-con">

                        <div class="form-group">
                            <lable> About Us Cover </lable>
                            <input type="file" name="s_cover_1" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Services Cover </lable>
                            <input type="file" name="s_cover_2" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Partners Cover </lable>
                            <input type="file" name="s_cover_3" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Photos Cover </lable>
                            <input type="file" name="s_cover_4" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Videos Cover </lable>
                            <input type="file" name="s_cover_5" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> News & Events Cover </lable>
                            <input type="file" name="s_cover_6" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Request A Quote</lable>
                            <input type="file" name="s_cover_10" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Track Shipment Cover </lable>
                            <input type="file" name="s_cover_7" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Frequently Asked Questions Cover </lable>
                            <input type="file" name="s_cover_8" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable> Contact Us Cover </lable>
                            <input type="file" name="s_cover_9" class="form-control">
                        </div>




                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Seo</b>
                    </div>
                    <div class="card-con">

                        <div class="form-group">
                            <lable> discription </lable>
                            <textarea name="s_desc" class="form-control"><?php echo $setting->s_desc ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> arabic discription </lable>
                            <textarea name="s_ar_desc" class="form-control"><?php echo $setting->s_ar_desc ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> keywords </lable>
                            <textarea name="s_keys" class="form-control"><?php echo $setting->s_keys ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> arabic keywords </lable>
                            <textarea name="s_ar_keys" class="form-control"><?php echo $setting->s_ar_keys ?></textarea>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Footer About</b>
                    </div>
                    <div class="card-con">

                        <div class="form-group">
                            <lable> footer about </lable>
                            <textarea name="s_short_about" class="form-control"><?php echo $setting->s_short_about ?></textarea>
                        </div>

                        <div class="form-group">
                            <lable> arabic footer about </lable>
                            <textarea name="s_ar_short_about" class="form-control"><?php echo $setting->s_ar_short_about ?></textarea>
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