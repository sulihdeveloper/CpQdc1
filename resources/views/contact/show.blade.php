@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
    </div>

    <div class="container" id="content" >
        <div class="col-md-12">
        <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('contact.index') }}" class="btn btn-default">Back</a>
        </div>
            <table class="table table-bordered" id="contact-table">
                <thead>
                <tr>
        <h3>Name - {{ $data->name }} </h3>
        <h3>Email - {{ $data->email }}</h3>
        <h3>Subject - {{ $data->subject }} </h3>
        <h3>Message - {{ $data->message }}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
    </div>
        </div>
    </div>
    </div>
    </thead>
    </table>
@endsection
