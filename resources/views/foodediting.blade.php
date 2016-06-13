 {!!  Form::open(array('url' => 'foodedit'));!!}
 {!! csrf_field() !!}
<br/><br/>
@foreach($food as $foods)
<select name="type" >
@foreach($list as $lists)
	<option value="{{$lists->id}}">{{$lists->name}}</option>
@endforeach
</select><br/><br/>
<input type="text" name="fname" value="{{$foods->name}}"><br/><br/>
<input type="text" name="fprice" value="{{$foods->price}}" ><br/><br/>
<input type="submit" name="s" value="Update">
@endforeach
 {!!  Form::close(); !!}