<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin {{isset($title) ? $title : ''}}</title>
</head>
<body>
    {!! Form::open(array('route' => 'admin.login','method'=>'POST')) !!}
    {!! Form::label('email', 'E-Mail Address') !!}
    {{ Form::email('email', null,  [])}}
    {!! Form::label('password', 'Password') !!}
    {{ Form::password('password', null,  [])}}
    {{ Form::submit('Login')}}
    {!! Form::close() !!}
</body>
</html>