@include('menubar')
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div  style="float:right" class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-4">

	 {!!  Form::open(array('url' => 'new'));!!}
	  {!! csrf_field() !!}
	 {{$errors->first('need')}}
	 {{ $errors->first('username') }}
	<fieldset class="form-group">
	<label for="username"> Username </label>
	<input type="text" class="form-control" name="username"  value="{{ old('username') }}">
	</fieldset>{{ $errors->first('password') }}
	<fieldset class="form-group">
	<label for="address"> Password </label>
	<input type="password" class="form-control" name="password" value="">
	
	</fieldset>
	<button type="submit" class="btn btn-primary">Login</button>
	   {!!  Form::close(); !!}
</div>
</div>
</div>
</div>
