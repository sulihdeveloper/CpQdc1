@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="container" id="content">
            <div class="col-md-12">
                <h1>contact</h1>
            </div>
        </div>
        @if (session('success'))
            <p class="alert alert-success">
                {{ session('success') }}
            </p>
        @endif

        <div class="col-md-12">
            <table class="table table-bordered" id="contact-table">
            <thead>
            <tr>
            <th>No</th>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
            <th>Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{++$i}}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->subject }}</td>
                <td>{{ $row->message }}</td>
                <td>
                    <form action="{{ action('ContactController@destroy',['id'=>$row->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                </td>
                @endforeach
            </tr>
            </table>
        </div>
    </div>
    {!! $data->links() !!}
@endsection
