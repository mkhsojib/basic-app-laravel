@extends('layouts.app')
@section('content')
<h1>Message</h1>

@if(count($messages) > 0)

@foreach($messages as $message)

<ul class="list-group">

  <li class="list-group-item">Name: {{ $message->name}}</li>
  <li class="list-group-item">Email: {{ $message->email}}</li>
  <li class="list-group-item">Message: {{ $message->message}}</li>

</ul>

@endforeach


@endif


@endsection


@section('sidebar')
@parent

<h3>this is custom text for about page</h3>

@endsection
