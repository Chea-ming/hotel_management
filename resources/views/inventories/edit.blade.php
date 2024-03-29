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
  <div class="card-header" style="font-family: 'Glyphicons Halflings';"><h3>Update Information</h3></div>
  <div class="card-body">

      <form action="{{ url('inventories/' .$inventories->ItemID) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="ItemID" id="ItemID" value="{{$inventories->ItemID}}" id="ItemID" />

        <label><b>Item Name</b></label></br>
        <input type="text" name="ItemName" id="ItemName" value="{{$inventories->ItemName}}" style="width:300px;" class="form-control"></br>

        <label><b>Quantity Available</b></label></br>
        <input type="text" name="QuantityAvailable" id="QuantityAvailable" value="{{$inventories->QuantityAvailable}}" style="width:300px;" class="form-control"></br>

        <label><b>Unit Price</b></label></br>
        <input type="text" name="UnitPrice" id="UnitPrice" value="{{$inventories->UnitPrice}}" style="width:300px;" class="form-control"></br>

        <label><b>Reorder Level</b></label></br>
        <input type="text" name="ReorderLevel" id="ReorderLevel" value="{{$inventories->ReorderLevel}}" style="width:300px;" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success" onclick="return confirm(&quot;Confirm Update?&quot;)"></br>

      </form>

  </div>
</div>
@stop
