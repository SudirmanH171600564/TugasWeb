
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('List Galeri') }}</div>

                <div class="card-body">
                <a href="{!! route('galeri.create') !!}" class="btn btn-primary" >Tambah Data</a> 
                        @csrf

                            <table border="1">
                                <tr bgcolor='yellow' align="center">
                                    <th>ID</th>
                                    <th>NAMA </th>
                                    <th>KETERANGAN</th>
                                    <th>PATH</th>
                                    <th>USERS ID</th>
                                    <th>CREATED AT</th>
                                    <th>UPDATE AT</th>
                                    <th>AKSI</th>
                                </tr>
                                @foreach($Galeri as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>{{ $item->path }}</td>
                                        <td>{{ $item->users_id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                        <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">
                                            Lihat
                                            </a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection