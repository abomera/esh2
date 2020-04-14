<div class="content-header row">
</div>
<div class="content-body">

    <div class="card">
        <div class="card-header">
            <b> </b>
        </div>
        <div class="card-con">
            <p><b>Writer : </b> <?php echo $row->c_writer ?> </p>
            <p><b>Email : </b> <?php echo $row->c_email ?> </p>
            <p><b>Article : </b> <?php echo ($article_num > 0)? $article->a_title:'Removed' ?></p>
            <p><b>Comment : </b> <?php echo $row->c_comment ?> </p>
        </div>
    </div>

</div>