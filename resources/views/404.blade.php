<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/import/404.css') }} " />
    <title>Web Design Mastery | 404 Not Found Page</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo"><a href="#">KcHome</a></div>
    </nav>
    <div class="container">
      <div class="header">
        <h1>404</h1>
        <h3>Page Not Found!</h3>
      </div>
      <img src="public/images/bg.jpg" alt="not found" />
      <div class="footer">
        <p>
          We're sorry, the page you requested could not be found. Please go back
          to the homepage!
        </p>
        <a href="{{url('/')}}"><button>GO HOME</button></a>
      </div>
    </div>
  </body>
</html>