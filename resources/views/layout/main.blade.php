<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
	<style>  body {
        background-image: url("{{ asset('img/back1.jpeg') }}");
        background-size: cover;
    }</style>
    
</head>
<body>
@csrf
<div class="bg">
		
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bernas</a>
                <button class="navbar-toggler" type="button" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>

						<li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/news">News</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>      

<div class="container">
    @yield('container')
</div>
		<footer class="footer-02">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-5">
						<div class="row">
							<div class="col-md-12 col-lg-8 mb-md-0 mb-4">
								<h2 class="footer-heading"><a href="#" class="logo">Bernas.com</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<a href="#">read more <span class="ion-ios-arrow-round-forward"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-lg-7">
						<div class="row">
							<div class="col-md-3 mb-md-0 mb-4 border-left">
								<h2 class="footer-heading">Discover</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="py-1 d-block">Buy &amp; Sell</a></li>
		              <li><a href="#" class="py-1 d-block">Merchant</a></li>
		              <li><a href="#" class="py-1 d-block">Giving back</a></li>
		              <li><a href="#" class="py-1 d-block">Help &amp; Support</a></li>
		            </ul>
							</div>
							<div class="col-md-3 mb-md-0 mb-4 border-left">
								<h2 class="footer-heading">About</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="py-1 d-block">Staff</a></li>
		              <li><a href="#" class="py-1 d-block">Team</a></li>
		              <li><a href="#" class="py-1 d-block">Careers</a></li>
		              <li><a href="#" class="py-1 d-block">Blog</a></li>
		            </ul>
							</div>
							<div class="col-md-3 mb-md-0 mb-4 border-left">
								<h2 class="footer-heading">Resources</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="py-1 d-block">Security</a></li>
		              <li><a href="#" class="py-1 d-block">Global</a></li>
		              <li><a href="#" class="py-1 d-block">Charts</a></li>
		              <li><a href="#" class="py-1 d-block">Privacy</a></li>
		            </ul>
							</div>
							<div class="col-md-3 mb-md-0 mb-4 border-left">
								<h2 class="footer-heading">Social</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="py-1 d-block">Facebook</a></li>
		              <li><a href="#" class="py-1 d-block">Twitter</a></li>
		              <li><a href="#" class="py-1 d-block">Instagram</a></li>
		              <li><a href="#" class="py-1 d-block">Googleplus</a></li>
		            </ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt-5">
          <div class="col-md-6 col-lg-8">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://bernas.com" target="_blank">Bernas.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
          <div class="col-md-6 col-lg-4 text-md-right">
          	<p class="mb-0 list-unstyled">
          		<a class="mr-md-3" href="#">Terms</a>
          		<a class="mr-md-3" href="#">Privacy</a>
          		<a class="mr-md-3" href="#">Compliances</a>
          	</p>
          </div>
        </div>
			</div>
		</footer>
    
</body>

</html>
