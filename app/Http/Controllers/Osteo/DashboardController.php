<?php

namespace App\Http\Controllers\Laralum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class DashboardController extends Controller
{
    public function index()
    {
    	return view('osteo/dashboard/index');
    }
}
