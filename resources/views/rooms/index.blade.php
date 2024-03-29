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
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- jQuery library -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

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

</style>
</head>
                <div class="card">
                    <div class="card-header">
                        <h2 style="font-family: 'Glyphicons Halflings';"><b>Room's Information</b></h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/rooms/create') }}" style="padding:10px; background-color: #63a91f;
background-image: linear-gradient(314deg, #63a91f 0%, #1a512e 74%);
"class="btn btn-success btn-sm" title="Add New Entry"> New Registration </a>

                        <div class="table-responsive">
                        <table class="table">
                        <br>

                                <thead>
                                    <tr>
                                        <!-- <th>No</th> -->
                                        <th>Room ID</th>
                                        <th>Room Type</th>
                                        <th>Room Number</th>
                                        <th>Room Rate</th>
                                        <th>RoomStatus</th>
                                        <th>Room Features</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $item)
                                    <tr>

                                        <!-- <td><b>{{ $loop->iteration }}</b></td> -->
                                        <td>{{ $item->RoomID ?? '-' }}</td>
                                        <td>{{ $item->RoomType ?? '-' }}</td>
                                        <td>{{ $item->RoomNumber ?? '-' }}</td>
                                        <td>{{ $item->RoomRate ?? '-' }}</td>
                                        <td>{{ $item->RoomStatus ?? '-' }}</td>
                                        <td>{{ $item->RoomFeatures ?? '-' }}</td>

                                        <td>
                                            <a href="{{ url('/rooms/' . $item->RoomID) }}" title="View Details"><button style="margin-bottom:2px;"class="btn btn-info btn-sm"><i class="fas fa-eye" aria-hidden="true"></i>  View</button></a>
                                            <a href="{{ url('/rooms/' . $item->RoomID . '/edit') }}" title="Edit Details"><button style="margin-bottom:2px;" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/rooms' . '/' . $item->RoomID) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Details" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash" aria-hidden="true"></i>  Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>


@endsection
