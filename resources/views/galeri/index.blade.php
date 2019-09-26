
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">{{ __('Galeri') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <table align="center" border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA </th>
                                    <th>KETERANGAN</th>
                                    <th>PATH</th>
                                    <th>USERS ID</th>
                                    <th>Created AT</th>
                                    <th>UPDATE AT</th>
                                </tr>
                                @foreach($Galeri as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>{{ $item->path }}</td>
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