@extends('layouts.app')

@section('content')
<div class="container" id="content">

		<div class="col-md-12">
		<h1>Product Requerments: {{$show->title}}</h1>
	</div>
	<div class="col-md-7">
        <table class="table table-bordered" id="product-table">
            <thead>
                <p><b>category: </b>{{$show->category_id}}</p>
                <p>
                <b>description: </b>
                {{$show->description}}
                </p>
			<a href="{{route('product.edit',$show->id)}}" class="btn btn-success btn-xs">edit</a>
			<a href="{{route('product.index')}}" class="btn btn-info btn-xs">back</a>
		</p>
            </thead>
	</div>
</div>
</div>

@endsection
