@extends('layout')

@section('back')
    <div class="home_btn">
        <a href="/site"><button class="btn">HOME PAGE</button></a>
    </div>
@endsection

@section('content')

<h2> Add film </h2>
<form action="/add_film" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    @php
        $user_id = $_COOKIE["user_id"];
    @endphp

    <div class="form-group">
        <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">
    </div>

    <div class="form-group">
    <label for="img">Poster:</label>
        <input type="image" id="img" name="img">
    </div>

    <div class="form-group">
    <label for="director">Director:</label>
        <select id="director" name="director">
            @foreach($directors as $director)                
                <option value="{{ $director->id }}"> 
                    {{ $director -> name }}
                </option>
            @endforeach
        </select>
        <a href="/add_director"><button type="button" class="btn">Add director</button></a>
    </div>

    <div class="btn-group">
        <button style="cursor:pointer" type="submit" class="btn">Add</button>
    </div>

</form>

@endsection