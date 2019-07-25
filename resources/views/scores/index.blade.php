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
