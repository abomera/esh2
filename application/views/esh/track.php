<!-- ========================
       page title 
    =========================== -->
<section id="page-title" class="page-title bg-overlay bg-parallax <?php lang('', 'text-right') ?>">
  <div class="bg-img"><img src="<?php echo base_url($setting->s_cover_7) ?>" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><?php lang('Home', 'الصفحه الرئيسيه') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php lang('Track', 'تتبع الشحنات') ?></li>
          </ol>
        </nav>
        <h1 class="pagetitle__heading"><?php lang('Track', 'تتبع الشحنات') ?></h1>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<div class="container">


  <?php
  // print_r($numbers);
  // echo count($numbers);
  $x = 0;
  foreach ($numbers as $number) {
    $x++;
    if (empty($number)) {
  ?>

      <br>
      <p class="alert alert-danger"> Error in AWP Number [#<?php echo $number ?>] </p>
    <?php
      break;
    }


    // $info = $obj['ShipmentInfo'];
    // $his = $obj['HistoryData'];
    ?>
    <div class="bord">
      <script src="<?php echo base_url('assets/esh/') ?>assets/js/jquery-3.3.1.min.js"></script>

      <script>
        $(document).ready(function() {
          $.ajax({
            method: 'GET',
            url: 'http://esh7enly.mpsegypt.com:30001/DispatchAPI/api/Free/V2/GetShipmentHistory/<?php echo trim($number) ?>',
            dataType: "json",
            success: function(data) {
              console.log(data)
              if (data.ShipmentInfo == null) {
                $('#err-<?php echo $x ?>').html('<p class="alert alert-danger"> Error in AWP Number [#<?php echo $number ?>] </p>');
              } else {
                var his = data.HistoryData;
                console.log(his.length)
                for (let i = 0; i < his.length; i++) {
                  const element = his[i];
                  console.log(element)
                  $('#tl-<?php echo $x ?>').append(`
                      <div class="el">
                        <p class="date"> ` + element.Status + ` <br> <small> ` + element.Reason + ` </small></p>
                        <p class="text">
                          <span>  ` + element.ActionDate + ` </span>
                        </p>
                      </div>
                    `);
                }

              }
            }
          })
        });
      </script>
      <p class="error" id='err-<?php echo $x ?>'></p>
      <p class="tl-head"> # <?php echo $number ?> </p>
      <div class="timeline" id="tl-<?php echo $x ?>">


      </div>

    </div>









  <?php
  }
  ?>



</div>