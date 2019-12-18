@extends('layouts.app')

@section('content')

<div id="content" class="container">
	<div class="col-md-12">
	<h1>Edit Requerments : {{$row->name}}</h1>
	</div>
	<div class="col-md-12">
		<div class="col-md-7">
			<form method="POST" class="form-horizontal" action="{{route('product.update',$row->id)}}">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="cat" class="col-md-3 control-label">Category</label>
                    <div class="col-md-9">
                        <select class="form-control" name="cat">
                            @foreach($cat as $c)
                                <option value="{{$c->id}}" {{(old('cat')==$c->id ? 'selected = selected' : ' ')}}>{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="desc" class="col-md-3 control-label">Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control col-md-9" name="desc" cols="3" rows="5" placeholder="description">{{old('desc')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
			  	<div class="col-md-4 col-md-offset-5">
			  		<button class="btn btn-success" type="submit">save</button> &nbsp;
			  		<a class="btn btn-warning" href="{{route('product.index')}}">cancel</a>
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
        CKEDITOR.replace( 'desc' );
    </script>
</div>
@endsection
