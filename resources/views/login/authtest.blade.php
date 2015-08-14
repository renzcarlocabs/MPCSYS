<!DOCTYPE html>
<html>
<head>
	<title>CIC MPCSYS</title>
</head>
<body>
			{{-- Add content to main page here. --}}
		@if (session('error'))
		    <div class="alert alert-success">
		        {{ session('error') }}
		    </div>
		@endif

		{!! Form::open() !!}
	    {!! Form::label('email') !!}
	    {!! Form::text('email') !!} <br>
	    {!! Form::label('password') !!}
	    {!! Form::password('password') !!} <br>
	    {!! Form::submit('Login') !!}
		{!! Form::close() !!}

</body>
</html>