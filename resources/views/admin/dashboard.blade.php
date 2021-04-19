@extends('layouts.layout')
  @section('content')
 {{-- @include('layouts.navigation') --}}
  @include('layouts.sideBar')
  @include('layouts.dashBody')
  <script >
    $(function() {
$('#sidebarCollapse').on('click', function() {
  $('#sidebar, #content').toggleClass('active');
});
});

</script>


@endsection
