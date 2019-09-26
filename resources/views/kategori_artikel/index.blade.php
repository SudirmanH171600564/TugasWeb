<html>
<head>
    <title> KATEGORI ARTIKEL </title>
</head>


<body>

<table border= "1">
<tr>
<td>ID </td>
<td>NAMA </td>
<td>USER ID </td>
</tr>

@foreach($KategoriArtikel as $item)

<tr>
<td>{!! $item->id !!}</td>
<td>{!! $item->nama !!}</td>
<td>{!! $item->users_id !!}</td>
</tr>

@endforeach


</table>

</body>

</html>

