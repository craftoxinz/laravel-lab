<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\View\View;

class LectureController extends Controller
{
    public function index(): View
    {
        $lectures = Lecture::all();

        return view('lectures.index', compact('lectures'));
    }
}
