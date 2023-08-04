<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Search Count'],
          <?php echo $chartData; ?>
        ]);

        var options = {
          title: 'Country Search Statistics',
          titleTextStyle: {
          color: 'red',
          bold: true,
          fontSize: 18
        }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <style>
    /* Center the pie chart */
    #piechart {
      width: 900px;
      height: 500px;
      margin: 0 auto;
    }

    body {
      background-color: #FFC000; 
    }
    </style>


  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
