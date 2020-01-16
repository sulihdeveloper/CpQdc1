@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="container" id="content">
            <div class="col-md-12">
                <h1> Daftar Carrer</h1>
            </div>
        </div>
        @if (session('success'))
            <p class="alert alert-success">
                {{ session('success') }}
            </p>
        @endif
    </div>
    @if($carrer->isEmpty())

    @endif
        <div class="col-md-12">
            <table class="table table-bordered" id="carrer-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>Image</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
                @foreach($carrer as $row)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{ $row->first_name }}</td>
                        <td>{{ $row->last_name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->address }}</td>
                        <td><img src="{{ URL::to('/') }}/images/{{ $row->photo }}" class="img-thumbnail" width="75" /></td>
                        <td><img src="{{ URL::to('/') }}/images/{{ $row->file }}" class="img-thumbnail" width="75" /></td>
                        <form action="{{ action('CarrerController@destroy',['id'=>$row->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                        @endforeach
                    </tr>
            </table>
        </div>
    </div>
    {!! $carrer->links() !!}
@endsection
