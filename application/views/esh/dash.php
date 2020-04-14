<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax" style="    padding: 50px 0 86px">
  <div class="bg-img"><img src="<?php echo base_url('assets/login.jpg') ?>" alt="background"></div>
  <div class="container">

  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
       Track Shipmeent
    ========================= -->
<section id="trackShipmeent" class="track-shipmeent">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4">
        <aside class="sidebar mb-30">
          <div class="widget widget-categories widget-categories-2">
            <div class="widget-content">
              <h6 class=" <?php lang('', 'text-right') ?>"> <?php lang('Welcome Back', 'مرحبا بعودتك ') ?> <span style="color:#ff5e14"><?php echo $call[0]->DisplayName ?></span> </h6>
              <ul class="list-unstyled client-menu <?php lang('', 'text-right') ?>">
                <li><a href="#" data-page="information" class="active"> <?php lang('Information', 'المعلومات') ?></a></li>
                <li><a href="#" data-page="track4"> <?php lang('Track', 'تتبع الشحنات') ?> </a></li>
                <li><a href="#" data-page="new_orders"> <?php lang('Orders History', ' عرض الطلبات') ?> </a></li>
                <li><a href="#" data-page="new_pickup"> <?php lang(' Add New Pickup', ' أضف بيك اب جديد') ?> </a></li>
                <li><a href="#" data-page="pickups"> <?php lang('Pickup Inquiry', ' الاستفسار عن الاستلام ') ?> </a></li>
                <li><a href="#" data-page="fees"> <?php lang('Request A Quote', 'طلب سعر') ?> </a></li>
                <li><a href="#" data-page="shipments"> <?php lang('Shipments', ' الشحنات ') ?> </a></li>
                <li><a href="#" data-page="add_shipment"> <?php lang('Add Shipment', ' اضافة شحنه ') ?> </a></li>
                <li><a href="#" data-page="reports"> <?php lang('Reports', 'التقارير') ?> </a></li>
                <li><a href="<?php echo base_url('home/logout') ?>" data-page="logout"> <?php lang('Logout', 'الخروج') ?> </a></li>
              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-categories -->
        </aside><!-- /.sidebar -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-12 col-md-12 col-lg-8 mycon">
        <div class="ajax-loader" style="display:none">
          <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
          <span class="sr-only">Loading...</span>
        </div>
        <div class="ajax-content"></div>
        <div class="client-info <?php lang('', 'text-right') ?>">
          <h3><?php lang('Your Information', 'المعلومات الشخصيه') ?></h3>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('Full name', 'الاسم بالكامل') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->DisplayName ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('Email', 'البريد الالكنروتي') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->Email ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('AccountNo', ' رقم الحساب ') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->AccountNo ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('Contact Person', 'جهة الاتصال') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->ContactPerson ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('ContactNo', 'رقم التواصل ') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->ContactNo ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('ContactNo 2', 'رقم التواصل الثاني') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->ContactNo2 ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('ContactNo 3', 'رقم التواصل الثالث') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->ContactNo3 ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('Address 1', 'العنوان') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->Address1 ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('Address 2', 'العنوان 2') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->Address2 ?> </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3"> <b> <?php lang('Client Name', 'اسم العميل') ?> : </b> </div>
            <div class="col-9"> <?php echo $call[0]->ClientName ?> </div>
          </div>

        </div>
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Track Shipmeent -->