@extends('layout.app')

@section('content')

<body>

<table border= "1">
<tr>
<td>ID </td>	
<td>JUDUL </td>
<td>ISI</td>

<td>USER ID </td>
</tr>

@foreach($Pengumuman as $item)

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

