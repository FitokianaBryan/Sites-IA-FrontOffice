<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Détails</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo asset('assets/vendors/core/core.css');?>">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?php echo asset('assets/vendors/prismjs/themes/prism.css');?>">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo asset('assets/fonts/feather-font/css/iconfont.css');?>">
	<link rel="stylesheet" href="<?php echo asset('assets/vendors/flag-icon-css/css/flag-icon.min.css');?>">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo asset('assets/css/demo_5/style.css');?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo asset('assets/images/favicon.png');?>" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_navbar.html -->
		<div class="horizontal-menu">
			<nav class="navbar top-navbar">
				<div class="container">
					<div class="navbar-content">
						<a href="{{ url('/Home') }}" class="navbar-brand">
							Mada<span>News</span>
						</a>
						<ul class="navbar-nav">
							<li class="nav-item dropdown nav-profile">
								<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Profile		
								</a>
								<div class="dropdown-menu" aria-labelledby="profileDropdown">
									<div class="dropdown-body">
										<ul class="profile-nav p-0 pt-3">
											<li class="nav-item">
												<a href="{{ url('/Logout')}}" class="nav-link">
													<i data-feather="log-out"></i>
													<span>Déconnexion</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
						<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
							<i data-feather="menu"></i>					
						</button>
					</div>
				</div>
			</nav>
			<nav class="bottom-navbar">
				<div class="container">
					<ul class="nav page-navigation">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/Home') }}">
								<i class="link-icon" data-feather="box"></i>
								<span class="menu-title">Accueil</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('/ToSearch') }}" class="nav-link">
								<i class="link-icon" data-feather="search"></i>
								<span class="menu-title">Rechercher</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- partial -->
	
		<div class="page-wrapper">

			<div class="page-content">
				<div class="row">
					<div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
						<h4 class="page-title text-muted">{{ $article->categorie }}</h4>
						<div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">
                                      <!-- <h6 class="card-subtitle mb-2 text-muted">Enquete</h6> -->
                                      <h5 class="card-title">{{ $article->titre }}</h5>
                                      <p class="card-text">{{ $article->resume}}</p>
                                      <p class="cart-text"><small class="text-muted">Publié par : {{ $article->getAuteur()->nom }} {{ $article->getAuteur()->prenom }}</small></p>
                                      <p class="card-text"> <small class="text-muted">Publié le : {{ $article->getPublication()->publish_at }}</small></p>
                                      @if($article->getPublication()->update_at !== null)
                                      <p class="card-text"><small class="text-muted">Modifié le : {{ $article->getPublication()->update_at }}</small></p>
                                      @endif
                                    </div>
                                  </div>
                              <div class="col-md-4">
                                <img src="<?php echo asset($article->image);?>" class="card-img" alt="...">
                              </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <div class="card-body">
                                    <p class="card-text">{!! $article->contenu !!}</p>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
				</div>
				</div>
			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="<?php echo asset('assets/vendors/core/core.js');?>"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<script src="<?php echo asset('assets/vendors/prismjs/prism.js');?>"></script>
	<script src="<?php echo asset('assets/vendors/clipboard/clipboard.min.js');?>"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo asset('assets/vendors/feather-icons/feather.min.js');?>"></script>
	<script src="<?php echo asset('assets/js/template.js');?>"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>
<!-- 





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Détails</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap');?>">
    <link rel="stylesheet" href="<?php echo asset('https://fonts.googleapis.com/css?family=Abyssinica+SIL&amp;display=swap');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/Features-Large-Icons-icons.css');?>">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="{{ url('/Home') }}"><span>MadaNews</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/ToSearch') }}">Rechercher</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="{{ url('/Logout') }}">Déconnexion</a>
            </div>
        </div>
    </nav>
    <section class="py-5">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col order-md-last mb-5"><img class="rounded img-fluid" src="<?php echo asset('{{ $article->image }}');?>"></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div class="ms-md-3">
                        <p style="margin-bottom: 0px;color: #928c8c;">{{ $article->getAuteur()->categorie }}</p>
                        <p style="color: var(--bs-black);">{{ $article->getAuteur()->nom }} {{ $article->getAuteur()->prenom }}</p>
                        <h5 class="fs-3 fw-bold mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-quote fs-1 text-warning flex-shrink-0">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                            </svg>{{ $article->titre }}</h5>
                        <p class="text-muted mb-4">{{ $article->resume }}</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col" style="width: 100%;">
                    <p style="margin-left: 16px;">{{ $article->contenu }}</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-12 col-md-3">
                    <div class="fw-bold d-flex align-items-center mb-2"><span>Brand</span></div>
                    <p class="text-muted">Sem eleifend donec molestie, integer quisque orci aliquam.</p>
                </div>
                <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">Services</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">About</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">Careers</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2023 Brand</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="<?php echo asset('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo asset('assets/js/bs-init.js');?>"></script>
    <script src="<?php echo asset('assets/js/startup-modern.js');?>"></script>
</body>

</html> -->