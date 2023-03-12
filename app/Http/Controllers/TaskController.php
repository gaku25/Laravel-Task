<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($text = "建物です")
  {
    return $text;
  }
    public function task($text1)
  {
    return "部屋番号は" . $text1 . "です";
  }
}
