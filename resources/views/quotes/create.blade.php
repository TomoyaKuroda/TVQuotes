@extends('layouts.layout')

@section('content')
<div class="wrapper create-quote">
<h1>Create a New Quote</h1>
<form action="/quotes" method="POST">
    @csrf
<label for="name">TV show name:</label>
<input type="text" id='name' name='name' required/>
<label for="season">Seacon:</label>
<input type="text" id='season' name='season' required/>
<label for="episode">Episode:</label>
<input type="text" id='episode' name='episode' required/>
<label for="quote">Quote:</label>
<textarea type="text" id='quote' name='quote' required></textarea><br/>
<input type="submit" value='Save a quote '>
</form>
</div>
@endsection