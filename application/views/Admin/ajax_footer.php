<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="http://localhost/metro/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/amcharts/amcharts/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="http://localhost/metro/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="http://localhost/metro/assets/pages/scripts/table-datatables-responsive.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/pages/scripts/charts-amcharts.js" type="text/javascript"></script>

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

            console.log('event handler working');
                 // $("#subdaterange").submit();
                 var dStart =  $('#dStart').val();
                 var dEnd   =  $('#dEnd').val();

                $.post("<?php echo base_url('index.php/Admin/ajax_get_data') ?>", {dStart : dStart, dEnd : dEnd}, function(data){
                //  alert(data);
                  $('#sample_2').html(data.content);
              //      var myTable = $('#sample_2').DataTable();

              //      myTable.ajax.url( '<?php// echo base_url('index.php/Admin/ajax_get_data') ?>' ).load();
              if ( $.fn.DataTable.isDataTable('#sample_2') ) {
                $('#sample_2').DataTable().destroy();
              }
              $('#sample_2').DataTable({

                "language": {
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    },
                    //"emptyTable": "No data available in table",
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty": "No entries found",
                    "infoFiltered": "(filtered1 from _MAX_ total entries)",
                    "lengthMenu": "_MENU_ entries",
                    "search": "Search:",
                    "zeroRecords": "No matching records found"
                },

                // Or you can use remote translation file
                //"language": {
                //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                //},

                // setup buttons extentension: http://datatables.net/extensions/buttons/
                buttons: [
                    { extend: 'print', className: 'btn dark btn-outline' },
                    { extend: 'pdf', className: 'btn green btn-outline' },
                    { extend: 'csv', className: 'btn purple btn-outline ' }
                ],

                // setup responsive extension: http://datatables.net/extensions/responsive/
                responsive: {
                    details: {
                        type: 'column',
                        target: 'tr'
                    }
                },
                columnDefs: [ {
                    className: 'control',
                    orderable: false,
                    targets:   0
                } ],

                // order: [ 1, 'desc' ],

                // pagination control
                "lengthMenu": [
                    [5, 10, 15, 20, -1],
                    [5, 10, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "pageLength": 10,
                "pagingType": 'bootstrap_extended', // pagination type

                "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable


              });


                }, "json");


                $.post("<?php echo base_url('index.php/Admin/ajx_chart1') ?>", {dStart : dStart, dEnd : dEnd}, function(data){

                  var chart = AmCharts.makeChart("chartdiv", {
                      "type": "serial",

                      "dataProvider": data,
                      "theme": "light",


                      "handDrawn": false,
                      "handDrawScatter": 3,
                      "legend": {
                          "useGraphSettings": true,
                          "markerSize": 12,
                          "valueWidth": 0,
                          "verticalGap": 0
                      },

                      "valueAxes": [{
                          "minorGridAlpha": 0.08,
                          "minorGridEnabled": true,
                          "position": "top",
                          "axisAlpha": 0
                      }],
                      "startDuration": 1,
                      "graphs": [{
                          "balloonText": "<span style='font-size:13px;'>[[title]] [[category]]s:<b>[[value]]</b></span>",
                          "title": "Total",
                          "type": "column",
                          "fillAlphas": 0.8,
                        //  "fillColors": "#FF0F00",
                          "valueField": "total"
                      }],
                      "rotate": true,
                      "categoryField": "action",
                      "categoryAxis": {
                          "gridPosition": "start"
                      }
                  });

                }, "json");

            });



        });
</script>

<script>
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "dataLoader": {
      "url": "Admin/ajax_chart1",
      "format": "json"
    },
    "theme": "light",


    "handDrawn": false,
    "handDrawScatter": 3,
    "legend": {
        "useGraphSettings": true,
        "markerSize": 12,
        "valueWidth": 0,
        "verticalGap": 0
    },

    "valueAxes": [{
        "minorGridAlpha": 0.08,
        "minorGridEnabled": true,
        "position": "top",
        "axisAlpha": 0
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "<span style='font-size:13px;'>[[title]] [[category]]s:<b>[[value]]</b></span>",
        "title": "Total",
        "type": "column",
        "fillAlphas": 0.8,
      //  "fillColors": "#FF0F00",
        "valueField": "total"
    }],
    "rotate": true,
    "categoryField": "action",
    "categoryAxis": {
        "gridPosition": "start"
    }
});
</script>



</body>

</html>
