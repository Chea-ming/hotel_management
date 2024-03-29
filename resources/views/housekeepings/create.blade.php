@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('dashboard') }}">Dashboard</a>
    <a href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a href="{{ url('inventories') }}">Inventory Info</a>
    <a class="active" href="{{ url('housekeepings') }}">House Keeping Info</a>
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

      <form  style="justify-content: center; align-items: center;" action="{{ url('housekeepings') }}" method="post">
        {!! csrf_field() !!}

        <!-- <label><b>Event ID</b></label></br>
        <input type="text" name="EventID" id="EventID" class="form-control" style="width:300px;" placeholder=""><br> -->

        <label><b>Staff Name</b></label><br>
          <select name="StaffID" id="StaffID" class="form-control">
              @foreach($staff as $row)
                  <option value="{{$row->StaffID}}">{{$row->Name}}</option>
              @endforeach
          </select>
        <br>
        <label><b>Room Number</b></label><br>
        <input type="text" name="RoomNumber" id="RoomNumber" class="form-control" style="width:300px;" placeholder=""><br>

        <label><b>Cleaing Schedule</b></label>
          <input type="date" name="CleaningSchedule" id="CleaningSchedule" class="form-control"> <br>

        <label><b>Cleaning Status</b></label><br>
        <select name="CleaningStatus" id="CleaningStatus" class="form-control">
            <option value="Completed">Completed</option>
            <option value="Pending">Pending</option>
        </select> <br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>


@stop
