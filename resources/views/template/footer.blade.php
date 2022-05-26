<!-- JS Files-->
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ url('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!--plugins-->
<script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ url('assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ url('assets/js/index.js') }}"></script>
<script src="{{ url('assets/toastr/toastr.min.js') }}"></script>
<!-- Main JS-->
<script src="{{ url('assets/js/main.js') }}"></script>
@stack('script')
@toastr_render
</body>

</html>