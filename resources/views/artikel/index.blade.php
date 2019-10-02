
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Artikel') }}</div>

                <div class="card-body">
                <a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
                    <form>
                       
                        <div class="form-group row">
                            <table align="center" border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>JUDUL </th>
                                    <th>ISI</th>
                                    <th>USERS ID</th>
                                    <th>Created AT</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                                @foreach($Artikel as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->isi }}</td>
                                        <td>{{ $item->users_id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                        <a href="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success">
                                            Lihat
                                            </a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection