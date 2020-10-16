<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    //
    public function index()
    {
      return view('admin.index');
    }
    
     public function find()
  {
      return view('admin.index');
      
  }
    
}
