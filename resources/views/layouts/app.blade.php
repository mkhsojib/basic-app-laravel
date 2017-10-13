<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basic Web Site</title>
  </head>
  <body>
@yield('content')

@section('sidebar')

<div class="sidebar">
  <h3>Sidebar</h3>
  this is sidebar
  @show
</div>


  </body>
</html>
