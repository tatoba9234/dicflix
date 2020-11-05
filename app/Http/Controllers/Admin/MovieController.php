<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    //
    public function index()
    {
      return view('admin.movies');
    }
    
     public function search()
  {
      return view('admin.search');
      
  }
    
       public function find()
  {
      return view('admin.find');
      
  }
}
