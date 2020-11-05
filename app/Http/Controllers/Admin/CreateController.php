<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Movie;
use App\Word;
class CreateController extends Controller
{
  public function add()
  {
      return view('admin.create');
  }

  public function create(Request $request)
  {
       $this->validate($request, Movie::$rules);
        $movie = new Movie;
        $form = $request->all();
        unset($form['_token']);
        $movie->fill($form);
        $movie->save();
        
        $this->validate($request, Word::$rules);
        $word = new Word;
        $form = $request->all();
        unset($form['_token']);
        $word->fill($form);
        $word->save();
        
        if (isset($form['image'])) {
          $path = $request->file('image')->store('public/image');
          $movie->image_path = basename($path);
          } else {
          $movie->image_path = null;
      }
        
        
        
      return redirect('admin/create');
      
  }
  
  
}

