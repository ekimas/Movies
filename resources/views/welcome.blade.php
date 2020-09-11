<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Serwis filmowy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                width: 80%;
                height:100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin: 0 auto;
            }

            nav {
                padding-top:10px;
                display:flex;
                flex-direction:row;
                justify-content: space-between;
            }

            .nav_btns {
                width:15%;
                display:flex;
                flex-direction:row;
                justify-content: space-between;
            }

            .top {
                height:25%;
                display:flex;
                flex-direction: column;
            }

            .top div {
                display:flex;
                align-items: center;
            }

            .main_top {
                height:100%;
                display:flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .middle {
                height:40%;
                border:1px solid black;
            }

            .bottom {
                height:25%;
                display: flex;
                flex-direction:row;
            }

            .bottom .small-poster {
                width:16%;
                border: 1px dashed black;
            }

            footer {
                height: 10%;
            }

            .btn {
                color:#636b6f;
                padding: 10px;
                margin: 10px;
            }

            .btn:hover {
                cursor:pointer;
            }
        </style>
    </head>
    <body>  
               
        <main>
            <div class="content">
                <div class="top">
                    @yield('site') 
                    <div class="main_top">
                        <div>
                            <h1>Portal filmowy</h1>
                        </div>
                        <div>

                            @if( auth()->check() )
                            <a href="/logout"><button class="btn">Log out</button></a>
                            @else
                            <a href="/login"><button class="btn">Login</button></a>
                            <a href="/register"><button class="btn">Register</button></a>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="middle">
                    <div>
                    
                        <img src="" alt="{{ $movies[0] -> alt }}">
                        <a href="{{ route('film.info', [ 'id' => $movies[0]->id ]) }}"><button class="btn">MORE INFO</button></a>
                        @php
                        $movies->forget(0);
                        @endphp
                    </div>
                </div>
                <div class="bottom">
                    @foreach($movies as $movie)
                        <div class="small-poster">
                            <img src="" alt="{{ $movie -> alt }}">
                            <br>
                            <a href="{{ route('film.info', [ 'id' => $movie->id ]) }}"><button class="btn">MORE INFO</button></a>
                        </div>
                    @endforeach
                    <div class="all-films">
                        <a href="/all_films"><button class="btn">SHOW ALL MOVIES</button></a>
                    </div>
                </div>
                <footer>
                
                </footer>
            </div>
        </main>
    </body>
</html>
