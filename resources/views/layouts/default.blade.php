<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>スコア一覧</title>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart','bar'], 'language': 'ja'});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        // Set chart options
        var options = {
          title: 'Company Performance',
          // curveType: 'function',
          legend: { position: 'bottom' },
          width:800,
          height:500
        };
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

</head>
<body>
    <h1>@yield('title')</h1>
    <div class="container">
      @yield('content')
    </div>
</body>
</html>
