@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >{{ __('List Kategori Artikel') }}</div>

                <div class="card-body">
               
                    <form>
                     <a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Add Data</a>
                       
                        <div class="form-group row">
                            <table border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>ID User</th>
                                  
                                    <th>Aksi</th>
                                </tr>
                                @foreach($KategoriArtikel as $item)
                                    <tr>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->nama !!}</td>
                                        <td>{!! $item->users_id !!}</td>
                                  
                                        <td>
                                            <a href="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-sm btn-success">
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