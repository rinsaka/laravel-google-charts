@extends('layouts.default')

@section('title', 'スコア一覧')

@section('content')

<ul>
  @foreach ($scores as $score)
    <li>{{ $score->created_at }} : {{ $score->user_id }} : {{ $score->score }}</li>
  @endforeach
</ul>
<h2>グラフ</h2>
<div id="chart_div"></div>

@endsection

@section('chart')
<script type="text/javascript">
  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart','bar'], 'language': 'ja'});

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {
    // Laravel からカンマ区切り文字列データを受け取る
    var jsScores = '<?php echo $csvScores; ?>';
    var jsCreated_at = '<?php echo $csvCreated_at; ?>';
    var jsHead = '<?php echo $head; ?>';
    // カンマ区切りの文字列を配列に格納
    var head = jsHead.split(',');
    var scores = jsScores.split(',').map( str => parseInt(str,10) );
    var created_ats = jsCreated_at.split(',');
    var i;
    // データを作る
    var mydata = [head];
    for (i=0; i<scores.length; i++) {
      mydata.push([created_ats[i], scores[i]]);
    }
    // Create the data table.
    var data = google.visualization.arrayToDataTable(mydata);
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
@endsection
