@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="container" id="content">
            <div class="col-md-12">
                <h1>Slides section</h1>
            </div>
        </div>
        @if (session('success'))
            <p class="alert alert-success">
                {{ session('success') }}
            </p>
        @endif

        <div class="float-right">
            <p class="text-center"><a href="{{route('contact.create')}}" class="btn btn-md btn-success">Create</a></p>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
            <tr>
            <th>No</th>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{++$i}}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->subject }}</td>
                <td>{{ $row->message }}</td>
                <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                <td>
                </form>
                </td>
            </tr>
            @endforeach

                </td>
            </tr>
    </table>
        </div>
    </div>

    {!! $data->links() !!}
@endsection
