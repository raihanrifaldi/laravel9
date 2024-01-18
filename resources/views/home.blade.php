<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">LARAV NINE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Input</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/table">Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <div class="container mt-5">
        <h1>This is Home page yow</h1>
        </br>
        <h3>Nama anda adalah {{ $name }} dan ada sebagai {{ $role }}</h3>
        </br>
        <button class="btn btn-danger">OKAYY</button>
        </br>
        </br>

        <!-- pengondisian if else -->
        <h4>hasil dari pengondisian if else</h4>
        @if ($role == 'Admin')
            <a href="">Admin Page</a>
        @elseif ($role == 'Staff')
            <a href="">Staff Page</a>
        @endif

        </br>
        </br>

        <!-- looping -->
        <h4>hasil dari looping for</h4>
        @for ($i = 0; $i <= 10; $i++)
            {{ $i }} </br>
        @endfor

        </br>

        <!-- foreach -->
        <h4>hasil dari foreach</h4>
        @foreach ($hobi as $data)
            {{ $data }} <br>
        @endforeach
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
