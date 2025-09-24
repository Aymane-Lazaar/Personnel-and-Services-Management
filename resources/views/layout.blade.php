<!DOCTYPE html>
<html>
<head>
    <title>Gestion Hôpital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light bg-info">
        <div class="container">
          <a class="navbar-brand mb-0 h1 text-white" href="{{route('services.index')}}">Home</a>
          <!-- <span class="navbar-brand mb-0 h1 text-white"></span> -->
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
