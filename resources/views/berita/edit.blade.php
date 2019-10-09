@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-md-12">
             <div class="card">
                 <div class="card-header">{{__('Edit Berita') }}</div>
                  <div class="card-body">
                    {!! Form::model($berita, ['route' => ['berita.update', $berita->id],'method'=>'PATCH']) !!}
                    @include('berita.form')  
                   {!! Form::close() !!}    
                 </div> 
             </div>
           </div>
         </div>
    </div>
@endsection