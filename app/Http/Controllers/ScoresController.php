<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoresController extends Controller
{
  public function index()
  {
    $scores = Score::where('user_id', '=', 1)->get();
    $csvScores = $scores->implode('score', ',');
    $csvCreated_at = $scores->implode('created_at', ',');
    $head = 'Date,Score';
    // dd($scores, $csvScores, $csvCreated_at);
    return view('scores.index')
            ->with('scores', $scores)
            ->with('csvScores', $csvScores)
            ->with('csvCreated_at', $csvCreated_at)
            ->with('head', $head);
  }
}
