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

      <form  style="justify-content: center; align-items: center;" action="{{ url('events') }}" method="post">
        {!! csrf_field() !!}

        <!-- <label><b>Event ID</b></label></br>
        <input type="text" name="EventID" id="EventID" class="form-control" style="width:300px;" placeholder=""><br> -->

        <label><b>Event Name</b></label><br>
        <input type="text" name="EventName" id="EventName" class="form-control" style="width:300px;" placeholder="" Required><br>

        <label><b>Event Date & Time</b></label><br>
        <input type="text" name="EventDateTime" id="EventDateTime" class="form-control" style="width:300px;" placeholder=""><br>

        <label><b>Venue</b></label><br>
        <input type="text" name="Venue" id="Venue" class="form-control" style="width:300px;" placeholder=""><br>

        <label><b>Guest List</b></label><br>
        <textarea name="GuestList" id="GuestList" class="form-control" style="width:300px; height:150px;" placeholder=""></textarea><br>

        <label><b>Event Organizer</b></label><br>
        <input type="text" name="EventOrganizer" id="EventOrganizer" class="form-control" style="width:300px;" placeholder=""><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>
<script>
    $(document).ready(function(){
        // Add datepicker to the input field with the desired date format for ex_date
        $("date").datepicker({
        });

    });
</script>

@stop
