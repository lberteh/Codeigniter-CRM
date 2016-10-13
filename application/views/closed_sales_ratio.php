<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>charts</title>
  </head>
  <body>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <div style="margin-top:50px" class="container">
      <div id="piechart" style="margin-left:20%; width: 60%; height: 500px;"></div>
    </div>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Closed Sales',     <?php echo $results[6]->totals; ?>],
          ['Sales not achieved', <?php echo $results[4]->totals; ?> - <?php echo $results[6]->totals; ?>],

        ]);

        var options = {
          title: 'Closed Sales Ratio',

          pieStartAngle: 90,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  </body>
</html>
