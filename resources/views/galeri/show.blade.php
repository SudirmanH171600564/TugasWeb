
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Galeri') }}</div>

                <div class="card-body">
               
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">ID</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->id !!}</label>
                    </div>

                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">NAMA</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->nama !!}</label>
                    </div>

                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">KETERANGAN</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->keterangan !!}</label>
                    </div>

                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">PATH</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->path !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">USERS ID</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->users_id !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">CREATE</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->created_at !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">UPDATE</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->updated_at !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">KATEGORI GALERI</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $galeri->kategori_galeri_id !!}</label>
                    </div>

       <div align="center">            
        <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
           {{ __('Batal') }}
        </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection