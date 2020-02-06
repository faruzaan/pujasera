<form action="post"></form>
<table>
	<tr>
		<th>Nama Item</th>
		<th>Status</th>
	</tr>
@foreach($item as $i)
	<tr>
		<td>{{$i -> nama_item}}</td>
		<td><input type="text" size="10" name="status[]"></td>
	</tr>
@endforeach
</table>