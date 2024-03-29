@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('dashboard') }}">Dashboard</a>
    <a href="{{ url('rooms') }}">Room Info</a>
    <a class="active" href="{{ url('events') }}">Events Info</a>
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

      <form action="{{ url('events/' .$events->EventID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="EventID" id="EventID" value="{{$events->EventID}}" id="EventID" />

        <label><b>Event Name</b></label></br>
        <input type="text" name="EventName" id="EventName" value="{{$events->EventName}}" style="width:300px;" class="form-control"></br>

        <label><b>Event Date & Time</b></label></br>
        <input type="text" name="EventDateTime" id="EventDateTime" value="{{$events->EventDateTime}}" style="width:300px;" class="form-control"></br>

        <label><b>Venue</b></label></br>
        <input type="text" name="Venue" id="Venue" value="{{$events->Venue}}" style="width:300px;" class="form-control"></br>

        <label><b>Guest List</b></label></br>
        <textarea name="GuestList" id="GuestList" value="{{$events->GuestList}}"class="form-control" style="width:300px; height:150px;" placeholder=""></textarea></br>


        <label><b>Event Organizer</b></label></br>
        <input type="text" name="EventOrganizer" id="EventOrganizer" value="{{$events->EventOrganizer}}" style="width:300px;" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success" onclick="return confirm(&quot;Confirm Update?&quot;)"></br>

      </form>

  </div>
</div>
<script>
    $(document).ready(function(){
        // Add datepicker to the input field with the desired date format for ex_date
        $("#ex_date").datepicker({
            dateFormat: 'dd/mm/yy'
        });

        // Add datepicker to the input field with the desired date format for renew_date
        $("#renew_date").datepicker({
            dateFormat: 'dd/mm/yy'
        });
    });
</script>
@stop
