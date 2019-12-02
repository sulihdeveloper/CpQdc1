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
        <a href="{{ route('carrer.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('carrer.store') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label class="col-md-4 text-right">Frist Name</label>
            <div class="col-md-8">
                <input type="text" name="first_name" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Last Name</label>
            <div class="col-md-8">
                <input type="text" name="last_name" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Email</label>
            <div class="col-md-8">
                <input type="email" name="email" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br /> <div class="form-group">
            <label class="col-md-4 text-right">Phone</label>
            <div class="col-md-8">
                <input type="number" name="phone" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Address</label>
            <div class="col-md-8">
                <input type="text" name="address" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Select Profile Image</label>
            <div class="col-md-8">
                <input type="file" name="photo" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Select Document </label>
            <div class="col-md-8">
                <input type="file" name="file" accept="application/pdf, application/vnd.ms-excel" />
            </div>
        </div>
        <br /><br /><br />
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Submit" />
        </div>
    </form>
@endsection
