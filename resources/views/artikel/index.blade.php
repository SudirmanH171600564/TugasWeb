@extends('layouts.app')

@section('content')

<body>

<table border= "5">
<tr>
<td>ID </td>	
<td>JUDUL </td>
<td>ISI</td>

<td>USER ID </td>
</tr>

@foreach($Artikel as $item)

<tr>


<td>{!! $item->id !!}</td>
<td>{!! $item->judul !!}</td>
<td>{!! $item->isi !!}</td>

<td>{!! $item->users_id !!}</td>

</tr>

@endforeach

</table>
</body>

@endsection

