@extends('welcome')


@section('site')
        <nav>

        @if( auth()->check() )
                <div>
                        Hi {{ auth()->user()->name }}!
                </div>
                <div class="nav_btns">
                        <a href="/add_film"><button class="btn">ADD FILM</button></a>
                        <a href="/user_films"><button class="btn">MY FILMS</button></a>
                </div>
        @endif
        </nav>

@endsection
