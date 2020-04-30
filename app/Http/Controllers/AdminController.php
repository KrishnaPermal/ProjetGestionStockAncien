<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Retourne la vue dashboard
     * @param null
     * @return retourne 
     */
    function index(){
        return view('admin.dashboard');
    }
}
