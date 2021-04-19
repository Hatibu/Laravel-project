    @extends('layouts.layout')
    @section('content')
    <div class="container" style="margin-top:45px">
        <div class="row justify-content-center">
            <div class="col-md-4 col-md-offset-4 form-container">
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
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="First name" value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{$message}} @enderror </span>
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last name" value="{{old('name')}}">
                            <span class="text-danger">@error('name'){{$message}} @enderror </span>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror </span>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="number" class="form-control" name="phone" placeholder="Phone number" value="{{old('email')}}">
                            <span class="text-danger">@error('phone'){{$message}} @enderror </span>
                        </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                        <span class="text-danger">@error('password'){{$message}} @enderror </span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary" >Sign Up</button>
                    <br>
                    <a href="{{ route('auth.login') }}">I already have account, Sign In</a>
                </form>

            </div>
        </div>
    </div>
    @endsection
