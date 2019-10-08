@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >{{ __('List Kategori Galeri') }}</div>

                <div class="card-body">
               
                    <form>
                     <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                       <br></br> 
                        @csrf
                            <table border="1">
                            
                                <tr bgcolor='yellow' align="center">
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>ID User</th>
                                    <th>Create</th>
                                    <th>Update</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($KategoriGaleri as $item)
                                    <tr>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->nama !!}</td>
                                        <td>{!! $item->users_id !!}</td>
                                        <td>{!! $item->created_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>{!! $item->updated_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>
                                            <a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">
                                            Lihat
                                            </a>

                                            <a href="{!! route('kategori_galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                                            Ubah
                                            </a>

                                             {!! Form::open(['route' => ['kategori_galeri.destroy', $item->id],'method'=>'delete']) !!}

                                            {!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}

                                             {!! Form::close() !!}
                                        </td>                         
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