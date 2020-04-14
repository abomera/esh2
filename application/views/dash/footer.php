</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://newvision-it.com/" target="_blank">NEW VISION-IT,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url() ?>app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->

<script src="<?php echo base_url() ?>app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/tether.min.js"></script>
<!-- <script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/shepherd.min.js"></script> -->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url() ?>app-assets/js/core/app-menu.js"></script>
<script src="<?php echo base_url() ?>app-assets/js/core/app.js"></script>
<script src="<?php echo base_url() ?>app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo base_url() ?>app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/editors/quill/quill.min.js"></script>
<!-- <script src="<?php echo base_url() ?>app-assets/vendors/js/tables/datatable/.js"></script> -->
<!-- END: Page JS-->

<script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
<script>
    var base_url = '<?php echo base_url() ?>';
    var page = '<?php echo $page_title ?>';
    $("#example-basic").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        autoFocus: true
    });
    
</script>

<script src="<?php echo base_url() ?>assets/dash/assets/js/nest.js"></script>
<script src="<?php echo base_url() ?>assets/dash/assets/js/scripts.js"></script>

</body>
<!-- END: Body-->

</html>