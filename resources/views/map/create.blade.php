@extends('layouts.app1')

@section('content')

<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
    <div class="card-header">Maps</div>
      <div class="card-body">
        <form method="post" action="{{ route('map.store') }}" enctype="multipart/form-data">
			  @csrf
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="name" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
              <label for="inputName">Name </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="tower" class="form-control" placeholder="Tower" required="required" autofocus="autofocus">
              <label for="inputAlamat">Tower </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="lat" class="form-control" placeholder="Latitude" required="required" autofocus="autofocus">
              <label for="inputLat">Latitude </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="lng" class="form-control" placeholder="Longitude" required="required" autofocus="autofocus">
              <label for="inputLng">Longitude </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="required" autofocus="autofocus">
              <label for="inputAlamat">Alamat </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required="required" autofocus="autofocus">
              <label for="inputProvinsi">Provinsi </label>
            </div>
          </div>
          <div class="text-center">
          	<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
          </div>
        </form>
    	</div>
@endsection
