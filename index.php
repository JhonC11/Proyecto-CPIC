<?php require 'models/user/login.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CPIC</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/master.css">
	<link rel="stylesheet" href="public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/css/gallery.css">

</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="da">
			<img src="public/imgs/encabe1-2.png" alt="">
		</div>

		<div class="da">
			<ul>
				<li class="item1">Programa de formación
					<ul class="submenu">
						<li><a  href="views/ftitulada.php">Formación titulada</a></li>
						<li role="separator" class="divider"></li>
						<li><a  href="#">Formación complementaria</a></li>
						<li role="separator" class="divider"></li>
						<li><a  href="#">Formación virtual</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="da">
			<section id="modal">
				<article>
					<h2>Login</h2>

					<form method="POST" name="frm_user" id="frm_user" action="models/user/login.php">
						<div class="form-group">
							E-mail
							<input type="text" name="email" class="form-control"><br>
							Password
							<input type="password" name="password" class="form-control"><br><br>
							<button class="btn-btn-lg btn-default">Ingresar</button>

							<button class="cerrarmodal"> &times; Cerrar Ventana </button>
						</div>

						</form>
				</article>
			</section>
			<button id="btnOpenModal">Login</button>
		</div>

			<div class="da">
				<section id="modal2">
					<article class="vent2">
						<h2>Registro</h2>

						<form method="POST" name="frm_user" id="frm_user" action="models/user/registro.php">
							<div class="form-group">
								Nombre
								<input type="text" name="name" class="form-control">

								Apellido
								<input type="text" name="last_name" class="form-control">

								Edad
								<input type="number" name="year" class="form-control">

								Telefono
								<input type="number" name="phone" class="form-control">

								Dependencia
								<select  class="form-control"  name="dependencia" placeholder="Dependencia" required>
									<option value="">--Seleccione una dependencia--</option>
									<option value="Administrador">Administrador</option>
									<option value="Bienestar">Bienestar</option>
								</select>

								E-mail
								<input type="text" name="email" class="form-control">
								
								Password
								<input type="password" name="password" class="form-control">

								<button class="btn-btn-lg btn-default">Registrar</button>



								<button class="cerrarmodal2"> &times; Cerrar Ventana </button>
							</div>
						</form>
					</article>
				</section>
				<button id="btnOpenModal2">Registrar</button>
			</div>
			</nav>


	<!-- Slider -->
	<section class="slider">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="owl-carousel owl-theme">
						<div class="item"><a href="#"><img src="public/imgs/sl3.png" alt=""></a></div>
						<div class="item"><a href="#"><img src="public/imgs/sl1.png" alt=""></a></div>
						<div class="item"><a href="#"><img src="public/imgs/sl2.png" alt=""></a></div>
					</div> 
				</div>				
			</div>
		</div>
	</section>



	<!-- Acordeon -->
