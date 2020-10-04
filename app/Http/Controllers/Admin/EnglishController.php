<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnglishController extends Controller
{
   public function next()
  {
      return redirect('admin.create');
  }

  public function edit()
  {
      return redirect('admin.moviename.english.edit');
      
  }
  
   public function delete()
  {
      return redirect('admin.moviename.english.delete');
      
  }
  
   public function update()
  {
      return redirect('admin.moviename.english');
      
  }
  
  
}
