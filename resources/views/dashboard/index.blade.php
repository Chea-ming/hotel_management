@extends('layout')
@section('side')

<div class="sidebar">
    <a class="active" href="{{ url('dashboard') }}">Dashboard</a>
    <a href="{{ url('rooms') }}">Room Info</a>
    <a href="{{ url('events') }}">Events Info</a>
    <a href="{{ url('inventories') }}">Inventory Info</a>
    <a href="{{ url('housekeepings') }}">House Keeping Info</a>
    <a href="{{ url('checks') }}">Check IN Info</a>
    <a href="{{ url('services') }}">Services Info</a>
    <a href="{{ url('bills') }}">Billing Info</a>
</div>

@stop
@section('content')

<style>
    .card-body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 50px;
      height: 400px;

    }

    .card {

      margin-right:20px;
      width: 400px;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 16px;
      padding-top: 15px;
      padding-bottom: 15px;
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.9);
      text-align: center;
      transition: transform 0.3s ease-in-out;
      font-family: 'Glyphicons Halflings';

    }

    .card:hover {
        transform: scale(1.09);
        background color: #A7A59E;
    }

    @media (max-width: 768px) {
    .card {
        width: calc(50% - 20px);
        }
    }

    .card-style a{
            color: grey ;
            transition: color 0.3s;
    }

    .card-style a:hover {
            color: #F2F3F4; /* Change text color on hover */
    }
    .animate-charcter
    {
    text-transform: uppercase;
    background-image: linear-gradient(
        -225deg,
        #231557 0%,
        #44107a 29%,
        #ff1361 67%,
        #fff800 100%
    );
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 25s linear infinite;
    display: inline-block;
        font-size: 35px;
        font-family: 'Glyphicons Halflings'
    }

    @keyframes textclip {
    to {
        background-position: 200% center;
    }
    }

</style>

            <div>

                <div style=" max-width: 1500px; margin: 5px auto; padding: 20px; background-color:white ; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); overflow: auto">

                    <div class="card-body">

                    <a href="{{ url('/rooms/') }}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="margin-top:30px;">
                            <h4>Rooms Info</h4>
                            <div class="card-style"><h5>Click to view more</h5></div>
                        </div>
                    </a>


                    <a href="{{ url('/events/') }}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="margin-top:30px;">
                            <h4>Events Info</h4>
                            <div class="card-style"><h5>Click to view more</h5></div>
                        </div>
                    </a>

                    <a href="{{ url('/inventories/') }}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="margin-top:30px;">
                            <h4>Inventory Info</h4>
                            <div class="card-style"><h5>Click to view more</h5></div>
                        </div>
                    </a>

                    <a href="{{ url('/housekeepings/') }}" style="text-decoration: none; color: inherit;">
                        <div class="card" style="margin-top:30px;">
                            <h4>House Keeping Info</h4>
                            <div class="card-style"><h5>Click to view more</h5></div>
                        </div>
                    </a>

                        <a href="{{ url('/services/') }}" style="text-decoration: none; color: inherit;">
                            <div class="card" style="margin-top:30px;">
                                <h4>Services Info</h4>
                                <div class="card-style"><h5>Click to view more</h5></div>
                            </div>
                        </a>

                        <a href="{{ url('/checks/') }}" style="text-decoration: none; color: inherit;">
                            <div class="card" style="margin-top:30px;">
                                <h4>Check IN Info</h4>
                                <div class="card-style"><h5>Click to view more</h5></div>
                            </div>
                        </a>

                        <a href="{{ url('/bills/') }}" style="text-decoration: none; color: inherit;">
                            <div class="card" style="margin-top:30px;">
                                <h4>Bills Info</h4>
                                <div class="card-style"><h5>Click to view more</h5></div>
                            </div>
                        </a>

                    </div>

                </div>

            </div>
@endsection
