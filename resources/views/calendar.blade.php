@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Invoice</h1>
@stop

@section('content')
<div class="w3-card w3-round w3-white w3-hide-small">
  <div class="w3-container">
    <p>Interests</p>
    <p>
      <span class="w3-tag w3-small w3-theme-d5">News</span>
      <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
      <span class="w3-tag w3-small w3-theme-d3">Labels</span>
      <span class="w3-tag w3-small w3-theme-d2">Games</span>
      <span class="w3-tag w3-small w3-theme-d1">Friends</span>
      <span class="w3-tag w3-small w3-theme">Games</span>
      <span class="w3-tag w3-small w3-theme-l1">Friends</span>
      <span class="w3-tag w3-small w3-theme-l2">Food</span>
      <span class="w3-tag w3-small w3-theme-l3">Design</span>
      <span class="w3-tag w3-small w3-theme-l4">Art</span>
      <span class="w3-tag w3-small w3-theme-l5">Photos</span>
    </p>
  </div>
</div>
<br>

<!-- Alert Box -->
<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
    <i class="fa fa-remove"></i>
  </span>
  <p><strong>Hey!</strong></p>
  <p>People are looking at your profile. Find out who.</p>
</div>

<!-- End Left Column -->
</div>

<!-- Middle Column -->

<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <h4>Invoice</h4><br>
  <hr class="w3-clear">
  <p></p>
    <div class="w3-row-padding" style="margin:0 -16px">
</div>

@stop
