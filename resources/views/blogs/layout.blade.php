<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Program Help Desk</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Customer</a></li>
      <li><a href="#">Admin</a></li>
      <li><a href="#">Bagian</a></li>
      <li><a href="#">Atasan 1</a></li>
      <li><a href="#">Atasan 2</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
   @yield('content')
</div>

</body>
</html>
