<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		@vite(['resources/css/app.css', 'resources/css/noscript.css','resources/css/fontawesome-all.min.css']) 
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>@yield('title')<br />
						</h1>
						<p>Descubre y experimenta con tu estilo. </p> 
						Este es tu espacio virtual para crear, combinar y visualizar outfits para toda ocasión. <br>
						Explora infinitas combinaciones de moda con nuestra herramienta de simulación interactiva.<br />
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Vision Outfit</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">Inicio</a></li>
							<li><a href="generic.html">Categorias</a></li>
							<li><a href="elements.html">Favoritos</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					@yield('content')

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Nombre</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Correo</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Mensaje</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Enviar" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section>
								<h3>Correo</h3>
								<p><a href="#">info@visionoutfit.com</a></p>
							</section>
							<section>
								<h3>Redes sociales</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>
        @vite(['resources/js/jquery.min.js', 'resources/js/jquery.scrollex.min.js', 'resources/js/jquery.scrolly.min.js', 'resources/js/browser.min.js', 'resources/js/breakpoints.min.js', 'resources/js/util.js', 'resources/js/main.js'])

	</body>
</html>