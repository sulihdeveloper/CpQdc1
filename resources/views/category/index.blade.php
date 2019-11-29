@extends('layouts.app')

@section('content')
<div class="container" id="content">
		<div class="col-md-10">
		<h1>Product categories</h1>
		<p class="text-center"></p>
		@if (session('success'))
		    <p class="alert alert-success">
		        {{ session('success') }}
		    </p>
		@endif
	</div>
	<div class="col-md-12">
	<p><a href="{{route('category.create')}}" class="btn btn-xs btn-success">create</a></p>
        <table class="table table-bordered" id="category-table">
            <thead>
            <tr>
				<th>No</th>
				<th>Name</th>
                <th>Closing Date</th>
				<th>Action</th>
			</thead>
			<tbody>
			@foreach($category as $item)
				<tr>
					<td>{{++$i}}</td>
					<td>{{$item->name}}</td>
                    <td>{{$item->closing_date}}</td>
					<td>
                    <a href="{{route('category.edit',$item->id)}}" class="btn btn-xs btn-info">edit</a>
					<a class="form-inline" method="POST" action="{{route('category.destroy',$item->id)}}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger btn-xs">delete</button>
					</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
