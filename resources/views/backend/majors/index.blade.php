@extends('backend.layouts.parent')

@section('title', 'All Maajors')


@section('content')
    <div class="row">
        <div class="col-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title </th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalis as $detalis)
                        <tr>
                            <td>{{ $detalis->id }}</td>
                            <td>{{ $detalis->title }}</td>

                            <td>
                                <a href="{{route('doctor.index', $detalis->id)}}" class="btn btn-success">Major doctors</a>
                                <a href="{{ route('major.edit', $detalis->id) }}" class="btn btn-warning">Edit Major</a>
                                <form action="{{ route('major.destroy', $detalis->id) }}" method="post"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class=" btn btn-danger"> Delete Major</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

