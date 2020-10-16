        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '単語登録画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


 <div class="container">
   <div class="row" style="text-align:center; margin:20px">
     <div class="col-md-3">
       aiue
      
     </div>
     <div class="col-md-3">
       aiue
      
     </div>
      <div class="col-md-3">
       aiue
      
     </div>
      <div class="col-md-3">
       aiue
      
     </div>
   </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ action('Admin\CreateController@create') }}" method="post" enctype="multipart/form-data">

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
                         echo '<input type="text" class="form-control" name="left_words'.$i.'">';
                         echo '</div>';
                         echo '<div class="col-md-2">';
                         echo '<input type="text" class="form-control" name="equality'.$i.'" >';
                         echo '</div>';
                         echo '<div class="col-md-5">';
                         echo '<input type="text" class="form-control" name="right_words'.$i.'">';
                         echo ' </div>';
                         echo ' </div>';
                      }
                    ?>
                    
                        
                            
                        
                        
                            
                        
                        
                            
                       
                   
                    
                   
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection