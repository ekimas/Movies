@extends('layout')

@section('back')
    <div class="home_btn">
        <a href="/site"><button class="btn">HOME PAGE</button></a>
    </div>
@endsection

@section('content')
    <div class="all_films_table">
        <table style="width:100%;">
        <tr>
            <th></th>
            <th>Title</th>
            <th>Director</th>
            <th></th>
            <th></th>
        </tr>
            @foreach($movies as $movie)
                <tr>
                    <td>
                        <img src="" alt="{{ $movie->alt }}">
                    </td>
                    <td>
                        {{ $movie->title }}
                    </td>
                    <td>
                        {{ $movie->name }}
                    </td>
                    <td class="table_btns">
                        <a href="{{ route('film.info', [ 'id' => $movie->id ]) }}"><button class="btn">MORE INFO</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection