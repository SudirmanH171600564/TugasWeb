
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Artikel') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <table align="center" border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>JUDUL </th>
                                    <th>ISI</th>
                                    <th>USERS ID</th>
                                    <th>Created AT</th>
                                    <th>UPDATE AT</th>
                                </tr>
                                @foreach($Artikel as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->isi }}</td>
                                        <td>{{ $item->users_id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
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