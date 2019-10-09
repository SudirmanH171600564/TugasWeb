
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Show an Article') }}</div>

                <div class="card-body">
               
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">ID :</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $artikel->id !!}</label>
                    </div>

                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">JUDUL :</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $artikel->judul !!}</label>
                    </div>

                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">ISI :</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $artikel->isi !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">USERS ID :</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $artikel->users_id !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">CREATE :</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $artikel->created_at !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">UPDATE :</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $artikel->updated_at !!}</label>
                    </div>

                    
                    <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">KATEGORI ARTIKEL :</label>
                         <label class="col-md-8 col-form-label text-md-left">{!! $artikel->kategori_artikel_id !!}</label>
                    </div>

          <div align="center">         
          <a href="{!! route('artikel.index') !!}" class="btn btn-danger">
           {{ __('Batal') }}
        </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection