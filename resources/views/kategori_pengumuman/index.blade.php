@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >{{ __('List Kategori Pengumuman') }}</div>
                <div class="card-body">    
                     <a href="{!! route('kategori_pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
                       
                       @csrf
                            <table border="1">
                                <tr bgcolor='yellow' align="center">
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>ID User</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($KategoriPengumuman as $item)
                                    <tr>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->nama !!}</td>
                                        <td>{!! $item->users_id !!}</td>
                                  
                                        <td>
                                            <a href="{!! route('kategori_pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-success">
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