@extends('layout')

@section('back')
    <div class="home_btn">
        <a href="/all_films"><button class="btn">ALL MOVIES</button></a>
        <a href="/site"><button class="btn">HOME PAGE</button></a>
    </div>
@endsection

@section('content')
    @foreach($movie as $film)
    <div class="actual_film">
        <div class="film_info">  
            <div class="film_img">
                <img src="" alt="{{ $film->alt }}">
            </div>
            <div class="ditails">
                <div>
                    <h2>{{$film->title}}</h2>
                </div>
                <div>
                    {{$film->name}}                 
                </div>
                <div>
                    Average: {{ number_format((float)$avg, 2, '.', '') }}/5                
                </div>
            </div>
        </div>
        <hr>

        @if( auth()->check() && $com_access == true)
            <form action="/add_note" method="post">
            {{ csrf_field() }}
                <div class="comment_sect">
                    <div class="textarea">
                        <textarea name="comment" id="comment" cols="30" rows="5" maxlength="190" placeholder="Add comment..." style="resize:none;"></textarea><br>
                    </div>
                    <div class="note_sect">
                        <label for="note">Choose note</label>
                        <select name="note" id="note">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br>
                        <input type="hidden" id="movie_id" name="movie_id" value="{{ $film->id }}">
                        <button style="cursor:pointer" type="submit" class="btn btn-primary">ADD</button>
                    </div>
                </div>
            </form>
        <hr>
        @endif
        @endforeach
        <div class="comments">        
            <table class="com_table">        
            @foreach($comments as $comment)
            <tr>        
                <td>            
                    {{ $comment->comment }}
                </td>
                <td>
                    Note: {{ $comment->note }}/5
                </td>
            </tr>
            <tr>
                <td>
                    Added by {{ $comment->name }}            
                </td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection