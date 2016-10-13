<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="http://localhost/metro/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="http://localhost/metro/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="http://localhost/metro/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/pages/scripts/form-samples.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="http://localhost/metro/assets/global/scripts/custom.js" type="text/javascript"></script>
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="http://localhost/metro/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script type="text/javascript">
  $( document ).ready(function() {
    $('#my_hidden_input').val(
        $('#datepicker').datepicker('getFormattedDate')
    );
  });
</script>

<script type="text/javascript">
  $('#datepicker').datepicker();
  $('#datepicker').on("changeDate", function() {
    $('#my_hidden_input').val(
        $('#datepicker').datepicker('getFormattedDate')
    );
  });
</script>

<script language="javascript" type="text/javascript">
$(document).ready(function(){

//let's create arrays
var one = [
{display: "No Interest", value: "1" }, {display: "Needs Follow Up", value: "2" }, {display: "Appointment Booked", value: "3" }];

var two = [
{display: "No Deal", value: "4" }, {display: "Needs Follow Up", value: "5" },
{display: "New Appointment Booked", value: "6" }, {display: "CLOSED SALE", value: "7" }];

var three = [
{display: "No Interest", value: "1" }, {display: "Needs Follow Up", value: "8" }, {display: "Appointment Booked", value: "3" }];

var four = [
{display: "N/A", value: "11" }];


//If parent option is changed
$("#parent_selection").change(function() {
    var parent = $(this).val(); //get option value from parent

    switch(parent){ //using switch compare selected option and populate child
          case '1':
            list(one);
            break;
          case '2':
            list(one);
            break;
          case '3':
            list(two);
            break;
          case '4':
            list(three);
            break;
          case '5':
            list(two);
            break;
          case '6':
            list(two);
            break;
          case '7':
            list(two);
            break;
          case '8':
            list(two);
            break;
          case '9':
            list(one);
            break;
          case '13':
            list(three);
            break;
          case '14':
            list(one);
            break;
        default: //default child option is blank
            $("#child_selection").html('');
            break;
       }
});

//function to populate child select box
function list(array_list)
{
$("#child_selection").html(""); //reset child options
$(array_list).each(function (i) { //populate child options
    $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
});
}

});
</script>

</body>

</html>
