        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'テスト画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


 <div class="container">
  
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\TestController@test') }}" method="get" enctype="multipart/form-data" align="center">

                     @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    
                    <h1>
                      question
                    </h1>
                    
                    
                    
                    <?php
                    
                      for ($i = 1; $i < 5; $i++) {
                        echo '<div class="form-group row">';
                        
                         echo '<div class="col-md-6" text-align=center>';
                         echo '<input type="text" class="form-control" name="option'.$i.'">';
                         echo '<align="center">';
                         echo '</div>';
                         
                        
                         
                        echo '</div>';
                         
                      }
                    ?>
                    
                        
                            
                           
                       
                   
                    
                   
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="next" >
                </form>
            </div>
        </div>
    </div>
@endsection