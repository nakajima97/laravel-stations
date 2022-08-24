<?php

namespace App\Http\Controllers;

use App\Practice;
// use App\Models\Practice;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PracticeController extends Controller
{
    public function sample()
    {
        return view('practice');
    }

    public function sample2()
    {
        $test = 'practice2';
        return view('practice2', ['testParam' => $test]);
    }

    public function sample3()
    {
        $test = 'test';
        return view('practice3', ['testParam' => $test]);
    }

    public function getPractice()
    {
        $practices = Practice::all();
        return view('getPractice', ['practices' => $practices]);
        // return response()->json($practices);
    }
}
