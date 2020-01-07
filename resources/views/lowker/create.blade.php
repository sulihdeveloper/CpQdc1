@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="content">
            <div class="col-md-12">
                <h1>Carrer</h1>
            </div>
            <div class="col-md-12">
                <div class="col-md-7">
                    <form action="{{ route('lowker.store') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="requerments" class="col-md-3 control-label">Requerments</label>
                            <div class="col-md-9">
                                <textarea id="content" class="form-control col-md-9" name="requerments"  placeholder="requerments">{{old('requerments')}}</textarea>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="closing_date" class="col-md-3 control-label">Closing Date</label>
                        <div class="col-md-9">
                            <input class="form-control" id="closing_date" type="date" name="closing_date" placeholder="Closing Date" value={{old('closing_date')}}>
                        </div>
                    </div>
                        <div class="form-group">
                    <label for="description" class="col-md-3 control-label">Description</label>
                    <div class="col-md-9">
                        <textarea id="content" class="form-control col-md-9" name="description"  placeholder="description">{{old('description')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-5">
                        <button class="btn btn-success" type="submit">save</button> &nbsp;
                        <a class="btn btn-warning" href="{{route('lowker.index')}}">cancel</a>
                    </div>
                </div>
                </form>

                </div>
                <div class="col-md-5">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                </div>
                <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'description' );
                </script>
                </div>
                </div>
                @endsection
