@extends('layouts.app')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

		<div class="col-md-12">
		<h1>Create Slides</h1>
		</div>
		<div class="col-md-12">
			<div class="col-md-7">
				<form method="post" action="{{route('slide.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="col-md-4 text-right">Title</label>
                        <div class="col-md-8">
                            <input type="text" name="title" class="form-control input-lg" />
                        </div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="form-group">
                        <label class="col-md-4 text-right">Description</label>
                        <div class="col-md-8">
                            <input type="description" name="description" class="form-control input-lg" />
                        </div>
                    </div>
                    <br />
                    <br />
                    <br /> <div class="form-group">
                        <label class="col-md-4 text-right">Link</label>
                        <div class="col-md-8">
                            <input type="text" name="link" class="form-control input-lg" />
                        </div>
                    </div>
                    <br />
                    <br />
                    <br />

                    <div class="form-group">
                        <label class="col-md-4 text-right">Select File</label>
                        <div class="col-md-8">
                            <input type="file" name="image" />
                        </div>
                    </div>
                    </table>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-5">
                            <button class="btn btn-success" type="submit">save</button> &nbsp;
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
