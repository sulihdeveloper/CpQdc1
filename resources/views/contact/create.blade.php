@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="content">
            <div class="col-md-12">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
            <div class="col-md-12">
                <div class="col-md-7">
                    <form method="POST" class="form-horizontal" action="{{route('contact.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="title" type="text" name="name" placeholder="category name"value={{old('name')}}>
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="phone" class="col-md-3 control-label">Phone</label>
                         <div class="col-md-9">
                             <input class="form-control" id="title" type="number" name="name" placeholder="category name"value={{old('phone')}}>
                         </div>
                    </div>
                    <div class="form-group">
                          <label for="address" class="col-md-3 control-label">Address</label>
                          <div class="col-md-9">
                              <input class="form-control" id="title" type="textarea" name="name" placeholder="category name"value={{old('address')}}>
                          </div>
                    </div>
                    <div class="form-group">
                          <label for="email" class="col-md-3 control-label">Email</label>
                          <div class="col-md-9">
                              <input class="form-control" id="title" type="text" name="email" placeholder="category name"value={{old('email')}}>
                          </div>
                    </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-5">
                                <button class="btn btn-success" type="submit">save</button> &nbsp;
                                <a class="btn btn-warning" href="{{route('contact.index')}}">cancel</a>
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
        </div>
    </div>
@endsection
