@extends('layouts.app1')
@section('content')
    <div class="jumbotron text-center">
 <br />
  <h3>Name Site     - {{ $data->name     }}</h3>
  <h3>Tower         - {{ $data->tower    }}</h3>
  <h3>Latitude      - {{ $data->lat      }}</h3>
  <h3>Longitude     - {{ $data->lng      }}</h3>
  <h3>Alamat        - {{ $data->alamat   }}</h3>
  <h3>Provinsi      - {{ $data->provinsi }}</h3>
</div>
