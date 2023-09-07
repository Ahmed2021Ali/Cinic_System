@extends('backend.layouts.parent')

@section('title', 'All Massage from User')


@section('content')
    <div class="row">
        <div class="col-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name  </th>
                        <th>Phone </th>
                        <th>Email  </th>
                        <th>Title </th>
                        <th>Subject </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->title}}</td>
                            <td>{{ $contact->subject}}</td>
                            <td>
                                <form action="{{ route('contact_us.destroy', $contact->id) }}" method="post"
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

