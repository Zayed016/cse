
{!!  Form::open(array('url' => 'typeadd'));!!}
	  {!! csrf_field() !!}
Type: 	  
<input type="text" name="type"><br/><br/>
<input type="submit" name="" value="Add Type"><br/>
 {!!  Form::close(); !!}
 {{ Session::get('status') }}
<table border="1">
@foreach($types as $type)
	<tr><td value="{{$type->id}}"> {{$type->name}}</td></tr>
@endforeach
</table>
