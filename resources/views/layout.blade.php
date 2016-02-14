<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Job Application</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="">Job Application</a> -->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          @if(auth()->guest())
            @if(!Request::is('auth/login'))
              <li><a href="{{ url('/auth/login') }}"><strong>Admin</strong> Login</a></li>
            @endif
            <!-- @if(!Request::is('auth/register'))
              <li><a href="{{ url('/auth/register') }}">Register</a></li>
            @endif -->
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <strong>Welcome</strong> {{ auth()->user()->name }}
                <!-- <span class="caret"></span> -->
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
              </a>
            </li>
          @endif
          </ul>

        </div><!--/.nav-collapse -->
    </div>
    </nav>

  @include('flashMessage')

	<div class="container">
		@yield('content')
	</div>


  
</body>
</html>