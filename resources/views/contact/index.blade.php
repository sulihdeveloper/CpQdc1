@extends('layouts.app')

@section('content')

    <table class="table table-bordered table-striped">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->subject }}</td>
                <td>{{ $row->message }}</td>
                <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                <td>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
