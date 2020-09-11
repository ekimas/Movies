@extends('layout')

@section('back')
    <div class="home_btn">
        <a href="/site"><button class="btn">HOME PAGE</button></a>
        <a href="/user_films"><button class="btn">BACK</button></a>

    </div>
@endsection

@section('content')

<h2> Update film </h2>
<form action="{{ route( 'film.save', ['id' => $movie->id ] ) }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}">
    </div>

    <div class="form-group">
    <label for="director">Director:</label>
        <select id="director" name="director">
            @foreach($directors as $director)
               
                <option value="{{ $director->id }}"
                    @if($movie->director_id == $director->id)
                        selected
                    @endif
                > 
                    {{ $director -> name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="btn-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Update</button>
    </div>

</form>

@endsection