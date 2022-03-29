@extends('adminlte::page')

@section('title', 'board')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <span class="w3-right w3-opacity">1 min</span>
  <h4>John Doe</h4><br>
  <hr class="w3-clear">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="w3-row-padding" style="margin:0 -16px">
    </div>
  </div>
  <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
  <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
</div>


@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
