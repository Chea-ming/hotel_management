@extends('layout')
@section('side')
<div class="sidebar">
    <a href="{{ url('dashboard') }}">Dashboard</a>
    <a href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a class="active" href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a href="{{ url('checks') }}">Check IN Info</a>
    <a href="{{ url('services') }}">Services Info</a>
    <a href="{{ url('bills') }}">Billing Info</a>
</div>
@stop
@section('content')

<div class="card">
  <div class="card-header"><h3 style="font-family: 'Glyphicons Halflings';">Inventory Details</h3></div>
  <div class="card-body">


        <div class="card-body">

        <h5 class="card-text">Item ID : <h4> {{ $inventories->ItemID }}</h4></h5>
        <hr>

        <p class="card-title"><b>Item Name : </b>  {{ $inventories->ItemName }}</p>

        <p class="card-title"><b>Quantity Available : </b>  {{ $inventories->QuantityAvailable }}</p>

        <p class="card-title"><b>Unit Price : </b>  {{ $inventories->UnitPrice }}</p>

        <p class="card-title"><b>Reorder Level : </b>  {{ $inventories->ReorderLevel }}</p>

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
