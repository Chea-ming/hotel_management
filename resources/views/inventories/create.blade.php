@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('dashboard') }}">Dashboard</a>
    <a href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a class="active" href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a href="{{ url('checks') }}">Check IN Info</a>
    <a href="{{ url('services') }}">Services Info</a>
    <a href="{{ url('bills') }}">Billing Info</a>
</div>
@stop
@section('content')
<head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style>

</style>
</head>

<div class="card" >
  <div class="card-header" style="font-family: 'Glyphicons Halflings';"><h3><b> Add Information </b></h3></div>
  <div class="card-body">

      <form  style="justify-content: center; align-items: center;" action="{{ url('inventories') }}" method="post">
        {!! csrf_field() !!}


        <!-- <label><b>Item ID</b></label></br>
        <input type="text" name="ItemID" id="ItemID" class="form-control" style="width:300px;" placeholder=""><br> -->

        <label><b>ItemName</b></label></br>
        <input type="text" name="ItemName" id="ItemName" class="form-control" style="width:300px;" placeholder=""><br>

        <label><b>Quantity Available</b></label></br>
        <input type="text" name="QuantityAvailable" id="QuantityAvailable" class="form-control" style="width:300px;" placeholder=""><br>

        <label><b>Unit Price</b></label></br>
        <input type="text" name="UnitPrice" id="UnitPrice" class="form-control" style="width:300px;" placeholder=""><br>

        <label><b>Reorder Level</b></label></br>
        <input type="text" name="ReorderLevel" id="ReorderLevel" class="form-control" style="width:300px;" placeholder=""><br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
