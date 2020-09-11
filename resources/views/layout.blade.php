<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

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
                display:flex;
                flex-direction:column;
                align-items: center;
                width:80%;
                margin: 0 auto;
                height:100vh;
            }

            .top {
                height:25%;
                display:flex;
                flex-direction: row;
                justify-content: space-between;
            }

            form {
                display:flex;
                flex-direction: column;
            }

            input {
                margin: 10px;
            }

            .btn {
                color:#636b6f;
                padding: 10px;
                margin: 10px;
            }

            .btn:hover {
                cursor:pointer;
            }

            .btn-group {
                display:flex;
                justify-content: center;
                margin-top: 10px;
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

            .all_films_table {
                display: flex;
                align-items:center;
                justify-content:center;
                margin:10px auto 0 auto;
                width:100%;
            }

            .actual_film {
                width:100%;
                margin-top:20px;
            }

            .film_info {
                display:flex;
                flex-direction:row;
                width:100%;
            }

            .film_img {
                width:60%;
            }

            .ditails {
                width:40%;
                display:flex;
                flex-direction:column;
            }

            .comment_sect {
                display:flex;
                flex-direction:row;
                width:60%;
                justify-content:space-around;
                margin: 0 auto;
            }

            .comments {
                width:60%;
                margin: 25px auto 0 auto;
            }

            .com_table {
                width:100%;
            }

            .com_table td:first-child {
                width:60%;
            }

            .com_table td {
                width:20%;
            }

        </style>
    </head>
    <body>
        <div class="content">
            @yield('back')
            
            @yield('content')
            
        </div>
    </body>
</html>
