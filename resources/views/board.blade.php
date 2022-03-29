@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware specs</h1>
@stop

@section('content')
<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <h4>Capacitors</h4><br>
  <hr class="w3-clear">
  <p>A capacitor is an electronic component characterized by its capacity to store an electric charge. A capacitor is a passive electrical component that can store energy in the electric field between a pair of conductors (called “plates”).
     Starting price: 5.99 plus taxes
  </p>
    <div class="w3-row-padding" style="margin:0 -16px">
    </div>
  </div>
  <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
  <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
</div>
<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <h4>Integrated Circuit</h4><br>
  <hr class="w3-clear">
  <p>Integrated Circuit or IC is an SMD Electronic Component made up of combination of several transistors, diode, resistor, capacitors in a tiny semiconductor chip. Integrated Circuit Electronic Components or IC are of small size and very light weight. They produce excellent results at low power.
     Starting price: 9.99 plus taxes
  </p>
    <div class="w3-row-padding" style="margin:0 -16px">
    </div>
  </div>
  <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
  <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
</div>
<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <h4>Resistor</h4><br>
  <hr class="w3-clear">
  <p>A Resistor is an electrical device that resists the flow of electrical current. It is a passive device used to control, or impede the flow of, electric current in an electric circuit by providing resistance, thereby developing a drop in voltage across the device.
     Starting price: 2.99 plus taxes
  </p>
    <div class="w3-row-padding" style="margin:0 -16px">
    </div>
  </div>
  <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
  <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
</div>
<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <h4>Many more to come...</h4><br>
  <hr class="w3-clear">
  <p>Thank you for patiently waiting. 
  </p>
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
