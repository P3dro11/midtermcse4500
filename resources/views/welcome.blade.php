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
    <p>  This is our sales information.
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Indio, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </p>
  </div>


  <!-- Tech support contact Information -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Tech support contact information</b></h1>

    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Here put the tech support phone number and information
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Coachella, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </p>
  </div>

 <!-- Construct the box with style you want. Here we are using box-danger -->
      <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
      <!-- The contextual class should match the box, so we are using direct-chat-danger -->
      <div class="box box-danger direct-chat direct-chat-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Direct Chat</h3>
          <div class="box-tools pull-right">
            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <!-- In box-tools add this button if you intend to use the contacts pane -->
            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <!-- Conversations are loaded here -->
          <div class="direct-chat-messages">
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
              <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
              </div><!-- /.direct-chat-info -->
              <!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                Hello, welcome to Electronic Inc.
              </div><!-- /.direct-chat-text -->
            </div><!-- /.direct-chat-msg -->

            <!-- Message to the right -->
            <div class="direct-chat-msg right">
              <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
              </div><!-- /.direct-chat-info -->
              <!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                You better believe it!
              </div><!-- /.direct-chat-text -->
            </div><!-- /.direct-chat-msg -->
          </div><!--/.direct-chat-messages-->

@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
