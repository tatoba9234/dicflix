        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '映画一覧TOP画面')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')



 <div class="container">
   <div class="row" style="text-align:center; margin:20px">
     <div class="col-md-3">
       <input type="text" class="form-control" placeholder="Title" name="title">
      
     </div>
      <div class="col-md-3">
       <input type="text" class="form-control" placeholder="Season/Part" name="season">
      
     </div>
      <div class="col-md-3">
       <input type="text" class="form-control" placeholder="Episode/Subtitle" name="episode">
     </div>
     <div class="col-md-2">
       <button class="btn btn-outline-success" type="submit">search</button>
     </div>
     
   </div>
 
                <form action="{{ action('Admin\CreateController@create') }}" method="post" enctype="multipart/form-data">

                     @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
        

 <?php
 for ($i = 1; $i < 16; $i++) {
  echo '<div class="item-movies">';
    echo ' <div class="poster">';
      echo '<img src="https://m4ufree.kim/wp-content/uploads/2020/04/pNZ0JCmiWLGkqpMQDMZqQgPORYS-185x278.jpg" onclick="location.href=&#39;/english/index&#39;">';
       echo '<div class="data">';
       	echo 'title<br>';
       	echo 'season<br>';
       	echo 'episode<br>';
       echo '</div>';
    echo '</div>';
  echo '</div>';
      }
      ?>
      
 <nav aria-label="pagination">
  <ul class="pagination pagination-lg">
    <li class="page-item disabled">
      <a class="page-link" href="#!" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#!">1</a></li>
    <li class="page-item"><a class="page-link" href="#!">2</a></li>
    <li class="page-item"><a class="page-link" href="#!">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#!">Next</a>
    </li>
  </ul>
</nav>


      
</div>
      
      @endsection