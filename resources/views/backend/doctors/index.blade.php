@extends('backend.layouts.parent')

@section('title', 'All Doctors')


@section('content')

    <div class="row">
        <div class="col-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name </th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>City </th>
                        <th>Major Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctor as $doctor)
                        <tr>
                            <td>{{ $doctor->id }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->city}}</td>
                            <td>{{ $doctor->major->title}}</td>
                            <td>
                                <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post"
                                    class="d-inline">
                                    @method('DELETE')
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

