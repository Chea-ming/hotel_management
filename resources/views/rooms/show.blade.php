@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('dashboard') }}">Dashboard</a>
    <a class="active" href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a href="{{ url('checks') }}">Check IN Info</a>
    <a href="{{ url('services') }}">Services Info</a>
    <a href="{{ url('bills') }}">Billing Info</a>
</div>
@stop
@section('content')
<div class="card">
  <div class="card-header"><h3 style="font-family: 'Glyphicons Halflings';">Room Details</h3></div>
  <div class="card-body">


        <div class="card-body">

        <h5 class="card-title">Room ID :<h4>{{ $rooms->RoomID }}</h4></h5>
        <hr>

        <p class="card-text"><b>RoomType : </b>  {{ $rooms->RoomType }}</p>

        <p class="card-text"><b>Room Number : </b>  {{ $rooms->RoomNumber }}</p>

        <p class="card-title"><b>Room Rate :</b>  {{ $rooms->RoomRate }}</p>

        <p class="card-title"><b>Room Status :</b>  {{ $rooms->RoomStatus }}</p>

        <p class="card-title"><b>Room Features :</b>  {{ $rooms->RoomFeatures }}</p>

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
