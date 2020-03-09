@extends('layouts.layout')
@section('content')
<div class="wrapper quote-index">
<h1>Quotes</h1>
    @foreach($quotes as $quote)
        <div class="quote-item">
            {{-- <img src="{{$quote->photo}}" alt="quote photo"> --}}
            <h4>
                <a href="/quotes/{{$quote->id}}">
                    {{$quote->name}}
                </a>
            </h4>
        </div>
    
    @endforeach
</div>


@endsection