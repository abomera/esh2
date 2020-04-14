<div class="col-sm-12 col-md-12 col-lg-8 <?php lang('', 'text-right') ?>">
    <form class="request-quote-form" action="<?php echo base_url('home/track'); ?>" method="post">
        <div class="row mb-30">

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label><?php lang('Tracking Number', 'رقم التتبع') ?></label>
                    <div class="form-group">
                        <textarea class="form-control" name="numbers" placeholder="xxxxxxxxx,xxxxxxxxx,xxxxxxxxx,.....x100"></textarea>
                    </div>
                </div>
            </div><!-- /.col-lg-12 -->

        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <button type="submit" class="btn btn__secondary btn__block"><?php lang('Track Shipment', 'تتبع') ?></button>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </form>
</div><!-- /.col-lg-8 -->