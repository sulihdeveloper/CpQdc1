@extends('layouts.app')

@section('content')
    <div class="container" id="content">
        <div class="col-md-12">
            <h1>Requerments lists</h1>
            <p class="text-center"><a href="{{route('lowker.create')}}" class="btn btn-md btn-success">add new Requerments</a></p>
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
                    <th>Requerments</th>
                    <th>Description</th>
                    <th>Closing Date</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach($lowker as $row)
                    <tr>
                        <td>{{$row->requerments}}</td>
                        <td>{!! html_entity_decode($row->description) !!}</td>
                        <td>{{$row->closing_date}}</td>
                    <td>
                    <a href="{{route('lowker.show',$row->id)}}" class="btn btn-success btn-xs">show</a>
                    <a href="{{route('lowker.edit',$row->id)}}" class="btn btn-info btn-xs">edit</a>
                    <a class="inline" method="POST" action="{{route('lowker.destroy',$row->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-xs">delete</button>
                    </a>
                    </td>
                    @endforeach
                </tbody>
            </table>
    {{ $lowker->links() }}
        </div>
    </div>
@endsection

