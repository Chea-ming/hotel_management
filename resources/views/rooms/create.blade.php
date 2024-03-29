@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('dashboard') }}">Dashboard</a>
    <a class="active" href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a href="{{ url('checks') }}">Check IN Info</a>
    <a href="{{ url('services') }}">Services Info</a>
    <a href="{{ url('bills') }}">Billing Info</a>
</div>
@stop
@section('content')
<style>

</style>
<div class="card" >
  <div class="card-header" style="font-family: 'Glyphicons Halflings';"><h3><b> Room Registration </b></h3></div>
  <div class="card-body">

      <form  style="justify-content: center; align-items: center;" action="{{ url('rooms') }}" method="post">
        {!! csrf_field() !!}

        <label><b>Room ID</b></label><br>
        <input type="hidden" name="RoomID" id="RoomID" class="form-control" style="width:300px;" placeholder="" ></br>

        <label><b>Room Type</b></label></br>
        <input type="text" name="RoomType" id="RoomType" class="form-control" style="width:300px;" placeholder="" required></br>

        <label><b>Room Number</b></label></br>
        <input type="text" name="RoomNumber" id="RoomNumber" class="form-control" style="width:300px;" placeholder="" ></br>

        <label><b>Room Rate</b></label></br>
        <input type="text" name="RoomRate" id="RoomRate" class="form-control" style="width:300px;" placeholder="" ></br>

        <label><b>Room Status</b></label></br>
        <input type="text" name="RoomStatus" id="RoomStatus" class="form-control" style="width:300px;" placeholder="" ></br>

        <label><b>Room Features</b></label></br>
        <input type="text" name="RoomFeatures" id="RoomFeatures" class="form-control" style="width:300px;" placeholder=""></br>

        <input type="submit" value="Save" class="btn btn-success"></br><br><br>
    </form>

  </div>
</div>

@stop
