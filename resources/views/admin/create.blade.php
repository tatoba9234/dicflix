        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '語句登録画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<div class="container">
    <div class="col-md-8 mx-auto">
        <form action="{{ action('Admin\CreateController@add') }}" method="post" enctype="multipart/form-data">
            <div class="col-md-1">
                <input type="file" class="form-control-file" id="image"  accept="image/jpeg">
            </div>
            <div class="row" style="margin:20px">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Movie Title" name="movie_title">
                </div>
                <div class="col-md-3">
                     <input type="text" class="form-control" placeholder="Season/Part" name="season">
                </div>
                <div class="col-md-3">
                     <input type="text" class="form-control" placeholder="Episode/Subtitle" name="episode">
                </div>
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <?php
                    
                      for ($i = 1; $i < 11; $i++) {
                         echo '<div class="form-group row">';
                           echo '<div class="col-md-5">';
                           echo '<input type="text" class="form-control" name="left_word'.$i.'">';
                           echo '</div>';
                           
                           echo '<select name="equality'.$i.'">
                                  <option value="=">=</option>
                                  <option value=">">></option>
                                  <option value="<"><</option>
                                  <option value="/">/</option>
                                  <option value="→">→</option>
                                  <option value="↔︎">↔︎</option>
                              </select>';
                              
                           echo '<div class="col-md-5">';
                           echo '<input type="text" class="form-control" name="right_word'.$i.'">';
                           echo ' </div>';
                         echo ' </div>';
                      }
                    ?>
                    
                    
                      
                        {{ csrf_field() }}
                        <div class='btn-right'>
                            <input type="submit" class="btn btn-primary" value="create" onclick="location.href='/admin/create">
                        </div>
            </div>
        </form>
    </div>
</div>
@endsection