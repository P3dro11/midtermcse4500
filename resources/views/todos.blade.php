@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Equipment Info</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th style="width: 10px">Name</th><th style="width: 10px">Contact Info</th><th style="width: 10px">Quantity</th><th style="width: 10px">Services/Software</th><th style="width: 10px">Price</th><th style="width: 40px">Purchase Date</th>
        </tr>
      </thead>
      <tbody>

        @foreach($todos AS $todo)
        <tr>
          <td>{{ $todo->id }}</td>
          <td>{{ $todo->title }}</td>
          <td><div class="box box-solid box-primary">...</div><div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: {{ $todo->progress }}%"></div></div></td>
          <td><a class="btn btn-default btn-sm" href="{{ route('todos.show',['todo'=>$todo->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('todos.create') }} " class="btn btn-primary" >Create</a>
@stop


@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
