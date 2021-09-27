<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('dashboard.survey.index');
    }
}