<section class="acordeon">
		<div class="container-fluid">

		<h1 class="text-center ali">Nuestros Aliados</h1>
	

		<!-- Nav tabs -->
		<ul class="nav nav-tabs row" role="tablist">
			<li role="presentation" class="col-md-3"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
				<img src="public/imgs/sennova.png" alt="" width="100%">
			</a></li>
			<li role="presentation" class="col-md-3"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
				<img src="public/imgs/ape.png" width="100%" alt="">
			</a></li>
			<li role="presentation" class="col-md-3"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
				<img src="public/imgs/tecnoparque.png" width="100%" alt="">
			</a></li>
			<li role="presentation" class="col-md-3"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
				<img src="public/imgs/world skills.png" width="100%" alt="">
			</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active col-md-8 col-md-offset-2" id="home">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="glyphicon glyphicon-plus"></i>
									<strong>¿Quienes somos?</strong>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								El Sistema de Investigación, Desarrollo Tecnológico e Investigación (SENNOVA) tiene el propósito de fortalecer los estándares de calidad y pertinencia, en las áreas de investigación, desarrollo tecnológico e innovación, de la formación profesional impartida en la Entidad.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#otro" aria-expanded="true" aria-controls="otro">
									<i class="glyphicon glyphicon-plus"></i>
									<strong>¿Que hacemos?</strong>
								</a>
							</h4>
						</div>
						<div id="otro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								​Con el fin de fortalecer competencias orientadas al uso, aplicación y desarrollo de tecnologías avanzadas, por medio de las Tecnoacademias, SENNOVA genera cultura de innovación y competitividad en jóvenes de secundaria.
								<br>
								Además se fomenta el desarrollo de investigaciones científicas desde la educación media con aplicación de nuevas tecnologías como polo de desarrollo local y regional.
								<br>
								SENNOVA también realiza eventos de divulgación de ciencia, tecnología e innovación, como foros, seminarios y conferencias con expertos, con lo que se busca que el país tenga mayor competitividad.​
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="glyphicon glyphicon-plus"></i>
									<strong>Objetivos</strong>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								​​​-Formar capital humano con habilidades y destrezas que incrementen la capacidad de innovación de las empresas colombianas.
								<br>
								-Capacitar técnicos y tecnólogos para la ciencia, la tecnología y la innovación.
								<br>
								-Contribuir a la pertinencia de la formación profesional, a través de nuevas tecnologías que se incorporen a los programas de formación profesional integral.
								<br>
								-Orientar la creativida​d de los trabajadores colombianos y de los aprendices en general, a través del desarrollo de las habilidades y competencias en investigación, desarrollo e innovación.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="glyphicon glyphicon-plus"></i>	
									<strong>Investigación</strong>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								-La investigación aplicada es una herramienta formativa que desarrolla SENNOVA a través de diferentes proyectos de formación.
								<br>
								-El aprendiz participa activamente en la investigación del SENA a partir de los siguientes instrumentos:
								<br>
								​-Semilleros de investigación.
								<br>
								Grupos de investigación aplicada.
								Desarrollo de proyectos de investigación aplicada y desarrollo tecnológico  por redes de conocimiento, en los centros de formación.​
								<img src="public/imgs/investigacion.png" alt="" height="50%" width="50%" style="float: right;">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane  col-md-8 col-md-offset-2" id="profile">
				

				<div class="panel-group" id="ac1" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#ac1" href="#t2collapseOne" aria-expanded="true" aria-controls="t2collapseOne">
									<i class="glyphicon glyphicon-plus"></i>
									<strong>¿Quienes somos?</strong>
								</a>
							</h4>
						</div>
						<div id="t2collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								La Agencia Pública de Empleo del SENA presta un servicio de intermediación laboral público, gratuito, indiscriminado y sin intermediarios, para que los colombianos puedan participar de una oportunidad de empleo y los empresarios encuentren el talento humano que requieren para ocupar sus vacantes.

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#ac1" href="#t2collapseTwo" aria-expanded="false" aria-controls="t2collapseTwo">
									<i class="glyphicon glyphicon-plus"></i>
									<strong>¿A que correo se debe de enviar la hoja de vida?</strong>
								</a>
							</h4>
						</div>
						<div id="t2collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								La hoja de vida debe ser registrada en el aplicativo de intermediación laboral de la Agencia Pública de Empleo del SENA, a través de www.empleat.gov.co ó  http://spe.sena.edu.co
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#ac1" href="#t2collapseThree" aria-expanded="false" aria-controls="t2collapseThree">
									<i class="glyphicon glyphicon-plus"></i>
									<strong>Oficinas móviles</strong>
								</a>
							</h4>
						</div>
						<div id="t2collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								La Agencia Pública de Empleo cuenta con cuatro oficinas móviles  que recorren el territorio nacional llegando a todos aquellos lugares donde no hay oficinas físicas de la Agencia Pública de Empleo del SENA.
								<br>
								En las oficinas móviles, los ciudadanos encuentran  los

								siguientes servicios:
								<br>
								+ Búsqueda de empleo en línea y personalizada
								<br>
								
								+ Vacantes disponibles en todo el país
								<br>

								+ Convocatorias especiales nacionales e internacionales
								<br>

								+ Orientación ocupacional
								<br>
								
								+ Asistencia en la búsqueda de empleo a personas en situación

								de vulnerabilidad y discapacidad
							</div>
						</div>
					</div>
				</div>




			</div>

			<div role="tabpanel" class="tab-pane  col-md-8 col-md-offset-2" id="messages">

				<div class="panel-group" id="ac2" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#ac2" href="#t3collapseOne" aria-expanded="true" aria-controls="t3collapseOne">
									<i class="glyphicon glyphicon-plus"></i>
									¿Quienes somos?
								</a>
							</h4>
						</div>
						<div id="t3collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#ac2" href="#t3collapseTwo" aria-expanded="false" aria-controls="t3collapseTwo">
									<i class="glyphicon glyphicon-plus"></i>
									Collapsible Group Tab3
								</a>
							</h4>
						</div>
						<div id="t3collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#ac2" href="#t4collapseThree" aria-expanded="false" aria-controls="t4collapseThree">
									<i class="glyphicon glyphicon-plus"></i>
									Collapsible Group Tab3
								</a>
							</h4>
						</div>
						<div id="t4collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>



			</div>

			<div role="tabpanel" class="tab-pane  col-md-8 col-md-offset-2" id="settings">
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#t4collapseOne" aria-expanded="true" aria-controls="t4collapseOne">
									<i class="glyphicon glyphicon-plus"></i>
									<strong>¿QUÉ ES WORLDSKILLS?</strong>
										
								</a>
							</h4>
						</div>
						<div id="t4collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								Es una organización que busca mejorar los estándares y las normas de formación para el trabajo a nivel mundial, a través de competencias internacionales (torneo mundial) donde se miden las habilidades técnicas y tecnológicas por medio de proyectos prácticos que se desarrollan cada dos años.
								La organización celebra desde 1950, cada dos años, un torneo patrocinado por Educación Profesional y Organizaciones Internacionales de 72 países, siendo Colombia el país número 50, ingresando en 2008.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#t4collapseTwo" aria-expanded="false" aria-controls="t4collapseTwo">
									<i class="glyphicon glyphicon-plus"></i>
									Competencias
								</a>
							</h4>
						</div>
						<div id="t4collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tcollapseThree" aria-expanded="false" aria-controls="tcollapseThree">
									<i class="glyphicon glyphicon-plus"></i>
									Collapsible Group Tab4
								</a>
							</h4>
						</div>
						<div id="tcollapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
	
	


<section class="bienestar">
		<div class="container-fluid">

				<div class="tet row">
							<img src="public/imgs/encabe_biene.png" alt="" width="100%" height="90px">
							<div class= "tex col-md-4">
							    <strong>SALUD</strong><br>
								<p>
									Fomenta espacios de promoción de la salud física y mental para el fortalecimiento de hábitos de vida saludables.
								</p>
							</div>
							<div class="tex col-md-4">
							    <strong>EQUIDAD E IGUALDAD DE OPORTUNIDADES</strong><br>
								<p>
									Promueve estrategias que garanticen la equidad, la no discriminación y el acceso en igualdad de oportunidades.
								</p>
						
							</div>

							<div class="tex col-md-4">
							    <strong>COMPETENCIAS BÁSICAS</strong><br>
								<p>
									Procura la construcción de estrategias de autogestión del aprendizaje para el incremento del logro educativo.​
								</p>
							</div>
				</div>
				<div class=" tet row">
							<div class= "tex col-md-4">
								<strong>HABILIDADES SOCIOEMOCIONALES</strong><br>
								<p>
									Fortalece competencias ciudadanas y habilidades sociales de trabajo en equipo con base en valores de solidaridad, servicio, respeto y autonomía, entre otros.​
								</p>
							</div>
							<div class="tex col-md-4">
								<strong>CULTURA</strong><br>
								
									<p>
										Procura la construcción de estrategias de autogestión del aprendizaje para el incremento del logro educativo.
									</p>
						
							</div>

							<div class="tex col-md-4">
								<strong>DEPORTE</strong><br>
								<p>
									Fomenta la práctica del deporte y la actividad física para el desarrollo de hábitos de vida saludables, el adecuado uso del tiempo libre y el desarrollo de habilidades socioemocionales, apoyando al proceso de formación integral. ​.
								</p>
							</div>
					</div>
					<div class=" tet row">
							<div class= "tex col-md-4">
								<strong>LIDEREAZGO</strong><br>
								<p>
									Fomenta la formación de líderes integrales con sentido de pertenencia hacia la institución que fortalezcan los espacios de representación y participación, como elementos para la construcción de ciudadanos socialmente responsables
								</p>
							</div>
							<div class="tex col-md-4">
								<strong>RESPONSABILIDAD SOCIAL</strong><br>
									<p>
										Fomenta habilidades de liderazgo social que permitan desarrollar el crecimiento personal, la apropiación institucional de la entidad y la solidaridad con las comunidades.
									</p>
						
							</div>

							<div class="tex col-md-4">
								<strong>CONVIVENCIA</strong><br>
								<p>
									Fomenta ambientes de convivencia y participación social a través de espacios de reflexión como actores activos en la construcción de una paz duradera y estable, enfocada en la formación profesional integral.
								</p>
							</div>
					</div>


				</div>
</section>
	<section class="galeria">
	<div class="container-gallery">
		<img src="public/imgs/bienestar/032-2014-19-MelÃ³dica-NotasTeclado.jpg" alt="">
		<img src="public/imgs/bienestar/14962773_583713631813941_9008235928232615140_n.jpg" alt="">
		<img src="public/imgs/bienestar/17457777_1487054597993953_7278943542758865879_n.jpg" alt="">
		<img src="public/imgs/bienestar/18486209_1557457784286967_1672427826755756098_n.jpg" alt="">
		<img src="public/imgs/bienestar/20139672_1449624228463314_1747501999493690269_n.jpg" alt="">
		<img src="public/imgs/bienestar/032-2014-19-MelÃ³dica-NotasTeclado.jpg" alt="">
		<img src="public/imgs/bienestar/14962773_583713631813941_9008235928232615140_n.jpg" alt="">
		<img src="public/imgs/bienestar/18486209_1557457784286967_1672427826755756098_n.jpg" alt="">
		
	</div>
</section>



<!-- Footer -->
<footer>Todos los derechos reservados</footer>
<script src="public/js/jquery-3.1.1.js"></script>
<script src="public/js/owl.carousel.min.js"></script> 
<script src="public/js/bootstrap.min.js"></script> 
<script src="public/js/carousel.js"></script> 
<script src="public/js/gallery.js"></script> 
<script src="public/js/login.js"></script>
<script>

		$('.container-gallery').gallery({
			height: 750,
			items: 10,
			480: {
				items: 2,
				height: 400,
				thmbHeight: 100
			},
			768: {
				
				items: 3,
				height: 500,
				thmbHeight: 120
			},
			600: {
				
				items: 4
			},
			992 : {
				
				items: 5,
				height: 350
			}

		});

	</script>



</body>
</html>