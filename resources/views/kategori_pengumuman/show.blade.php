
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Kategori Pengumuman') }}</div>

                <div class="card-body">
               
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">ID</label>
                         <label class="col-md- 8col-form-label text-md-left">{!! $KategoriPengumuman->id !!}</label>
                    </div>


                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">NAMA</label>
                         <label class="col-md-8col-form-label text-md-left">{!! $KategoriPengumuman->nama !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">USERS ID</label>
                         <label class="col-md- 8col-form-label text-md-left">{!! $KategoriPengumuman->users_id !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">CREATE</label>
                         <label class="col-md- 8col-form-label text-md-left">{!! $KategoriPengumuman->created_at !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">UPDATE</label>
                         <label class="col-md- 8col-form-label text-md-left">{!! $KategoriPengumuman->updated_at !!}</label>
                    </div>
            
                   <a href="{!! route('kategori_pengumuman.index') !!}" class="btn btn-danger">
           {{ __('Batal') }}
        </a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection