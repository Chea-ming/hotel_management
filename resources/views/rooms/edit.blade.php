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

<div class="card">
  <div class="card-header" style="font-family: 'Glyphicons Halflings';"><h3>Update Information</h3></div>
  <div class="card-body">

      <form action="{{ url('rooms/' .$rooms->RoomID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")


        <!-- <input type="hidden" name="id" id="id" value="{{$rooms->id}}" id="id" /> -->
<!--
        <label><b>Room ID</b></label></br>
        <input type="text" name="RoomID" id="RoomID" value="{{$rooms->RoomID}}" style="width:300px;" class="form-control"></br>
         -->
        <input type="hidden" name="RoomID" id="RoomID" value="{{$rooms->RoomID}}" style="width:300px;" class="form-control"></br>


        <label><b>Room Type</b></label></br>
        <input type="text" name="RoomType" id="RoomType" value="{{$rooms->RoomType}}" style="width:300px;" class="form-control"></br>

        <label><b>Room Number</b></label></br>
        <input type="text" name="RoomNumber" id="RoomNumber" value="{{$rooms->RoomNumber}}" style="width:300px;" class="form-control"></br>

        <label><b>Room Rate</b></label></br>
        <input type="text" name="RoomRate" id="RoomRate" value="{{$rooms->RoomRate}}" style="width:300px;" class="form-control"></br>

        <label><b>Room Status</b></label></br>
        <input type="text" name="RoomStatus" id="RoomStatus" value="{{$rooms->RoomStatus}}" style="width:300px;" class="form-control"></br>

        <label><b>RoomFeatures</b></label></br>
        <input type="text" name="RoomFeatures" id="RoomFeatures" value="{{$rooms->RoomFeatures}}" style="width:300px;" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success" onclick="return confirm(&quot;Confirm Update?&quot;)"></br>

    </form>

  </div>
</div>

@stop
