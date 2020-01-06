@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h2>News baru</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <strong>Judul:</strong>
                                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="file" name="image" value={{old('image')}}>
                                    <p class="help-block">image in png, jpg, bmp</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <strong>Isi:</strong>
                                    <textarea class="form-control" rows="5" name="isi" placeholder="Isi post"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
            <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'isi' );
            </script>
        </div>
@endsection
