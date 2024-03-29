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

<div class="card">
  <div class="card-header" style="font-family: 'Glyphicons Halflings';"><h3>Update Information</h3></div>
  <div class="card-body">

      <form action="{{ url('bills/'.$bill->BillID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

          <label><b>Guest Name</b></label><br>
          <select name="GuestID" id="GuestID" class="form-control">
              <option value="{{$bill->GuestID}}">{{$bill->guest->Name}}</option>
              @foreach($guests as $row)
                  <option value="{{$row->GuestID}}">{{$row->Name}}</option>
              @endforeach
          </select>
          <br>

          <label><b>Reservation ID</b></label><br>
          <select name="ReservationID" id="ReservationID" class="form-control">
              <option value="{{$bill->ReservationID}}">{{$bill->ReservationID}}</option>
              @foreach($reservations as $row)
                  <option value="{{$row->ReservationID}}">{{$row->ReservationID}}</option>
              @endforeach
          </select>
          <br>

          <label><b>Check IN</b></label><br>
          <input type="datetime-local" name="CheckInDateTime" id="CheckInDateTime" class="form-control" style="width:300px;" value="{{$bill->CheckInDateTime}}"><br>

          <label><b>Check Out</b></label><br>
          <input type="datetime-local" name="CheckOutDateTime" id="CheckOutDateTime" class="form-control" style="width:300px;" value="{{$bill->CheckOutDateTime}}"><br>

          <label><b>Total Charges</b></label><br>
          <input type="text" name="TotalCharges" id="TotalCharges" class="form-control" style="width:300px;" value="{{$bill->TotalCharges}}"><br>

          <label><b>Payment</b></label><br>
          <select name="PaymentStatus" id="PaymentStatus" class="form-control" style="width:300px;">
              <option value="{{$bill->PaymentStatus}}">{{$bill->PaymentStatus}}</option>
              <option value="Paid">Paid</option>
              <option value="UnPaid">UnPaid</option>
          </select> <br>

          <input type="submit" value="Update" class="btn btn-success" onclick="return confirm(&quot;Confirm Update?&quot;)"><br>
      </form>

  </div>
</div>

@stop
