@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="col-md-12">
            <h1>Requerments lists</h1>
            <p class="text-left"><a href="{{route('lowker.create')}}" class="btn btn-md btn-success">Create</a></p>
            @if (session('success'))
                <p class="alert alert-success">
                    {{ session('success') }}
                </p>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-bordered" id="product-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Requerments</th>
                    <th>Description</th>
                    <th>Closing Date</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach($lowker as $row)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$row->requerments}}</td>
                        <td>{!! html_entity_decode($row->description) !!}</td>
                        <td>{{$row->closing_date}}</td>
                    <td>
                    <a href="{{route('lowker.edit',$row->id)}}" class="btn btn-info btn-xs">edit</a>

                        <form action="{{ action('ContactController@destroy',['id'=>$row->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                    </td>
                    @endforeach
                </tbody>
            </table>
    {{ $lowker->links() }}
        </div>
    </div>
@endsection


