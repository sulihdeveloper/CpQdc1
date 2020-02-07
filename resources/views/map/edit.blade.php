@extends('layouts.app1')
@section('content')
    <div class="container">
    <!-- <div class="card card-login mx-auto mt-5"> -->
      <div class="card-header">Maps</div>
      <div class="card-body">
        <form method="post" action="{{ route('map.update', $data->id) }}" enctype="multipart/form-data">
        	@csrf
			    @method('PATCH')
          <div class="form-group">
            <div class="form-label-group">
              Name Site  : <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              Tower      : <input type="text" name="tower" value="{{ $data->tower }}" class="form-control input-lg" />
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              Latitude   : <input type="text" name="lat" value="{{ $data->lat }}" class="form-control input-lg" />
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              Longitude  :<input type="text" name="lng" value="{{ $data->lng }}" class="form-control input-lg" />
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              Alamat     : <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control input-lg" />
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              Provinsi     : <input type="text" name="provinsi" value="{{ $data->provinsi }}" class="form-control input-lg" />
            </div>
          </div>
          <div class="text-center">
          	<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
          </div>
        </form>
    	</div>
      </div>
    </div>
  </div>
@endsection
