<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--  <link rel="icon" type="image/png" href="/favicon.png"> --}}
{{--  <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png"> --}}
  <link rel="stylesheet" type="text/css" href="/bootstrap.3.3.1.min.css">
{{--  <link rel="stylesheet" type="text/css" href="/css/custom.css" media="all"> --}}
  <title>Site Title</title>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="navbar navbar-static-top navbar-inverse" role="navigation">
  <div class="container">
    <div id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="container">
@yield('content')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/ie10-viewport-bug-workaround.js"></script>
</body>
</html>