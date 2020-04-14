<div class="<?php lang('', 'text-right') ?>">
    <h3> <?php lang('Orders History', 'عرض الطلبات') ?> </h3>
    <div class="row">
        <?php
        if (count($call) > 0) {
            foreach ($call as $c) {
                // print_r($c);
        ?>
                <div class="col-md-6 text-center">
                    <div class="card" style="padding:15px;margin-bottom:10px;">
                        <h5> AWB : <?php echo $c->AWB ?> </h5>
                        <p> <?php echo $c->Adress ?></p>
                        <p> <?php echo $c->Mobile ?></p>
                        <p> <?php echo $c->Status ?></p>
                        <form action="<?php echo base_url('home/track'); ?>" method="post">
                            <input type="hidden" name="numbers" value="<?php echo $c->AWB ?>">
                            <input type="submit" value="<?php lang('Track Shipment', 'تتبع') ?>" class="btn btn__primary btn__hover3">
                        </form>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="alert primary"> Orders Are 0 </div>
        <?php
        }
        ?>

    </div>
</div>