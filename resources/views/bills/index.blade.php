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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- Include DataTables Buttons CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

<!-- Include PDFMake library -->
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>


<style>
.enlarge-on-hover {
            display: inline-block;
            text-decoration: none;
            padding: 10px;

            transition: font-size 0.3s;
        }

        .enlarge-on-hover:hover {
            font-size: 16px; /* You can adjust the font size as per your preference */
        }


    .filter-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    .filter-container span {
        margin-bottom: 5px;
    }

    .btn--promo {
  color: #dff9fb;
  background-color: #130f40;
  border-radius: 10px;

}

.btn--promo:after {
  display: inline-block;
  font-size: 1rem;
  color: white;
  background-color: #FF2400;
  border-radius: 30px;
  padding: 12px;
  position: absolute;
  margin-top: -20px;
  margin-left: -10px;
}

.btn--action{
  display: block;
  width: 100%;
  padding: 1rem;
  border-radius: 1.5rem;
  background-color: #f6e58d;
  color: #000;
  transition: all .5s ease 0s;
  box-shadow: 0 10px #f9ca24;
}

</style>
</head>


                    <div class="card">
                    <div class="card-header">
                        <h2 style="font-family: 'Glyphicons Halflings';"><b>Billing Information</b></h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/bills/create') }}" style="padding:10px; background-color: #63a91f;
background-image: linear-gradient(314deg, #63a91f 0%, #1a512e 74%);"class="btn btn-success btn-sm" title="Add New Entry"> New Registration </a>
                        <hr>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th>No</th> -->
                                <th>Bill ID</th>
                                <th>Guest Name</th>
                                <th>Reservation</th>
                                <th>Check IN</th>
                                <th>Check OUT</th>
                                <th>Charges</th>
                                <th>Payments</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @foreach($bills as $item)

                            <!-- <td><b>{{ $loop->iteration }}</b></td> -->
                            <td><b>{{ $item->BillID }}</b></td>
                            <td>{{ $item->guest->Name ?? '-' }}</td>
                            <td>{{ $item->reservation->ReservationStatus ?? '-' }}</td>
                            <td>{{ $item->CheckInDateTime ?? '-' }}</td>
                            <td>{{ $item->CheckOutDateTime ?? '-' }}</td>
                            <td>{{ $item->TotalCharges ?? '-' }}</td>
                            <td>{{ $item->PaymentStatus ?? '-' }}</td>

                            <td>
                                <a href="{{ url('/bills/' . $item->BillID) }}" title="View Details">
                                    <button style="margin-bottom:2px;" class="btn btn-info btn-sm"><i class="fas fa-eye" aria-hidden="true"></i>  View</button>
                                </a>
                                <a href="{{ url('/bills/' . $item->BillID . '/edit') }}" title="Edit Details">
                                    <button style="margin-bottom:2px;" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                </a>
                                <form method="POST" action="{{ url('/bills' . '/' . $item->BillID) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Details" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <i class="fas fa-trash" aria-hidden="true"></i>  Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                            @endforeach

                        </div>

                        </tbody>

                    </table>
                    <div>

                    </div>

                    </div>


                    </div>

                    </div>

                    </div>

                    </div>
@endsection

