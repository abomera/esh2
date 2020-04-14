<div class="content-header row">
</div>
<div class="content-body">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Personal Data</h3>
                </div>
                <div class="card-con">
                    <p><b>Name : </b> <?php echo $row->r_name ?> </p>
                    <p><b>Email : </b> <?php echo $row->r_email ?> </p>
                    <p><b>Phone : </b> <?php echo $row->r_phone ?></p>
                    <p><b>company : </b> <?php echo $row->r_company ?></p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Item To Be Shipped </h3>
                </div>
                <div class="card-con">
                    <p><b>Weight : </b> <?php echo $row->r_weight ?> KG</p>
                    <p><b>Qty : </b> <?php echo $row->r_qty ?> Units</p>
                    <p><b>Length : </b> <?php echo $row->r_length ?> CM</p>
                    <p><b>Width : </b> <?php echo $row->r_width ?> CM</p>
                    <p><b>Height : </b> <?php echo $row->r_height ?> CM</p>
                    <p> <?php echo $row->r_stack ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Pickup Address</h3>
                </div>
                <div class="card-con">
                    <p><b>Street : </b> <?php echo $row->r_street ?> </p>
                    <p><b>Country : </b> <?php echo $row->r_country ?> </p>
                    <p><b>City : </b> <?php echo $row->r_city ?></p>
                    <p><b>ZIP : </b> <?php echo $row->r_zip ?></p>
                    <p> <?php echo $row->r_lift ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Drop-Off Address</h3>
                </div>
                <div class="card-con">
                    <p><b>Street : </b> <?php echo $row->r_d_street ?> </p>
                    <p><b>Country : </b> <?php echo $row->r_d_country ?> </p>
                    <p><b>City : </b> <?php echo $row->r_d_city ?></p>
                    <p><b>ZIP : </b> <?php echo $row->r_d_zip ?></p>
                    <p> <?php echo $row->r_d_call ?></p>
                </div>
            </div>
        </div>

    </div>

</div>