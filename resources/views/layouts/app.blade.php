<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <nav class="navbar bg-body-primary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{Vite::asset("resources/images/logo.png")}}" alt="Bootstrap" width="80">
                Movies!
              </a>
            </div>
          </nav>
    </header>

    <main>
        @yield('main')
    </main>
</body>
</html>