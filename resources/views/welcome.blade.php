@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <span>Electronic Inc.</span>
</header>
@stop

@section('content')
    <p>Welcome to Electronic Inc. Inventory.</p>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Welcome get to know us!</b></h1>

  </div>

  <!-- Sales contact Information -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Sales contact information.</b></h1>

    <p>We are a Electronic Inc. service that focus on what's best for any electronic equiment and what's best for you!</p>
    <p>  Here put the sales contact and information. 
    </p>
  </div>


  <!-- Tech support contact Information -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Tech support contact information</b></h1>

    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Here put the tech support phone number and information
    </p>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
