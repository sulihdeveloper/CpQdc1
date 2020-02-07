@extends('layouts.app1')
@section('content')
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Maps</div>
          <div class="card-body">
            <div class="table-responsive">
                <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('map.create') }}" class="btn btn-primary btn-sm">Add</a>
          </li>
        </ol>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered ">
	<tr>
		<th>Site Name</th>
		<th>Tower</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Alamat</th>
		<th>Provinsi</th>
		<th>Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td>{{ $row->name }}</td>
			<td>{{ $row->tower }}</td>
			<td>{{ $row->lat }}</td>
			<td>{{ $row->lng }}</td>
			<td>{{ $row->alamat }}</td>
			<td>{{ $row->provinsi }}</td>
			<td>

				<form action="{{ route('map.destroy', $row->id) }}" method="post">
					<a href="{{ route('map.edit', $row->id) }}" class="btn btn-warning">Update</a>
					<a href="{{ route('map.show', $row->id) }}" class="btn btn-primary">Show</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection
