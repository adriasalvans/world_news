<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="./../css/signup.css">
    </head>
    <body>

    <h1>Sign Up</h1>
  

{!! Form::open(['route' => 'users.store','method'=>'POST']) !!}

    <div class="form-group">
        {!! Form::label('name',"Nom") !!}
        {!! Form::text('name',null,['class'=> 'form-control', 'placeholder'=>'Full name','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email',"Email") !!}
        {!! Form::email('email',null,['class'=> 'form-control', 'placeholder'=>'example@mail.com','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password',"Password") !!}
        {!! Form::password('password',['class'=> 'form-control', 'placeholder'=>'************','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Signup', ['class' => 'btn btn-primary']) !!}
    </div>


{!! Form::close()!!}

</body>
</html>