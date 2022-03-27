@extends('adminlte::page')

@section('title', 'Equipment Info')

@section('content_header')
    <h1>Equipment Info</h1>
@stop

@section('content')
<form method="post" action="{{ route('todos.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="progress" type="number" min=0 max=100 label="Progress" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
