@extends('layouts.layout')
@section('content')
<div class="wrapper quote-details">
<h1>{{$quote->name}}</h1>
<p class="season">season - {{$quote->season}}</p>
<p class="episode">episode - {{$quote->episode}}</p>
<p class="quote">quote - {{$quote->quote}}</p>


<a href="{{ route('quotes.edit',$quote->id)}}" ><button class="bg-secondary">Edit</button></a>
<form action="{{route('quotes.destroy', $quote->id)}}" method="POST">
@csrf
@method('DELETE')
<button  class="bg-danger">Delete</button>
</form>
</div>
<a href="/quotes" class="back">Back to all quotes</a>
@endsection