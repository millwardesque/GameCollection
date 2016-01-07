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
    <title>{{ $title }}</title>
    
    @if (isset($description))<meta name="description" content="{{ $description }}">@endif
    @if (isset($keywords)) <meta name="keywords" content="{{ $keywords }}">@endif
    
    <meta charset="UTF-8"> 

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

    {{ $footer_extra }}
  </body>
</html>