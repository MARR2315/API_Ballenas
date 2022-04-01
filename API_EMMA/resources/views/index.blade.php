<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MAR-EMMA_U3</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href=" /css/main.css" />
		<noscript><link rel="stylesheet" href=" /css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="page-wrapper">
					<div id="wrapper">
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">TIBURONES</h1>
									<p>Los tiburones pertenecen al orden de los selacimorfos y llegaron a convivir con los dinosaurios. Su presencia en nuestro planeta se documenta desde hace más de 450 millones de años</p>
									<ul class="actions">
										<li><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/T001.jpg" />
								</div>
							</section>
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">UN MUNDO SIN TUBURONES</h2>
									<p><i>la poblacion de tiburones han descendido un 71% desde 1970. En la actualidad tres cuartas partes de las especies de tiburon se encuentran en peligro de extincion</i></p>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<img src="images/T1.jpg" />
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h1 class="major">MALDIVAS</h1>
									<p>Dos tiburones de puntas negras se encuentran sobre un cardumen en busca de alimento. Estos superdepredadores ayudan a mantener el equilibrio en los arrecifes, su presencia suele ser indicativa de la buena salud de estos ecosistemas.</p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="images/T5.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">SABIAS QUE</h2>
									<ul>
										<li>Los tiburones martillo tienen visión de 360 grados</li>
										<li>El tiburón más grande es el tiburón ballena, que puede llegar a tener una longitud de 13 metros</li>
										<li>La especie más rápida es el tiburón de Mako, con una velocidad de 48 km/h</li>
										<li>Los tiburones consumen 11 toneladas de carne al año</li>
									</ul>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/T2.jpg" class="image filtered span-3" data-position="bottom"><img src="images/T2.jpg" alt="" /></a>
										<a href="images/T6.jpg" class="image filtered span-1-5" data-position="center"><img src="images/T6.jpg" alt="" /></a>
										<a href="images/T7.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/T7.jpg" alt="" /></a>
									</div>
									<a href="images/T12.jpg" class="image filtered span-2-5" data-position="top"><img src="images/T12.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/T8.jpg" class="image filtered span-3" data-position="top"><img src="images/T8.jpg" alt="" /></a>
										<a href="images/T9.jpg" class="image filtered span-1-5" data-position="center"><img src="images/T9.jpg" alt="" /></a>
										<a href="images/T10.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/T10.jpg" alt="" /></a>
										<a href="images/T11.jpg" class="image filtered span-3" data-position="top"><img src="images/T11.jpg" alt="" /></a>
									</div>
									<a href="images/T14.jpg" class="image filtered span-2-5" data-position="right"><img src="images/T14.jpg" alt="" /></a>
								</div>
							</section>

							<section class="panel color2-alt">
								<div class="inner columns aligned">
									
									<div class="span-3">
										<h3 class="major">TIBURONES EN PELIGRO DE EXTINCION</h3>
										
									<div class="span-3">
										<h4>Alternate</h4>
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>ID</th>
														<th>NOMBRE</th>
														<th>TAMAÑO</th>
														<th>PESO</th>
														<th>RESIDENCIA</th>
													</tr>
												</thead>
												<tbody>
													@foreach($tiburones as $tiburon)
													<tr>
														<td>{{$tiburon['id']}}</td>
														<td>{{$tiburon['nombre']}}</td>
														<td>{{$tiburon['tamaño']}}</td>
														<td>{{$tiburon['peso']}}</td>
														<td>{{$tiburon['residencia']}}</td>
														
													</tr>
													@endforeach
											</table>
										</div>
									</div>
								</div>
			                </div>
							<div class="intro color2">
									<h2 class="major">Elements</h2>
									<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam. </p>
								</div>
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h1 class="major">Los tiburones forman “amistades” de años, disipando el mito del “tiburón solitario”</h1>
									<p></p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									 <img src="images/T5.jpg" alt="" />
								</div>
							</section>
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">PokeAPI</h2>
									<script src=" /js/codigo.min.js"></script>
								</div>
							</section>
							
							
			<script src=" /js/jquery.min.js"></script>
			<script src=" /js/browser.min.js"></script>
			<script src=" /js/breakpoints.min.js"></script>
			<script src=" /js/main.js"></script>
	</body>
</html>