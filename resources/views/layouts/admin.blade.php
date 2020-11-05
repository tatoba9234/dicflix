<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-light" style="background-color: #3274D3;">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('https://b33bfe4ea09a4318bf9eb3d3e82f8bdc.vfs.cloud9.us-east-2.amazonaws.com/admin/movies') }}">
                        {{ config('app.name', 'Dicflix') }}
                    </a>
                   <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    -->
                    <btn class="btn btn-outline-success" onclick="location.href='/admin/create'">
                    logout
                    </btn> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                        

                        <!-- Right Side Of Navbar -->
                        <!--<ul class="navbar-nav ml-auto"> -->
                             
                        <!--</ul>-->
                    </div>
                    
        </div>
                 <div class="container">
                     <!--onclick="location.href=&quot;{{action('Admin\CreateController@add')}}&quot;-->
                    <btn class="btn btn-outline-success" onclick="location.href='/admin/create'">
                        Create
                    </btn>
                     <btn class="btn btn-outline-success" onclick="location.href='/admin/english/index'">
                        English
                    </btn>
                     <btn class="btn btn-outline-success" onclick="location.href='/admin/test'">
                        Test
                    </btn>
                    <form class="form-inline">
                           <input class="form-control mr-sm-2" type="text" placeholder="Search Words">
                           <button class="btn btn-outline-success" type="submit" onclick="location.href='/admin/find'">search</button>
                     </form>
                
                </div>
                     
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>