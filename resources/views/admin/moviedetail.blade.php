        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '映画詳細画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


 <div class="container">
   
   <div class="row" style="text-align:center; margin:20px">
     <div class="col-md-1">
      <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/jpeg">
     </div>
     <div class="col-md-3">
       <input type="text" class="form-control" placeholder="Title" name="movie_title">
      
     </div>
      <div class="col-md-3">
       <input type="text" class="form-control" placeholder="Season/Part" name="season">
      
     </div>
      <div class="col-md-3">
       <input type="text" class="form-control" placeholder="Episode/Subtitle" name="episode">
      
     </div>
   </div>
  
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ action('Admin\EnglishController@moviename') }}" method="post" enctype="multipart/form-data">

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
                        
                         echo '<div class="col-md-4">';
                         echo '<input type="text" class="form-control" name="left_word'.$i.'">';
                         echo '</div>';
                         
                         echo '<div class="col-md-2">';
                         echo '<input type="text" class="form-control" name="equality'.$i.'" >';
                         echo '</div>';
                         
                         echo '<div class="col-md-4">';
                         echo '<input type="text" class="form-control" name="right_word'.$i.'">';
                         echo '</div>';
                         
                         echo '<div class="col-md-1">';
                         echo '<input type="submit" class="btn btn-primary" value="edit">';
                         echo '</div>';
                         
                         echo '<div class="col-md-1">';
                         echo '<input type="submit" class="btn btn-primary" value="delete">';
                         echo '</div>';
                         
                        echo '</div>';
                         
                      }
                    ?>
                    
                        
                            
                           
                       
                   
                    
                   
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="next" onclick="location.href='/admin/moviedetail?id=x">
                </form>
            </div>
        </div>
    </div>
@endsection