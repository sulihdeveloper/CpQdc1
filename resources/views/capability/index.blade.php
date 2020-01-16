@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if ($pesan = Session::get('pesan'))
                    <div class="alert alert-success">
                        <p>{{ $pesan }}</p>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <h2>Daftar Konten</h2>
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('capability.create') }}"> Create</a>
                        </div>


                        <table class="table table-bordered" id="news-table">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Image</th>
                                <th>action</th>
                            </thead>

                            <tr>
                            @foreach($capability as $k=>$data)
                                <tr>
                                    <td>{{ $capability->firstItem() + $k }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{!! html_entity_decode($data->isi) !!}</td>
                                    <td><img src="{{url('images/'.$data->image)}}" width="160" height="115"></td>
                                    <td>
                                        <a href="{{route('capability.show',$data->id)}}" class="btn btn-success btn-xs">show</a>
                                        <form action="{{ action('CapabilityController@destroy',['id'=>$data->id]) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                    </td>
                                    @endforeach
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
