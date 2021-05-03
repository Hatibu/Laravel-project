@extends('layouts.layout')
  @section('content')
 {{-- @include('layouts.navigation') --}}
  @include('layouts.sideBar')
  @include('layouts.dashBody')
  @include('layouts.javascript')
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>


@endsection
