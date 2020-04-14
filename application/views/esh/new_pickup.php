<form class="new_pickup <?php lang('', 'text-right') ?>">
  <h3>  <?php lang('Add New Pick up', ' اضافة بيكاب جديد') ?> </h3>
  <div class="form-group">
    <lable>  <?php lang('Number of awbs', 'رقم AWB') ?></lable>
    <input type="text" class="form-control" name="awb">
  </div>

  <div class="form-group">
    <lable>  <?php lang('Pickup address', 'عنوان الشحن') ?></lable>
    <input type="text" class="form-control" name="address">
  </div>

  <div class="form-group">
    <lable>  <?php lang('Phone', 'الهاتف') ?></lable>
    <input type="text" class="form-control" name="phone">
  </div>

  <div class="form-group">
    <lable>  <?php lang('Contact Person', 'الاسم') ?></lable>
    <input type="text" class="form-control" name="contact">
  </div>

  <div class="form-group">
    <lable>  <?php lang('Pickup Date', 'تاريخ الشحن') ?></lable>
    <input type="text" class="form-control" name="date">
  </div>

  <div class="form-group">
    <lable>  <?php lang('Product', 'المنتج') ?></lable>
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
    <lable> <?php lang('City', 'المدينه') ?> </lable>
    <select type="text" class="form-control" name="city">
      <?php
      $countC = count($citis);
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

  <div class="form-group">
    <lable>  <?php lang('Notes', 'ملاحظات') ?></lable>
    <textarea type="text" class="form-control" name="notes"></textarea>
  </div>

  <button type="submit" class="btn btn__secondary btn__block"><?php lang('ADD', 'اضف') ?></button>
</form>

<script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url('assets/esh/') ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/esh/') ?>assets/js/plugins.js"></script>

<script src="<?php echo base_url('assets/esh/') ?>assets/js/pick.js"></script>