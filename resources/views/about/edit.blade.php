@extends('layouts.app')

@section('content')

<div id="content" class="container">
	<div class="col-md-12">
	<h1>New about section data</h1>
	</div>
	<div class="col-md-12">
		<div class="col-md-7">
			<form method="POST" class="form-horizontal" action="{{route('about.update',$edit->id)}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<div class="form-group">
				  <label for="section_one" class="col-md-3 control-label">Who we are</label>
				  <div class="col-md-9">
				  	<textarea class="form-control col-md-9" name="section_one" cols="3" rows="5" placeholder="description">{{old('section_one',$edit->section_one)}}</textarea>
				  </div>
				</div>
			  <div class="form-group">
			    <label for="section_one" class="col-md-3 control-label">What we do</label>
			    <div class="col-md-9">
			    	<textarea class="form-control col-md-9" name="section_two" cols="3" rows="5" placeholder="description">{{old('section_two',$edit->section_two)}}</textarea>
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-md-4 col-md-offset-5">
			  		<button class="btn btn-success" type="submit">save</button> &nbsp;
			  		<a class="btn btn-warning" href="{{route('about.index')}}">cancel</a>
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
                <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'section_two' );
                </script>
		</div>
	</div>
</div>
@endsection
