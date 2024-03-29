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
  <div class="card-header"><h3 style="font-family: 'Glyphicons Halflings';">Billing Details</h3></div>
  <div class="card-body">


        <div class="card-body">

        <h5 class="card-text">Billing ID : <h4> {{ $bill->BillID }}</h4></h5>
        <hr>

        <p class="card-title"><b>Guest Name : </b>  {{ $bill->guest->Name }}</p>
        <p class="card-title"><b>Reservation : </b>  {{ $bill->reservation->ReservationStatus }}</p>
        <p class="card-title"><b>Check IN : </b>  {{ $bill->CheckInDateTime }}</p>
        <p class="card-title"><b>Check OUT: </b>  {{ $bill->CheckOutDateTime }}</p>
        <p class="card-title"><b>Total Charges : </b>  {{ $bill->TotalCharges }}</p>
        <p class="card-title"><b>Payment : </b>  {{ $bill->PaymentStatus }}</p>

        <a href="{{ url()->previous() }}" class="btn btn-success btn-sm" style="padding-right:15px; padding-left:15px;">Back</a>

  </div>

  </div>
</div>

<script>
                    function printPage()
                    {
                            window.print();
                    }
</script>
@endsection
