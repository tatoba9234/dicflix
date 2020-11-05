<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnglishController extends Controller
{
 

  
   public function index()
  {
      return view('admin.english.index');
  }

  public function edit()
  {
      return edit('admin.moviename.english.edit');
      
  }
  
   public function delete()
  {
      return redirect('admin.moviename.english.delete');
      
  }
  
   public function update()
  {
      return redirect('admin.moviename.english');
      
  }
  
  public function moviename()
  {
      return view('admin.moviename.index');
      
  }
  
  
}
