@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('List Kategori Berita') }}</div>
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-group row">
                            <a class="btn btn-primary" href="{{ route('kategori_berita.create') }}">Tambah Data</a>
                        </div>
                        <div class="form-group row">
                            <table class="table table-striped table-responsive">  
                                <thead class="table thead">
                                  <tr bgcolor="#02ff9e">
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>USERS ID</th>
                                    <th>Create</th>
                                    <th>Update</th>
                                    <th>Aksi</th>  
                                </tr>
                                </thead>
                                <tbody class="text-justify">
                                @foreach($KategoriBerita as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->users_id }}</td>
                                        <td>{!! $item->created_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>{!! $item->updated_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary btn-block" href="{{ route('kategori_berita.show', $item->id) }}">View</a>
                                            <a class="btn btn-sm btn-secondary btn-block" href="{{ route('kategori_berita.edit', $item->id) }}">Edit</a>
                                            
                                            </br>
                                            {!! Form::open(['route' => ['kategori_berita.destroy', $item->id], 'method' => 'delete']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger btn-block']) !!}
                                                {!! Form::close() !!}
                                             </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
@endsection