
<!DOCTYPE html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
    <title>Laravel CRUD With Image</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" href="/">Products</a>
        </li>
    </ul>
</nav>

    @if($message = Session::get('success'))
    <div class = "alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @yield("main")

</body>
