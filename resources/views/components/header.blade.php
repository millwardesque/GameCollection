<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}">{{ Config::get('gamecollection.site_name') }}</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ URL::route('home') }}">Home</a></li>
        <li><a href="{{ URL::route('company.index') }}">Companies</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
