<?php

namespace Its\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;
        return view('Calculator::add', compact('result'));
    }
    public function sub($a, $b)
    {
        $result = $a - $b;
        return view('Calculator::sub', compact('result'));
    }
}
