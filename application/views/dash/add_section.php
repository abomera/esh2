<div class="content-header row">
</div>
<div class="content-body">

    <form class="add_section" method="post">


        <div class="row">

            <div class="col-md-8">
                <div class="card lang-form" data-lang='English'>
                    <div class="card-header">
                        <b> Section Info & Content </b>
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