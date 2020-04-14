<div class="content-header row">
</div>
<div class="content-body">

    <form class="edit_group" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Edit Group </b>
                    </div>
                    <div class="card-con">
                        <div class="form-group">
                            <lable> Title </lable>
                            <input type="text" name="title" value="<?php echo $row->g_title ?>" class="form-control">
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" id="Slider" <?php echo ($row->g_slider == 1) ? 'checked' : '' ?> name="slider">
                            <span class="switch-label">Slider: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="Slider">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_pages == 1) ? 'checked' : '' ?> id="Pages" name="pages">
                            <span class="switch-label">Pages: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="Pages">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_blog == 1) ? 'checked' : '' ?> id="Blog" name="blog">
                            <span class="switch-label">Blog: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="Blog">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_menu == 1) ? 'checked' : '' ?> id="Menu" name="menu">
                            <span class="switch-label">Menu: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="Menu">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_clients == 1) ? 'checked' : '' ?> id="Clients" name="clients">
                            <span class="switch-label">Clients: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="Clients">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_services == 1) ? 'checked' : '' ?> id="Services" name="services">
                            <span class="switch-label">Services: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="Services">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_settings == 1) ? 'checked' : '' ?> id="settings" name="settings">
                            <span class="switch-label">settings: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="settings">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_media == 1) ? 'checked' : '' ?> id="media" name="media">
                            <span class="switch-label">media: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="media">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_branchs == 1) ? 'checked' : '' ?> id="branch" name="branch">
                            <span class="switch-label">branch: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="branch">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_contact == 1) ? 'checked' : '' ?> id="contact" name="contact">
                            <span class="switch-label">contact: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="contact">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_news == 1) ? 'checked' : '' ?> id="news" name="news">
                            <span class="switch-label">news letter: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="news">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_faq == 1) ? 'checked' : '' ?> id="faq" name="faq">
                            <span class="switch-label">faq: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="faq">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_partners == 1) ? 'checked' : '' ?> id="partners" name="partners">
                            <span class="switch-label">partners: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="partners">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_testimonials == 1) ? 'checked' : '' ?> id="testimonials" name="testimonials">
                            <span class="switch-label">testimonials: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="testimonials">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_request == 1) ? 'checked' : '' ?> id="request" name="request">
                            <span class="switch-label">request: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="request">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_send == 1) ? 'checked' : '' ?> id="send" name="send">
                            <span class="switch-label">send email: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="send">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_prices == 1) ? 'checked' : '' ?> id="prices" name="prices">
                            <span class="switch-label">prices: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="prices">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_careers == 1) ? 'checked' : '' ?> id="careers" name="careers">
                            <span class="switch-label">careers: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="careers">
                            </label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline" style="margin-bottom:20px">
                            <input type="checkbox" class="custom-control-input" <?php echo ($row->g_admin == 1) ? 'checked' : '' ?> id="Admin" name="admin">
                            <span class="switch-label">Admin: &nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <label class="custom-control-label" for="Admin">
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $row->g_id ?>">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>

</div>