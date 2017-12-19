<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeployementController extends Controller
{
    public function index()
    {
        return view('vendor.installer.welcome');
    }
}
