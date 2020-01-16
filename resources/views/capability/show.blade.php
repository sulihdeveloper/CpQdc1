@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered" id="contact-table">
                            <thead>
                            <h2>{{ $capability->judul }}</h2>
                            <p>{!! html_entity_decode($capability->isi) !!}</p>
                            <img src="{{url('images/'.$capability->image)}}" width="160" height="115">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <a href="{{ route('capability.index') }}" class="btn">Kembali</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
