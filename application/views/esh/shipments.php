<div class="<?php lang('', 'text-right') ?>">
    <h3> <?php lang('Shipments', ' الشحنات') ?> </h3>
    <hr>
    <div class="row">
        <?php
     
        if (count($call) > 0) {
            foreach ($call as $c) {
                ?>
                <div class="col-md-6 text-<?php lang('left','right')?>">
                    <div class="card" style="padding:15px;margin-bottom:10px;">
                        <p> AWb : <?php echo $c->AWB ?> </p>
                        <p> <?php lang('Address (From)',' العنوان من')?>: <?php echo $c->FromAddress ?> </p>
                        <p> <?php lang('Phone (From)','الهاتف')?>: <?php echo $c->FromPhone ?></p>
                        <p> <?php lang('Name (From)','الاسم')?>: <?php echo $c->FromContactPerson ?></p>
                        <p> <?php lang('City (From)','من مدينة')?>: <?php echo $c->FromCityName ?></p>
                        <p> <?php lang('Address (To)',' العنوان الى')?>: <?php echo $c->ToAddress ?> </p>
                        <p> <?php lang('Phone (To)','الهاتف')?>: <?php echo $c->ToPhone ?></p>
                        <p> <?php lang('Name (To)','الاسم')?>: <?php echo $c->ToContactPerson ?></p>
                        <p> <?php lang('City (To)','الى مدينة')?>: <?php echo $c->ToCityName ?></p>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="col-12 alert primary"> Shipments Are 0 </div>
        <?php
        }
        ?>

    </div>
</div>