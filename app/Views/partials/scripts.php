<!-- jQuery -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('plugins/adminlte') ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- DataTable -->
<script src="<?= base_url('plugins/datatables/datatables.min.js') ?>"></script>
<!-- Select2 -->
<script src=" <?= base_url('plugins/adminlte') ?>/plugins/select2/js/select2.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('plugins/adminlte') ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('plugins/adminlte') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('plugins/adminlte') ?>/dist/js/adminlte.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>