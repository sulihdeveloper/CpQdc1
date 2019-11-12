@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('contact.index') }}" class="btn btn-default">Back</a>
        </div>
        <br />
        <h3>Name - {{ $data->name }} </h3>
        <h3>Email - {{ $data->email }}</h3>
        <h3>Subject - {{ $data->subject }} </h3>
        <h3>Message - {{ $data->message }}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
    </div>
@endsection
