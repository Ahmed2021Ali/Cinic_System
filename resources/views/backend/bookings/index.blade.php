@extends('backend.layouts.parent')

@section('title', 'All Bookings')


@section('content')
    <div class="row">
        <div class="col-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name Patient </th>
                        <th>Phone Patient</th>
                        <th>Email Patient </th>
                        <th>doctor Name </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->doctor->name}}</td>
                            <td>
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="post"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class=" btn btn-danger"> Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

