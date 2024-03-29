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
  <div class="card-header"><h3 style="font-family: 'Glyphicons Halflings';">Room Service Details</h3></div>
  <div class="card-body">


        <div class="card-body">

        <h5 class="card-text">Room Service ID : <h4> {{ $service->ServiceID }}</h4></h5>
        <hr>

        <p class="card-title"><b>Guest Name : </b>  {{ $service->guest->Name }}</p>
        <p class="card-title"><b>Staff Name : </b>  {{ $service->staff->Name }}</p>
        <p class="card-title"><b>Room Number: </b>  {{ $service->RoomNumber }}</p>
        <p class="card-title"><b>Service Type: </b>  {{ $service->ServiceType }}</p>
        <p class="card-title"><b>Request Time : </b>  {{ $service->RequestDateTime }}</p>
        <p class="card-title"><b>Status : </b>  {{ $service->Status }}</p>

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
