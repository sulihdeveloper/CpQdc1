@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div align="right">
        <a href="{{ route('contact.index') }}" class="btn btn-default">Back</a>
    </div>
    <br />
    <form method="post" action="{{ route('contact.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="col-md-4 text-right">Name</label>
            <div class="col-md-8">
                <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Email</label>
            <div class="col-md-8">
                <input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Subjecte</label>
            <div class="col-md-8">
                <input type="text" name="subject" value="{{ $data->subject }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Message</label>
            <div class="col-md-8">
                <input type="text" name="message" value="{{ $data->message }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Select Profile Image</label>
            <div class="col-md-8">
                <input type="file" name="image" />
                <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
            </div>
        </div>
        <br /><br /><br />
        <div class="form-group text-center">
            <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
        </div>
    </form>

@endsection
