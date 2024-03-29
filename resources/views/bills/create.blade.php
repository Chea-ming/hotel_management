@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a href="{{ url('checks') }}">Check IN Info</a>
    <a href="{{ url('services') }}">Services Info</a>
    <a class="active" href="{{ url('bills') }}">Billing Info</a>
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

      <form  style="justify-content: center; align-items: center;" action="{{ url('bills') }}" method="post">
        {!! csrf_field() !!}

        <!-- <label><b>Event ID</b></label></br>
        <input type="text" name="EventID" id="EventID" class="form-control" style="width:300px;" placeholder=""><br> -->

          <label><b>Guest Name</b></label><br>
          <select name="GuestID" id="GuestID" class="form-control">
              @foreach($guests as $row)
                  <option value="{{$row->GuestID}}">{{$row->Name}}</option>
              @endforeach
          </select>
          <br>

        <label><b>Reservation ID</b></label><br>
          <select name="ReservationID" id="ReservationID" class="form-control">
              @foreach($reservations as $row)
                  <option value="{{$row->ReservationID}}">{{$row->ReservationID}}</option>
              @endforeach
          </select>
        <br>

          <label><b>Check IN</b></label><br>
          <input type="datetime-local" name="CheckInDateTime" id="CheckInDateTime" class="form-control" style="width:300px;" placeholder=""><br>

          <label><b>Check Out</b></label><br>
          <input type="datetime-local" name="CheckOutDateTime" id="CheckOutDateTime" class="form-control" style="width:300px;" placeholder=""><br>

        <label><b>Total Charges</b></label><br>
        <input type="text" name="TotalCharges" id="TotalCharges" class="form-control" style="width:300px;" placeholder=""><br>

          <label><b>Payment</b></label><br>
          <select name="PaymentStatus" id="PaymentStatus" class="form-control" style="width:300px;">
              <option value="Paid">Paid</option>
              <option value="UnPaid">UnPaid</option>
          </select> <br>


          <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>


@stop
