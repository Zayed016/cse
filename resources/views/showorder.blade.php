<pre>
	

@foreach($all as $key)
{{$f=$key->ref_id}}
{{$key->bill}}
{{$key->name}}
{{$key->address}}
{{$key->mobile}}
{{$key->d_type}}
<?php $get=DB::select("select * from orderedfood where ref_id='$f'"); ?>
@foreach ($get as $next)

<?php $n=$next->food_id;
$pain=DB::select("select * from foods where id='$n'");
 ?>
@foreach ($pain as $another)
{{$another->name}}
@endforeach
{{$next->how_many}}
@endforeach
@endforeach