<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>
<body>
<div class="container2">
    @yield('container2')
</div>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">dashboard</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/DataPengajuan">data pengajuan</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/DataPengguna">data pengguna</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Persentase">persentase</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayat">riwayat</a>
                    </li>
                    <hr>
                    <a class="nav-link" href="/">
                     <i class="bi bi-box-arrow-left"></i> Logout
                    </a>


                </ul>
             
            </div>
        </div>


    </div>
</body>
</html>