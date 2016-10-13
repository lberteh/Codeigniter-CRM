<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>date tester</title>

<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />

<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  </head>
  <body>

<div class="container">
  <div id="reportrange" class="col-sm-3 " style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; ">
      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
      <span id="thespan"></span> <b class="caret"></b>
  </div>

  <input type="text" id="dStart" name="dStart" value="" />
  <input type="text" id="dEnd" name="dEnd" value="" />
  <input onclick="myFunction()" type="submit" value="Submit" class="btn btn-primary"/>
  <button id="raa" type="button" name="button">Pick Date</button>

</div>



<script>
  function myFunction() {
    var str = document.getElementById("thespan").innerHTML;
    var res = str.slice(0, 10);
    document.getElementById("dStart").value = res;
    var res2 = str.slice(13, 23);
    document.getElementById("dEnd").value = res2;
}
</script>




    <script type="text/javascript">
    $(function() {

        function cb(start, end, label) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            $('#dStart').val(start.format('YYYY-MM-DD'));
            $('#dEnd').val(end.format('YYYY-MM-DD'));
        }

        // cb(moment().subtract(29, 'days'), moment());
        cb(moment().startOf('week'), moment());

        $('#raa').daterangepicker({
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

    });
    </script>

  </body>
</html>
