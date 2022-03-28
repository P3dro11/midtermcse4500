@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Equipment Info</h1>
@stop

@section('content')
<form method="post" action="{{ route('todos.store') }}" >
    @csrf
    <x-adminlte-input name="number" type="number" min=0 max=100 label="Number" />
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="contactinfo" label="Contact Info" />
    <x-adminlte-input name="quanity" type="number" min=0 max=100 label="Quanity" />
    <x-adminlte-input name="services,software" label="Services/Software" />
    <x-adminlte-input name="price" type="number" min=0 max=100 label="Price" />
    <x-adminlte-input name="purchasedate" label="Purchase Date" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
