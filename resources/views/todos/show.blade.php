@extends('adminlte::page')

@section('title', 'Equipment Info')

@section('content_header')
    <h1>Equipment Info</h1>
@stop

@section('content')
  <h2>{{ $todo->number; }}</h2>
  <h2>{{ $todo->hello; }}</h2>
  <h2>{{ $todo->contactinfo; }}</h2>
  <h2>{{ $todo->quanity; }}</h2>
  <h2>{{ $todo->servicesoftware; }}</h2>
  <h2>{{ $todo->price; }}</h2>
  <div><p>{{ $todo->purchasedate; }}% finished</p></div>
@stop
