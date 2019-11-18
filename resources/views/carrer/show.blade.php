@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        </div>

        <div class="container" id="content" >
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <div align="right">
                        <a href="{{ route('carrer.index') }}" class="btn btn-default">Back</a>
                    </div>
                    <br />
                    <h3>First Name - {{ $data->first_name }} </h3>
                    <h3>Last Name - {{ $data->last_name }} </h3>
                    <h3>Email - {{ $data->email }}</h3>
                    <h3>Phone - {{ $data->phone }} </h3>
                    <h3>Address - {{ $data->address }}</h3>
                    <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
                    <td>
                    <img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                </div>
@endsection

