@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('List Pengumuman') }}</div>
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-group row">
                            <a class="btn btn-elegant" href="{{ route('pengumuman.create') }}">Tambah Data</a>  
                        </div>
                        <div class="form-group row">
                            <table class="table table-striped table-responsive">  
                                <thead class="table thead">
                                  <tr bgcolor="02ff9e">
                                    <th>ID</th>
                                    <th>JUDUL </th>
                                    <th>ISI</th>
                                    <th>USERS ID</th>
                                    <th>CREATED AT</th>
                                    <th>UPDATE AT</th>
                                    <th>AKSI</th>
                                </tr>
                                </thead>
                                <tbody class="text-justify">
                                @foreach($Pengumuman as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ Str::limit($item->judul, 30) }}</td>
                                        <td>{{ Str::limit($item->isi, 200) }}</td>
                                        <td>{{ $item->users_id }}</td>
                                        <td>{!! $item->created_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>{!! $item->updated_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary btn-block" href="{{ route('pengumuman.show', $item->id) }}">View</a>
                                            <a class="btn btn-sm btn-secondary btn-block" href="{{ route('pengumuman.edit', $item->id) }}">Edit</a>   
                                            </br>
                                            {!! Form::open(['route' => ['pengumuman.destroy', $item->id], 'method' => 'delete']) !!}
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