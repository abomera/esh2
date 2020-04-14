<form class="add_shipment <?php lang('','text-right')?>">
  <h3>  <?php lang('Add New Shipment','اضافة شحنه جديده')?></h3>

  <div>
    <h5 class="form__title"><?php lang('From Information', 'بيانات الشحن') ?> </h5>
    <div class="divider__line divider__theme divider__sm mb-30"></div>
  </div><!-- /.col-lg-12 -->
  <div class="form-group">
    <lable>  <?php lang('From','من')?></lable>
    <select type="text" class="form-control" name="FromCityID">
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
    <div class="form-group">
      <lable>  <?php lang('From address','من عنوان ')?></lable>
      <input type="text" class="form-control" name="FromAddress">
    </div>

    <div class="form-group">
      <lable>  <?php lang('From Phone','رقم الهاتف ')?></lable>
      <input type="text" class="form-control" name="FromPhone">
    </div>

    <div class="form-group">
      <lable> <?php lang('From Contact Person ','اسم جهة اتصال الشحن')?></lable>
      <input type="text" class="form-control" name="FromContactPerson">
    </div>


    <div>
      <h5 class="form__title"><?php lang('To Information', 'بيانات التوصيل') ?> </h5>
      <div class="divider__line divider__theme divider__sm mb-30"></div>
    </div><!-- /.col-lg-12 -->

    <lable>  <?php lang('To','الى')?></lable>
    <select type="text" class="form-control" name="ToCityID">
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
    <div class="form-group">
      <lable>  <?php lang('To Consignee Name','اسم المرسل اليه')?></lable>
      <input type="text" class="form-control" name="ToConsigneeName">
    </div>

    <div class="form-group">
      <lable>  <?php lang('To address','الى عنوان')?></lable>
      <input type="text" class="form-control" name="ToAddress">
    </div>

    <div class="form-group">
      <lable>  <?php lang('To Phone',' رقم الهاتف')?></lable>
      <input type="text" class="form-control" name="ToPhone">
    </div>

    <div class="form-group">
      <lable>  <?php lang('To mobile','رقم الموبايل')?></lable>
      <input type="text" class="form-control" name="ToMobile">
    </div>

    <div class="form-group">
      <lable>  <?php lang('To Contact Person',' اسم جهة الاتصال')?></lable>
      <input type="text" class="form-control" name="ToContactPerson">
    </div>


    <div>
      <h5 class="form__title"><?php lang('Shipment Information', 'بيانات الشحنه') ?> </h5>
      <div class="divider__line divider__theme divider__sm mb-30"></div>
    </div><!-- /.col-lg-12 -->
    <div class="form-group">
      <lable>  <?php lang('Cash on delivery','دفع عند التوصيل')?></lable>
      <input type="text" class="form-control" name="COD">
    </div>

    <div class="form-group">
      <lable>  <?php lang('Weight','الوزن')?></lable>
      <input type="text" class="form-control" name="Weight">
    </div>

    <div class="form-group">
      <lable>  <?php lang('Pieces','عدد القطع')?></lable>
      <input type="text" class="form-control" name="Pieces">
    </div>

    <div class="form-group">
      <lable>  <?php lang('Contents','المحتويات')?></lable>
      <textarea class="form-control" name="Contents"></textarea>
    </div>

    <div class="form-group">
      <lable>  <?php lang('Special Instuctions',' تعليمات خاصه')?></lable>
      <textarea class="form-control" name="SpecialInstuctions"></textarea>
    </div>

    <div class="form-group">
      <lable>  <?php lang('Product', 'المنتج')?></lable>
      <select type="text" class="form-control" name="ProductID">
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


  </div>

  <button type="submit" class="btn btn__secondary btn__block"><?php lang('add', 'اضف') ?></button>
</form>

<script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url('assets/esh/') ?>assets/js/jquery-3.3.1.min.js"></script>
<!-- <script src="<?php echo base_url('assets/esh/') ?>assets/js/plugins.js"></script> -->

<script src="<?php echo base_url('assets/esh/') ?>assets/js/pick.js"></script>