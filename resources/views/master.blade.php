<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">


@include('layout.head') 

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
@include('layout.header')
@include('layout.sidbar')
<aside class="control-sidebar control-sidebar-dark"></aside> 
</div>


@yield('content')

@include('layout.footer')
@include('layout.footsc')
</body>
</html>
