<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'score' => 'required'
  );
}
