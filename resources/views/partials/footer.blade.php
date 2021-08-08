<!-- Auth -->
<!-- Dashboard -->
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/exporting.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/variable-pie.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/export-data.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/accessibility.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<!--app JS-->
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- ./Dashboard -->
<!-- ./Auth -->
<script>
    @if( Request::is('admin/users/*') || Request::is('admin/roles/*') || Request::is('admin/permissions/*') )
        $('#mm_groupAuthetication').addClass('mm-active');
        @if( Request::is('admin/users/*') )
            $('#mm_itemUsers').addClass('mm-active');
        @endif
        @if( Request::is('admin/roles/*') )
            $('#mm_itemRoles').addClass('mm-active');
        @endif
        @if( Request::is('admin/permissions/*') )
            $('#mm_itemPermissions').addClass('mm-active');
        @endif
    @endif
</script>
