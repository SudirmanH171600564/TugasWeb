
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Kategori Berita') }}</div>

                <div class="card-body">
               
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">ID</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriGaleri->id !!}</label>
                    </div>


                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">NAMA</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriGaleri->nama !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">USERS ID</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriGaleri->users_id !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">CREATE</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriGaleri->created_at !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">UPDATE</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriGaleri->updated_at !!}</label>
                    </div>
            
          <div align="center">         
           <a href="{!! route('kategori_galeri.index') !!}" class="btn btn-danger">
           {{ __('Batal') }}
           </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection