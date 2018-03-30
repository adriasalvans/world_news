<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('css/signup.css')}}">
    </head>
    <body>

    <h1>Edit user</h1>
  

{!! Form::open(['route' => ['users.update',$user],'method'=>'PUT']) !!}

    <div class="form-group">
        {!! Form::label('name',"Nom") !!}
        {!! Form::text('name',$user->name,['class'=> 'form-control', 'placeholder'=>'Full name','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email',"Email") !!}
        {!! Form::email('email',$user->email,['class'=> 'form-control', 'placeholder'=>'example@mail.com','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
    </div>


{!! Form::close()!!}

</body>
</html>