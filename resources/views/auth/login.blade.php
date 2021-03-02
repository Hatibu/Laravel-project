<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <div class="container" style="margin-top:45px">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h4>Login | Custom Auth</h4><hr>
                <form action="{{route('auth.check')}}" method="post">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                        {{ session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-block btn-primary" >Sign In</button>
                    <br>
                    <a href="{{ route('auth.register') }}">I don't have account, create account</a>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
