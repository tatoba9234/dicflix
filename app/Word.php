<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
  
  protected $guarded = array('id');
  
  public static $rules = array(
    'right_word' => 'required',
    'equality' => 'required',
    'left_word' => 'required'
  );
   
}
