@extends('layouts.layout')
@section('content')
<div class="container" style="margin-top:45px">
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <h4>Student | Exams</h4><hr>
            <form action="{{ route('pages.addMarks') }}" method="post">

                @csrf <!--Very important-->
                <div class="form-group">
                    <label>Student Number</label>
                    <input type="text" class="form-control" name="sid" placeholder="Student Registration #" value="{{old('name')}}">
                    <span class="text-danger">@error('sid'){{$message}} @enderror </span>
                </div>
                <div class="form-group">
                    <label>Course</label>
                    <input type="text" class="form-control" name="course" placeholder="Enter course" value="{{old('email')}}">
                    <span class="text-danger">@error('course'){{$message}} @enderror </span>
                </div>
                <div class="form-group">
                    <label>Marks</label>
                    <input type="number" class="form-control" name="marks" placeholder="Enter marks">
                    <span class="text-danger">@error('marks'){{$message}} @enderror </span>
                </div>
                <button type="submit" class="btn btn-block btn-primary" >Submit</button>
                <br>
                <a href="{{ route('auth.login') }}">I already have account, Sign In</a>
            </form>

        </div>
    </div>
</div>
@endsection
