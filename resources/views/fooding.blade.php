@foreach ($tql as $type)
<?php
$u[$type->id]=$type->name;
?>
@endforeach
{{ Session::get('status') }}
<table border="1">

	<thead>
		<tr>
			<th>name</th>
			<th>type</th>
			<th>price</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($sql as $list)
		<tr>
			<td>{{$list->name}}</td>
			<td><?php echo $u[$list->type_id]; ?></td>
			<td>{{$list->price}}</td>
			<td><a href="editfood/{{$list->id}}">Edit</a></td>
			<td><a href="deletefood/{{$list->id}}">Delete</a></td>
		</tr>
	@endforeach
	</tbody>

</table>





