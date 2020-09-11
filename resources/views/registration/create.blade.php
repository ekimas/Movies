@extends('layout')

@section('back')
    <div class="home_btn">
        <a href="/"><button class="btn">HOME PAGE</button></a>
    </div>
@endsection

@section('content')

<h2> Register</h2>
<form action="/register" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
    <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
    <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="btn-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection