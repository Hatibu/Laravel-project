@extends('layouts.layout')
  @section('content')
  <div class="form4 top">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <div class="form-bg">
                    <form class="form" method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" class="form-control" required="" id="nameNine" placeholder="Your Name">
                         </div>
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="email" class="form-control" name="email" required="" id="emailNine" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Name</label>
                            <textarea class="form-control" required="" rows="7" id="messageNine" placeholder="Write message"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn text-center btn-blue">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
