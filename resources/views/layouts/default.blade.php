<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>スコア一覧</title>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    @yield('chart')
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="container">
      @yield('content')
    </div>
</body>
</html>
