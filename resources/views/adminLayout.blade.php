<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Job Application</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}">
  
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
          <a class="navbar-brand" href="{{ URL('/') }}">Job App</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL('/') }}">Home</a></li>
            <li><a href="{{ route('admin.create') }}">Send Emails</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          @if(auth()->guest())
            @if(!Request::is('auth/login'))
              <li><a href="{{ url('/auth/login') }}"><strong>Admin</strong> Login</a></li>
            @endif
            <!-- @if(Request::is('auth/register'))
              <li><a href="{{ url('/auth/register') }}">Register</a></li>
            @endif -->
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <li><a href="{{ URL('admin') }}">
                      <strong>Welcome {{ auth()->user()->name }} </strong>
                    </a>
                </li> 
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
              </a>
            </li>
          @endif
          </ul>
        </div>
    </div>
    </nav>

  @include('messages.flashMessage')

	<div class="container-fluid">
  	<div class="row">
      @include('sideBar')
      @yield('content')
    </div>
	</div>


  
</body>
</html>