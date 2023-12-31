<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Skaitymas <span class="sr-only">{{ Request::is('/') ? '(dabartinis)' : '' }}</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/leksemos">leksemos <span class="sr-only">{{ Request::is('/leksemos') ? '(dabartinis)' : '' }}</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/zodziai">zodziai <span class="sr-only">{{ Request::is('/zodziai') ? '(dabartinis)' : '' }}</span></a>
            </li>
        </ul>
    </div>
</nav>
<h1>Knyga nobažnystės krikščioniškos</h1>
{{-- VIEW OUTPUT --}}
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
@stack('scripts')
</body>
</html>
