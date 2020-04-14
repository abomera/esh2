<div class="row <?php lang('', 'text-right') ?>">
    <div class="col-md-8">
        <form class="fees">
            <h3> <?php lang('Calculate Fees', 'حساب الرسوم') ?></h3>
            <div class="form-group">
                <lable> <?php lang('Weight', 'الوزن') ?></lable>
                <input type="text" class="form-control" name="w">
            </div>

            <div class="form-group">
                <lable> <?php lang('Cash On delivery', 'الدفع عند الاتصال') ?></lable>
                <input type="text" class="form-control" name="cod">
            </div>

            <div class="form-group">
                <lable> <?php lang('Product', 'المنتج') ?></lable>
                <select type="text" class="form-control" name="id">
                    <?php
                    $countP = count($products);
                    if ($countP != 0) {
                        foreach ($products as $p) {
                    ?>
                            <option value="<?php echo $p->ProductID ?>"><?php echo $p->ProductName ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <lable> <?php lang('City', 'المدينه') ?></lable>
                <select type="text" class="form-control" name="city">
                    <?php
                    echo $countC = count($citis);
                    if ($countC != 0) {
                        foreach ($citis as $c) {
                    ?>
                            <option value="<?php echo $c->CityID ?>"><?php echo $c->CityName ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn__secondary btn__block"><?php lang('Request A Quote', 'طلب سعر') ?></button>
        </form>
    </div>
    <div class="col-md-4">
        <h3> <?php lang('Summary', 'المجموع') ?></h3>
        <?php lang('Free Kilos', 'كيلومترات مجانيه') ?> : <span class="km"> 0 </span> <?php lang('KM', 'كم') ?>
        <hr>
        <?php lang('Delivery Fees', 'رسوم التوصيل') ?> : <span class="df"> 0 </span> EGP <?php lang('', '') ?>
        <hr>
        <?php lang('Extra Weight Fees', 'رسوم الحجم الزائد') ?> : <span class="ewf"> 0 </span> <?php lang('EGP', 'جنيه') ?>
        <hr>
        <?php lang('Cash On delivery Fees', 'رسوم الدفع عند التوصيل') ?> : <span class="codf"> 0 </span> <?php lang('EGP', 'جنيه') ?>
        <hr>
        <?php lang('Total', 'المجموع') ?> : <span class="total"> 0 </span> <?php lang('EGP', 'جنيه') ?>
    </div>
</div>

<script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url('assets/esh/') ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/esh/') ?>assets/js/plugins.js"></script>

<script src="<?php echo base_url('assets/esh/') ?>assets/js/pick.js"></script>