<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
  public function add()
  {
      return view('admin.create');
  }

  public function create()
  {
      return redirect('admin/create');
      
  }
  
  
}
