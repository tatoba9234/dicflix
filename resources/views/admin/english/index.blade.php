        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ランダム英語一覧画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


 <div class="container">
  
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ action('Admin\EnglishController@index') }}" method="get" enctype="multipart/form-data">

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
                         echo '<input type="submit" class="btn btn-primary" value="delete" onClick="return Check()">';
                         
                         echo '</div>';
                         
                         
                        echo '</div>';
                         
                      }
                    ?>
                    
                        
                
                    <script type="text/javascript">
                          function Check(){
                              var checked = confirm("Are you sure to delete?");
                              if (checked == true) {
                                  return console.log("deleated");
                              } else {
                                  return console.log("canceled");
                              }
                          }
                    </script>
                       
                   
                    
                   
                    {{ csrf_field() }}
                   <div class='btn-right'>
                        <input type="submit" class="btn btn-primary" value="next" onclick="location.href='/admin/english/index">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection