<?php

namespace App\Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    //
    public function index(){
        return view('dashboard::dashboard');
    }
}
