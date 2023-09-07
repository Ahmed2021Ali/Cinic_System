@extends('backend.layouts.parent')

@section('title', 'All Users')


@section('content')
    <div class="row">
        <div class="col-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name En</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th>Email Verified At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalis as $detalis)
                        <tr>
                            <td>{{ $detalis->id }}</td>
                            <td>{{ $detalis->name }}</td>
                            <td>{{ $detalis->email}}</td>
                            <td>{{ $detalis->phone  }}</td>
                            <td>{{ $detalis->type }}</td>
                            <td>{{ $detalis->email_verified_at }}</td>
                            <td>
                                <a href="{{ route('user.edit', $detalis->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('user.destroy', $detalis->id) }}" method="post"
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

