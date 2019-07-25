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
                ['City', '2010 Population',],
                ['New York City, NY', 8175000],
                ['Los Angeles, CA', 3792000],
                ['Chicago, IL', 2695000],
                ['Houston, TX', 2099000],
                ['Philadelphia, PA', 1526000]
              ]);

        // Set chart options
        var options = {
                title: 'Population of Largest U.S. Cities',
                chartArea: {width: '50%'},
                hAxis: {
                  title: 'Total Population',
                  minValue: 0
                },
                vAxis: {
                  title: 'City'
                }
              };
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
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
