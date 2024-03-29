@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a href="{{ url('checks') }}">Check IN Info</a>
    <a class="active" href="{{ url('services') }}">Services Info</a>
    <a href="{{ url('bills') }}">Billing Info</a>
</div>
@stop
@section('content')

<div class="card">
  <div class="card-header" style="font-family: 'Glyphicons Halflings';"><h3>Update Information</h3></div>
  <div class="card-body">

      <form action="{{ url('services/'.$service->ServiceID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

          <label><b>Guest Name</b></label><br>
          <select name="GuestID" id="GuestID" class="form-control">
              <option value="{{$service->GuestID}}">{{$service->guest->Name}}</option>
              @foreach($guests as $row)
                  <option value="{{$row->GuestID}}">{{$row->Name}}</option>
              @endforeach
          </select>
          <br>

          <label><b>Staff Name</b></label><br>
          <select name="StaffID" id="StaffID" class="form-control">
              <option value="{{$service->StaffID}}">{{$service->staff->Name}}</option>
              @foreach($staff as $row)
                  <option value="{{$row->StaffID}}">{{$row->Name}}</option>
              @endforeach
          </select>
          <br>

          <label><b>Room Number</b></label><br>
          <input type="text" name="RoomNumber" id="RoomNumber" class="form-control" style="width:300px;" value="{{$service->RoomNumber}}"><br>

          <label><b>Service Type</b></label><br>
          <input type="text" name="ServiceType" id="ServiceType" class="form-control" style="width:300px;" value="{{$service->ServiceType}}"><br>

          <label><b>Request Time</b></label><br>
          <input type="datetime-local" name="RequestDateTime" id="RequestDateTime" class="form-control" style="width:300px;" value="{{$service->RequestDateTime}}"><br>

          <label><b>Status</b></label><br>
          <select name="Status" id="Status" class="form-control">
              <option value="{{$service->Status}}">{{$service->Status}}</option>
              <option value="Completed">Completed</option>
              <option value="Pending">Pending</option>
          </select> <br>

        <input type="submit" value="Update" class="btn btn-success" onclick="return confirm(&quot;Confirm Update?&quot;)"></br>

      </form>

  </div>
</div>

@stop
