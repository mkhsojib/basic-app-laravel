@extends('layouts.app')
@section('content')
<h1>Contact Page</h1>

{!! Form::open(['url' => 'contact/submit']) !!}

<div class="form-group">
{{ Form::label('name', 'Name') }}
{{ Form::text('name', '' , ['class'=> 'form-control', 'placeholder'=>'name here']) }}
</div>

<div class="form-group">
{{ Form::label('email', 'E-Mail Address') }}
{{ Form::text('email', '' , ['class'=> 'form-control', 'placeholder'=>'email here'] ) }}
</div>

<div class="form-group">
{{ Form::label('message', 'Enter Message') }}
{{ Form::textarea('message', '', ['class'=> 'form-control', 'placeholder'=>'message here']) }}
</div>


<div class="">
  {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}

@endsection
