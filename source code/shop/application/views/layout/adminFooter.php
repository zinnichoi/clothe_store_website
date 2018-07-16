<!--   Core JS Files   -->
<script src="<?= base_url() ?>public/admin/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>public/admin/assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?= base_url() ?>public/admin/assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?= base_url() ?>public/admin/assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?= base_url() ?>public/admin/assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>public/admin/assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnCHkkc2vj4AuIP0TkiZHtYrHeQFnbafo"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url() ?>public/admin/assets/js/dashboard.js"></script>
<script src="<?= base_url() ?>public/admin/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        demo.initDashboardPageCharts();

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        if ($('.main-panel > .content').length == 0) {
            $('.main-panel').css('height', '100%');
        }
        demo.initGoogleMaps();
    });
</script>

</html>