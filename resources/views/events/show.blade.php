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
  <div class="card-header"><h3 style="font-family: 'Glyphicons Halflings';">Event Details</h3></div>
  <div class="card-body">


        <div class="card-body">

        <h5 class="card-text">Event ID : <h4> {{ $events->EventID }}</h4></h5>
        <hr>

        <p class="card-title"><b>Event Name : </b>  {{ $events->EventName }}</p>

        <p class="card-title"><b>Event Date & Time : </b>  {{ $events->EventDateTime }}</p>

        <p class="card-title"><b>Venue : </b>  {{ $events->Venue }}</p>

        <p class="card-title"><b>Guest List : </b>  {{ $events->GuestList }}</p>

        <p class="card-title"><b>Event Organizer : </b>  {{ $events->EventOrganizer }}</p>


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
