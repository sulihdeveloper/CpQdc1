@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered" id="contact-table">
                            <thead>
                            <tr>
                        <h2>{{ $news->judul }}</h2>
                        <p>{{ $news->isi }}</p>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <a href="{{ route('news.index') }}" class="btn">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
