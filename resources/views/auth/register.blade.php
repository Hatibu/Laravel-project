<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration page</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <div class="container" style="margin-top:45px">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h4>Register | Custom Auth</h4><hr>
                <form action="{{route('auth.save')}}" method="POST">
                    @if(Session::get('Success'))
                    <div class="alert alert-success">
                        {{ Session::get('Success') }}
                    </div>
                    @endif

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    @csrf <!--Very important-->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Full name" value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{$message}} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                        <span class="text-danger">@error('password'){{$message}} @enderror </span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary" >Sign In</button>
                    <br>
                    <a href="{{ route('auth.login') }}">I already have account, Sign In</a>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
