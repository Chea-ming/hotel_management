@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a class="active" href="{{ url('checks') }}">Check IN Info</a>
    <a href="{{ url('services') }}">Services Info</a>
    <a href="{{ url('bills') }}">Billing Info</a>
</div>

@stop
@section('content')



<div class="card">
  <div class="card-header"><h3 style="font-family: 'Glyphicons Halflings';">Check IN Check OUT Details</h3></div>
  <div class="card-body">


        <div class="card-body">

        <h5 class="card-text">Check IN ID : <h4> {{ $check->HousekeepingID }}</h4></h5>
        <hr>

        <p class="card-title"><b>Guest Name : </b>  {{ $check->guest->Name }}</p>
        <p class="card-title"><b>Staff Name : </b>  {{ $check->staff->Name }}</p>
        <p class="card-title"><b>Check IN : </b>  {{ $check->CheckInDateTime }}</p>
        <p class="card-title"><b>Check OUT: </b>  {{ $check->CheckOutDateTime }}</p>
        <p class="card-title"><b>Room Number : </b>  {{ $check->RoomNumber }}</p>

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
