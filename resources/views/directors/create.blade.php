@extends('layout')

@section('back')
    <div class="home_btn">
        <a href="/site"><button class="btn">HOME PAGE</button></a>
        <a href="/add_film"><button class="btn">BACK</button></a>
    </div>
@endsection

@section('content')

<h2> Add director </h2>
<form action="/add_director" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="btn-group">
        <button style="cursor:pointer" type="submit" class="btn">Add</button>
    </div>

</form>

@endsection