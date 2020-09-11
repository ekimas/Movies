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

                margin: 0 auto;
            }

            .top {
                height:25%;
                display:flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .top div {
                display:flex;
                justify-content:center;
                align-items: center;
            }

            .middle {
                height:40%;
                border:1px solid black;
            }

            .bottom {
                height:25%;
            }

            footer {
                height: 10%;
            }

            .btn {
                color:#636b6f;
                padding: 10px;
                margin: 10px;
            }

            .home_btn {
                margin-top:20px;
                width:100%;
                display:flex;
            }

            table th {
                text-align: left;
                border-bottom: 1px solid #636b6f;
                padding-bottom:5px;
                font-size:120%;
            }

            table td {
                padding-bottom:5px;
                padding-top:5px;
            }

            .table_btns {
                text-align:center;
            }
        </style>
    </head>
    <body>  
               
        <main>
            <div class="content">
                <div class="home_btn">
                    <a href="/site"><button class="btn">BACK</button></a>
                </div>
            <div class="top">
                    <div>
                        <h1>{{ auth()->user()->name }}'s films</h1>
                    </div>

                </div>
                <table>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th>Director</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($userMovies as $userMovie)
                    <tr>
                        <td>
                            <img src="" alt="{{ $userMovie->alt }}">
                        </td>
                        <td>
                            {{ $userMovie->title }}
                        </td>
                        <td>
                            {{ $userMovie->name }}
                        </td>
                        <td class="table_btns">
                            <a href="{{ route('film.delete', ['id' => $userMovie->id] )}}"><button class="btn">DELETE</button></a>
                        </td>
                        <td class="table_btns">
                            <a href="{{ route('film.update', ['id' => $userMovie->id] )}}"><button class="btn">UPDATE</button></a>
                        </td>
                    </tr>
                @endforeach
                </table>

            </div>
        </main>
    </body>
</html>