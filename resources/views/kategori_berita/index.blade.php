@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >{{ __('List Kategori Berita') }}</div>

                <div class="card-body">
               
                    <form>
                     <a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary">Tambah Data</a>
                       
                        <div class="form-group row">
                            <table border="1">
                                <tr bgcolor='yellow' align="center">
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>ID User</th>
                                  
                                    <th>Aksi</th>
                                </tr>
                                @foreach($KategoriBerita as $item)
                                    <tr>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->nama !!}</td>
                                        <td>{!! $item->users_id !!}</td>
                                  
                                        <td>
                                            <a href="{!! route('kategori_berita.show',[$item->id]) !!}" class="btn btn-sm btn-success">
                                            Lihat
                                            </a>
                                        </td>                         
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