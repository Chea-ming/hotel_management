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

<div class="card">
  <div class="card-header" style="font-family: 'Glyphicons Halflings';"><h3>Update Information</h3></div>
  <div class="card-body">

      <form action="{{ url('housekeepings/'.$housekeeping->HousekeepingID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="HousekeepingID" id="HousekeepingID" value="{{$housekeeping->HousekeepingID}}" id="HousekeepingID" />

        <label><b>Staff Name</b></label><br>
          <select name="StaffID" id="StaffID" class="form-control">
              <option value="{{$housekeeping->StaffID}}">{{$housekeeping->staff->Name}}</option>
              @foreach($staff as $row)
                  <option value="{{$row->StaffID}}">{{$row->Name}}</option>
              @endforeach
          </select> <br>

          <label><b>Room Number</b></label><br>
          <input type="text" name="RoomNumber" id="RoomNumber" class="form-control" style="width:300px;" value="{{$housekeeping->RoomNumber}}"><br>

          <label><b>Cleaing Schedule</b></label>
          <input type="date" name="CleaningSchedule" id="CleaningSchedule" class="form-control" value="{{$housekeeping->CleaningSchedule}}"> <br>

          <label><b>Cleaning Status</b></label><br>
          <select name="CleaningStatus" id="CleaningStatus" class="form-control">
              <option value="{{$housekeeping->CleaningStatus}}">{{$housekeeping->CleaningStatus}}</option>
              <option value="Completed">Completed</option>
              <option value="Pending">Pending</option>
          </select> <br>

        <input type="submit" value="Update" class="btn btn-success" onclick="return confirm(&quot;Confirm Update?&quot;)"></br>

      </form>

  </div>
</div>

@stop
