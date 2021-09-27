<?php

namespace App\Http\Controllers\ContactCenter;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class ContactCenterController extends Controller
{
    public function index()
    {
        return view('dashboard.contactCenter.index');
    }
}
