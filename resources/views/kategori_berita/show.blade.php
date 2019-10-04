
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
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriBerita->id !!}</label>
                    </div>


                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">NAMA</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriBerita->nama !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">USERS ID</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriBerita->users_id !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">CREATE</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriBerita->created_at !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">UPDATE</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $KategoriBerita->updated_at !!}</label>
                    </div>
            
                   
                    <a href="{!! route('kategori_berita.index') !!}" class="btn btn-danger">
           {{ __('Batal') }}
        </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection