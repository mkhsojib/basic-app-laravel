@extends('layouts.app')

@section('content')
<h1>Home Page</h1>

@endsection


@section('sidebar')
@parent
<h1>this is custom text for home page</h1>

@endsection
