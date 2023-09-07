<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class AdminController extends Controller {
    public function dashboard(){
        $title = 'Dashboard';
        return view('admin.dashboard')->with(array('title'=> $title));
    }
}
