<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="http://localhost/metro/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="http://localhost/metro/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="http://localhost/metro/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="http://localhost/metro/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script type="text/javascript">
        $(function() {

            function cb(start, end, label) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#dStart').val(start.format('YYYY-MM-DD'));
                $('#dEnd').val(end.format('YYYY-MM-DD'));
            }

            // cb(moment().subtract(29, 'days'), moment());
            cb(moment().startOf('month'), moment());

            $('#reportrange').daterangepicker({
                ranges: {
                   'Today': [moment(), moment()],
                   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                   'This Month': [moment().startOf('month'), moment().endOf('month')],
                   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
              $("#subdaterange").submit();
            });

        });
        </script>

</body>

</html>
