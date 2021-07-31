</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="<?= base_url() ?>assets/veltrix/layouts/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="<?= base_url() ?>assets/veltrix/layouts/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="<?= base_url() ?>assets/veltrix/layouts/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>
            <div class="d-grid">
                <a href="https://1.envato.market/grNDB" class="btn btn-primary mt-3" target="_blank"><i class="mdi mdi-cart me-1"></i> Purchase Now</a>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


<!-- JAVASCRIPT -->
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/node-waves/waves.min.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url() ?>assets/veltrix/layouts/assets/js/pages/datatables.init.js"></script>

<script src="<?= base_url() ?>assets/veltrix/layouts/assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        $("#datatable").DataTable({
            "lengthMenu": [10, 50, 100, 200],
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }],
            "scrollCollapse": true,
            "scrollX": true,
            "scrolly": true,
            "pageLength": 10,
            "processing": true,
            "serverSide": true,
            "searchDelay": 750,
            "ajax": {
                "url": '<?= base_url() ?>C_contract_terms/get_data',
                "type": 'POST',
            }
        });

    });
</script>
</body>

</html>