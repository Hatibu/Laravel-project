@extends('layouts.layout')
    @section('content')
    <div class="container " style="margin-top:90px">
        <div class="row justify-content-center ">
            <div class="col-md-4 form-container">
                <h4>Login | Custom Auth</h4><hr>
                <form class="" action="{{route('auth.check')}}" method="post">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                        {{ session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}}  @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        <span class="text-danger">@error('password'){{$message}}  @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-block btn-success" >Sign In</button>
                    <br>
                    <a href="{{ route('auth.register') }}">I don't have account, create account</a>
                </form>

            </div>
        </div>
    </div>
    @endsection



