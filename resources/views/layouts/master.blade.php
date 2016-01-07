<?php
  if (!isset($body_class)) {
    $body_class = 'standard';
  }

  if (!isset($head_extra)) {
    $head_extra = '';
  }

  if (!isset($footer_extra)) {
    $footer_extra = '';
  }  
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="/favicon.ico">

    <title>{{ $title }}</title>
    
    @if (isset($description))<meta name="description" content="{{ $description }}">@endif

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{ $head_extra }}
  </head>

  <body class="page-{{ $body_class }}">
    <main class="page-content content-wrap">
      @include('components.header')

      <div class="page-inner">
  
        <div class="page-title">
            <div class="container">
                <h1>{{ $page_h1 }}</h1>
            </div>
        </div>

        <div id="main-wrapper" class="container">
            @yield('content')
        </div><!-- Main Wrapper -->

        @include('components.footer')
      </div><!-- Page Inner -->
    </main><!-- Page Content -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>