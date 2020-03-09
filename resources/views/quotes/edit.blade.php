@extends('layouts.layout')

@section('content')
<div class="wrapper create-quote">
<h1>Updating quote</h1>
<form action="{{route('quotes.update')}}" method="POST">
    @csrf
<label for="name">TV show name:</label>
<input type="text" id='name' name='name' value='{{$quote->name}}'/>
<label for="season">Seacon:</label>
<input type="text" id='season' name='season' value='{{$quote->season}}'/>
<label for="episode">Episode:</label>
<input type="text" id='episode' name='episode' value='{{$quote->episode}}' />
<label for="quote">Quote:</label>
<textarea type="text" id='quote' name='quote'>{{$quote->quote}}</textarea><br/>
<input type="hidden" name="id" value = "{{$quote->id}}">
<input type="submit"  class = "btn btn-success" value='Save'>
</form>
</div>
@endsection