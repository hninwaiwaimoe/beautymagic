<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html"><span class="flaticon-lotus"></span>Beauty Magic(fitness for womoen)</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="#" class="nav-link">HOME</a></li>
              <li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">ABOUT</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Plans</a></li>
              <li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="{{route('loginpage')}}" class="nav-link">LOGIN</a></li>
               <li class="nav-item"><a href="{{route('registerpage')}}" class="nav-link">REGISTER</a></li>
                </li>
            </ul>
          </div>
          </div>
      </nav>

@yield('content')


<!--===============================================================================================-->
	
</body>
</html>
