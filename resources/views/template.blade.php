<html><head>
    <title>Diário de TI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  </head><body class="children">
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Diário de TI</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=@yield('activep')>
              <a href="/">Principal</a>
            </li>
            <li class=@yield('actives')>
              <a href="/sobre">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 h">@yield('autor')</div>
        </div>
        <div class="row opac">
          @yield('skills')
          <div class="col-md-4">@yield('post1')</div>
          <div class="col-md-4">@yield('post2')</div>
          <div class="col-md-4">@yield('post3')</div>
        </div>
      </div>
    </div>
  

</body></html>