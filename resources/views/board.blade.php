@extends('adminlte::page')

@section('title', 'board')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
  <span class="w3-right w3-opacity">1 min</span>
  <h4>John Doe</h4><br>
  <hr class="w3-clear">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
      </div>
      <div class="w3-half">
        <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
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
