<?php

namespace App\Http\Controllers;
use App\Models\Resume;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Resume::first(); // Get the first resume entry
        return view('resume.index', compact('resume'));
    }
}


