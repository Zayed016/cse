
{!!  Form::open(array('url' => 'foodadd'));!!}
	  {!! csrf_field() !!}
<select name="type">
@foreach($types as $type)
	<option value="{{$type->id}}"> {{$type->name}}</option>
@endforeach
</select><br/><br/>
 Name:<input type="text" name="name" value="" placeholder=""><br/><br/>
 Price:<input type="text" name="price" value="" placeholder=""><br/><br/>
<input type="submit" name="" value="submit">
 {!!  Form::close(); !!}
