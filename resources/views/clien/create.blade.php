@extends('layouts.app')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div align="right">
        <a href="{{ route('clien.index') }}" class="btn btn-default">Back</a>
        <form method="post" action="{{ route('clien.store') }}" enctype="multipart/form-data">
    </div>

        @csrf
        <div class="form-group">
            <label class="col-md-4 text-right">Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control input-lg" />
            </div>
       <br/>
       <br/>
        <div class="form-group">
            <label class="col-md-4 text-right">Select Logo Image</label>
            <div class="col-md-8">
                <input type="file" name="photo" />
            </div>
        </div>
        <br /><br /><br />
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Save" />
        </div>
    </form>
@endsection
