
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Artikel') }}</div>

                <div class="card-body">
                <a href="{!! route('berita.create') !!}" class="btn btn-primary" >Tambah Data</a>
                  <br></br> 
                       
                        @csrf
                            <table border="1" >
                                <tr bgcolor='yellow' align="center">
                                    <th>ID</th>
                                    <th>JUDUL </th>
                                    <th>ISI</th>
                                    <th>USERS ID</th>
                                    <th>Create</th>
                                    <th>Update</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                                @foreach($Berita as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->isi }}</td>
                                        <td>{{ $item->users_id }}</td>
                                        <td>{!! $item->created_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>{!! $item->updated_at->format('d/m/Y h:i:s') !!}</td>
                                        <td>
                                            <a href="{!! route('berita.show',[$item->id]) !!}" class="btn btn-sm btn-success">
                                            Lihat
                                            </a>

                                            <a href="{!! route('berita.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                                            Ubah
                                            </a>

                                             {!! Form::open(['route' => ['berita.destroy', $item->id],'method'=>'delete']) !!}

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