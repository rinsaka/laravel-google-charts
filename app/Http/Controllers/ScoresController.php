<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoresController extends Controller
{
  public function index()
  {
    $scores = Score::get();
    dd($scores);
  }
}
