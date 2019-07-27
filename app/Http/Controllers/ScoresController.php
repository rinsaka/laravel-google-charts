<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoresController extends Controller
{
  public function index()
  {
    $scores = Score::get();
    $csvScores = $scores->implode('score', ',');
    // dd($scores, $csvScores);
    return view('scores.index')
            ->with('scores', $scores)
            ->with('csvScores', $csvScores);
  }
}
