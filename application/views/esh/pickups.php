<div class="<?php lang('', 'text-right') ?>">
    <h3> <?php lang('Pickup Inquiry', ' الاستفسار عن الاستلام ') ?> </h3>
    <div class="row">
        <?php
        if (count($call) > 0) {
            foreach ($call as $c) {
        ?>
                <div class="col-md-6 text-<?php lang('left','right')?>">
                    <div class="card" style="padding:15px;margin-bottom:10px;">
                        <p> <?php lang('Address','العنوان')?>: <?php echo $c->PickupAddress ?> </p>
                        <p> <?php lang('Phone','الهاتف')?>: <?php echo $c->Phone ?></p>
                        <p> <?php lang('Name','الاسم')?>: <?php echo $c->ContactPerson ?></p>
                        <p> <?php lang('Date','التاريخ')?>: <?php echo $c->PickupDate ?></p>
                        <p> <?php lang('Product Name','اسم المنتج')?>: <?php echo $c->ProductName ?></p>
                        <p> <?php lang('City','المدينه')?>: <?php echo $c->CityName ?></p>
                        <p> <?php lang('Notes',' ملاحظات ')?>: <?php echo $c->Notes ?></p>
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