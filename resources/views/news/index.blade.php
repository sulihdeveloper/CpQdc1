@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if ($pesan = Session::get('pesan'))
                    <div class="alert alert-success">
                        <p>{{ $pesan }}</p>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <h2>Daftar Konten</h2>
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('news.create') }}"> Create</a>
                        </div>


                        <table class="table table-bordered" id="news-table">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>action</th>
                            </thead>

                            <tbody>
                            @foreach($news as $k=>$data)
                                <tr>
                                    <td>{{ $news->firstItem() + $k }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{!! html_entity_decode($data->isi) !!}</td>
                                    <td>

                                        <a href="{{route('news.show',$data->id)}}" class="btn btn-success btn-xs">show</a>
                                        <a href="{{route('news.edit',$data->id)}}" class="btn btn-info btn-xs">edit</a>
                                        <a action="{{ route('news.destroy',$data->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                        </a>
                                        </form>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $news->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection
