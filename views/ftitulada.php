<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formacion Tituladas</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/master.css">
	<link rel="stylesheet" href="../public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../public/css/images-grid.css">
	<link rel="stylesheet" href="../public/css/animate.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="da">
			<img src="../public/imgs/encabe1.png" alt="">
		</div>
		<div class="da">	
			<button class="inicio"><a class="pola" href="../index.php">Inicio</button></a> 
		</div>
		<div class="da">
			<ul>
				<li class="item1">Programa de formación
					<ul class="submenu">
						<li><a  href="ftitulada.php">Formación titulada</a></li>
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

					<form method="POST" action="login.php" id="frm_user" name="frm_user" >
						<div class="form-group">
							E-mail
<<<<<<< HEAD
							<input type="text" class="form-control" name="email">
							Contraseña
							<input type="text" class="form-control" name="password">
=======
							<input type="text" class="form-control">
>>>>>>> 20c4ef5310e94b0556edd7feadcc832155494720
							
						</div>
						<select name="dependencia" id="dependencia">
							<option value="">seleccionar...</option>
							<option value="administrador">Administrador</option>
							<option value="bienestar">Bienestar</option>
						</select>
					</form>
					<button class="cerrarmodal"> &times; Cerrar Ventana </button>
					<input type="submit" value="enviar">
				</article>
			</section>
			<button id="btnOpenModal">Login</button>
		</div>
	</nav>
	<!-- fin del menu -->



	<div class="container">
		<div class="row">

			<div class="col-md-6 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title" class="animated bounceInLeft" >
								<a role="button"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Tecnologos
								</a>
							</h4>
						</div>
					</div>

					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSOne">
						<div class="panel-body">
							<div class="panel-group" id="sub-accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingsOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapsesOne" aria-expanded="true" id="button_co" aria-controls="collapsesOne">
												tecnologo topografico 
											</a>
										</h4>
									</div>
									<div id="collapsesOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingsOne">
										<div class="panel-body" id="panel-body">
											Entregar información detallada de la superficie de un terreno para elaborar de manera correcta y óptima un proyecto constructivo.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseFour" aria-expanded="false" id="button_co" aria-controls="collapseFour">
												Tecnologo En Electricidad Industrial 
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="panel-body" id="panel-body">
											Es un profesional con formación integral y competencias para ser gestor organizacional, con visión estratégica para responder a las necesidades del entorno.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFive">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseFive" aria-expanded="false" id="button_co" aria-controls="collapseFive">
												Tecnologo En Desarrollo Grafico De Proyectos De Arquitectura
											</a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
										<div class="panel-body" id="panel-body">
											La carrera tecnologica en desarrollo grafico de proyectos de Arquitectura e Ingenieria busca formar Tecnologos calificados para el desarrollo de proyectos de construccion en apoyo a arquitecto, ingenieros y diseñadores industriales.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSix">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseSix" aria-expanded="false" id="button_co" aria-controls="collapseSix">
												Tecnologo En Mantenimiento Mecanico Industrial
											</a>
										</h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
										<div class="panel-body" id="panel-body">
											Está capacitado para ser responsable de cualquier situación que se le presente en el trabajo que este desempeñando por que maneja parte eléctrica parte mecánica y soldadura en todas sus ramas y este está encargado de que la maquinaria que esta en su área de trabajo este trabajando en perfectas condiciones para el mejor desarrollo de su empresa.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSeven">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseSeven" aria-expanded="false" id="button_co" aria-controls="collapseSeven">
												Tecnologo En Análisis y desarrollo de sistemas de información
											</a>
										</h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
										<div class="panel-body" id="panel-body">
											Los Tecnólogos en Análisis y Programación de Sistemas de Información solucionan problemas informáticos, mediante la implementación de sistemas que proporcionan  información oportuna y confiable a las personas y las organizaciones, contribuyendo así al logro de los objetivos planteados.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingEight">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseEight" aria-expanded="false" id="button_co" aria-controls="collapseEight">
												Tecnologo En Mecanizado de productos metalmecánicos
											</a>
										</h4>
									</div>
									<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
										<div class="panel-body" id="panel-body">
											La industria metalmecánica, es el sector que comprende las maquinarias industriales y las herramientas proveedoras de partes a las demás industrias metálicas, siendo su insumo básico el metal y las aleaciones de hierro, para su utilización en bienes de capital productivo, relacionados con el ramo.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingNine">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseNine" aria-expanded="false" id="button_co" aria-controls="collapseNine">
												Tecnologo En Mantenimiento de Motocicletas
											</a>
										</h4>
									</div>
									<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
										<div class="panel-body" id="panel-body">
											Formar integralmente aprendices en la prevención y corrección fallas de los sistemas componentes de las motocicletas, en competencias ciudadanas y de emprendimiento, utilizando los recursos humanos, tecnológicos y económicos de acuerdo con las necesidades del sector.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseTen" aria-expanded="false" id="button_co" aria-controls="collapseTen">
												Tecnologo En Construcción
											</a>
										</h4>
									</div>
									<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
										<div class="panel-body" id="panel-body">
											La soldadura es un proceso de fabricación en donde se realiza la unión de dos o más piezas de un material, (generalmente metales o termoplásticos), usualmente logrado a través de la coalescencia (fusión), en la cual las piezas son soldadas fundiendo.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwelve">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseTwelve" aria-expanded="false" id="button_co" aria-controls="collapseTwelve">
												Tecnologo En Gestión integrada de sistemas de calidad HSEQ
											</a>
										</h4>
									</div>
									<div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
										<div class="panel-body" id="panel-body">
											Reconocer las características de los procesos de calidad, medio ambiente y seguridad y salud en el trabajo, 
											Integrar sistemas de gestión de calidad, gestión ambiental,  gestión de seguridad y salud en el trabajo y responsabilidad social corporativa.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThirteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseThirteen" aria-expanded="false" id="button_co" aria-controls="collapseThirteen">
												Tecnologo En Mantenimiento y reparación de edificaciones
											</a>
										</h4>
									</div>
									<div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
										<div class="panel-body" id="panel-body">
											El técnico en Reparación y Mantenimiento de Edificaciones podrá desempeñarse como oficial de construcción, instalador de piso, enchapador y revocador. Por otra parte, quienes se capaciten en Construcciones Livianas en Seco podrá desempeñarse como promotor, diseñador, desarrollador y ejecutor de edificaciones en sistemas DryWall, por medio de actividades laborales como carpintería e instalaciones residenciales y comerciales
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFiveteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseFiveteen" aria-expanded="false" id="button_co" aria-controls="collapseFiveteen">
												Tecnologo En Desarrollo grafico de proyectos de arquitectura e ingeniería
											</a>
										</h4>
									</div>
									<div id="collapseFiveteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFiveteen">
										<div class="panel-body" id="panel-body">
											Se especializa en expresar gráficamente proyectos de construcción de conformidad con las normas y técnicas de representación grafica, numérica y conceptual.
											Interpretar diferentes tipos de planos.
											Desarrollar técnicas de presentación virtual en proyectos de construcción.
											Dibujar planos aplicando la simbología, convenciones, escala requerida y especificaciones, y las normas técnicas ICONTEC vigentes.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSixteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseSixteen" aria-expanded="false" id="button_co" aria-controls="collapseSixteen">
												Tecnologo En Mantenimiento electromecánico industrial
											</a>
										</h4>
									</div>
									<div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
										<div class="panel-body" id="panel-body">
											Probar y observar las condiciones eléctricas y mecánicas de los motores eléctricos, transformadores, dispositivos de distribución y control y otros equipos eléctricos utilizando instrumentos de medición y prueba de acuerdo con parámetros establecidos de operación.
											Diagnosticar los sistemas neumáticos, oleo hidráulicos, mecánicos, eléctricos y electrónicos de acuerdo a su función y especificaciones técnicas.
											Intervenir los sistemas neumáticos, oleo hidráulicos, mecánicos, eléctricos y electrónicos de acuerdo al resultado de su diagnóstico.
											Diagnosticar motores eléctricos y otros equipos eléctricos según diagnóstico realizado y especificaciones del fabricante del elemento.
											Reemplazar o reacondicionar conexiones, conmutadores y otros componentes eléctricos teniendo en cuenta requerimientos del sistema y condiciones de seguridad.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingEighteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseEighteen" aria-expanded="false" id="button_co" aria-controls="collapseEighteen">
												Tecnologo En Mantenimiento Mecánico Industrial
											</a>
										</h4>
									</div>
									<div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
										<div class="panel-body" id="panel-body">
											tendrá las habilidades y destrezas para desarrollar actividades, tomar decisiones y emitir conceptos en el desarrollo de proyectos de orden técnico en el ámbito del mantenimiento industrial. 
											Su campo de acción es el ámbito del mantenimiento Industrial optando por los protocolos de mantenimiento preventivo y correctivo y sus ramas afines y complementarias, dentro de las cuales realizará actividades de mantenimiento, presupuesto, ejecución y evaluación de planes de mejoramiento para optimizar el servicio.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingNineteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseNineteen" aria-expanded="false" id="button_co" aria-controls="collapseNineteen">
												Tecnologo En Mantenimiento Mecánico Industrial
											</a>
										</h4>
									</div>
									<div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNineteen">
										<div class="panel-body" id="panel-body">
											tendrá las habilidades y destrezas para desarrollar actividades, tomar decisiones y emitir conceptos en el desarrollo de proyectos de orden técnico en el ámbito del mantenimiento industrial. 
											Su campo de acción es el ámbito del mantenimiento Industrial optando por los protocolos de mantenimiento preventivo y correctivo y sus ramas afines y complementarias, dentro de las cuales realizará actividades de mantenimiento, presupuesto, ejecución y evaluación de planes de mejoramiento para optimizar el servicio.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwentytwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseTwentytwo" aria-expanded="false" id="button_co" aria-controls="collapseTwentytwo">
												Tecnologo En Mantenimiento Mecatrónico De Automotores
											</a>
										</h4>
									</div>
									<div id="collapseTwentytwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentytwo">
										<div class="panel-body" id="panel-body">
											La mecatrónica de por sí no apunta a ser precisamente una tecnología y/o ingeniería, es la síntesis de tecnologías, usando no solamente tecnología mecánica convencional, sino también tecnología de ingeniería existente tal como electrónica, ingeniería de sistemas, etc. Libremente para los propósitos necesarios. O sea, se requieren dos conceptos básicos para mezclar las tecnologías en este rango amplio y organizarlas, el concepto de sistema y el de interface.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwentynine">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion" href="#collapseTwentynine" aria-expanded="false" id="button_co" aria-controls="collapseTwentynine">
												Tecnologo En obras civiles
											</a>
										</h4>
									</div>
									<div id="collapseTwentynine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentynine">
										<div class="panel-body" id="panel-body">
											La carrera Tecnologoa en Obras Civiles busca formar tecnicos en el diseño, la construccion y la interventoria de obras civiles; capaces deplanear y asesorar los aspectos tecnicos que se deben seguir en un proceso constructivo; y administrar los recursos humanos y fisicosque se requieren para la construccion de obras civiles, haciendo enfasis en el control de calidad de los diferentes materiales.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




			<!-- FIN DE GRUPO TECNOLOGOS -->



			<!-- Hola -->


			<div class="col-md-6 panel-group" id="accordion2" role="tablist" aria-multiselectable="true">

			<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">	
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title" class="animated bounceInRight" >
							<a role="button" class="titulos" data-toggle="collapse" data-parent="#accordion2" href="#collapseDOs" aria-expanded="true" aria-controls="collapseDOs">
								Tecnicos
							</a>
						</h4>
					</div>
					<div id="collapseDOs" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSDOs">
						<div class="panel-body">
							<div class="panel-group" id="sub-accordion2" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseTwo" aria-expanded="false" id="button_co" aria-controls="collapseTwo">
												tecnico en mantenimiento  mecatronica  de automotores 
											</a>
										</h4>
									</div>
									<!-- <div id="el_mas" class="move_down">+</div> -->
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body" id="panel-body">
											La integración de mecánica, electrónica y software para crear ahorros de energía y de recursos y sistemas de alta inteligencia.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseThree" aria-expanded="false" id="button_co" aria-controls="collapseThree">
												Tecnico Soldadura De Productos Metalicos(Platino)
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body" id="panel-body">
											La soldadura es un proceso de fabricación en donde se realiza la unión de dos o más piezas de un material, (generalmente metales o termoplásticos), usualmente logrado a través de la coalescencia (fusión), en la cual las piezas son soldadas fundiendo.
										</div>
									</div>
								</div>






								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingEleven">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseEleven" aria-expanded="false" id="button_co" aria-controls="collapseEleven">
												Tecnico Soldadura De Productos Metalicos(Platino)
											</a>
										</h4>
									</div>
									<div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
										<div class="panel-body" id="panel-body">
											Es un profesional con formación integral y competencias para participar en grupos interdisciplinarios encargados del diseño, la construcción y la interventoría de obras civiles; planear y asesorar los aspectos técnicos que se deben seguir en un proceso constructivo; y administrar los recursos humanos y físicos que se requieren para la construcción de obras civiles, haciendo énfasis en el control de calidad de los diferentes materiales.
										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFourteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseFourteen" aria-expanded="false" id="button_co" aria-controls="collapseFourteen">
												Tecnico Patronaje Industrial De Prendas De Vestir
											</a>
										</h4>
									</div>
									<div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
										<div class="panel-body" id="panel-body">
											El patronaje industrial es la creación de patrones que permiten elaborar moldes para crear prendas de vestir, en este caso prendas para la mujer.  Este sistema consiste en desglosar el vestido o prenda de vestir por piezas teniendo en cuenta las diferentes partes del cuerpo.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSeventeen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseSeventeen" aria-expanded="false" id="button_co" aria-controls="collapseSeventeen">
												Tecnico En Mantenimiento Eléctrico Y Electrónico En Automotores
											</a>
										</h4>
									</div>
									<div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
										<div class="panel-body" id="panel-body">
											Se creó para brindar al sector productivo de Mantenimiento de Equipos de Transporte, de grupos electrógenos y de equipos de la construcción, minería y petroleros la  posibilidad de incorporar personal con altas calidades laborales y profesionales que contribuyan al desarrollo económico, social y tecnológico de su entorno y del país, así mismo ofrecer a los aprendices formación en las tecnologías de Mecánica, Eléctrica, Electrónica Automotriz.
										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwenty">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseTwenty" aria-expanded="false" id="button_co" aria-controls="collapseTwenty">
												Tecnico En Mantenimiento De Motores Diésel
											</a>
										</h4>
									</div>
									<div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
										<div class="panel-body" id="panel-body">
											La Mecánica Diésel hace referencia al estudio, diagnóstico y reparación de los mecanismos externos e internos que producen la energía necesaria para el funcionamiento del motor Diesel y su rodaje.
											Entre estos mecanismos o conjuntos de elementos están el sistema de carburación, sistema de frenos, sistema de trasmisión, acople de bielas y cigüeñal, etc., capaces de transmitir movimiento hacia las llantas.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwentyOne">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseTwentyOne" aria-expanded="false" id="button_co" aria-controls="collapseTwentyOne">
												Tecnico En Seguridad Vial, Control De Transito Y Transporte
											</a>
										</h4>
									</div>
									<div id="collapseTwentyOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyOne">
										<div class="panel-body" id="panel-body">
											Podrá desempeñarse en organismos de tránsito, en organizaciones dedicadas al transporte y en Instituciones de Educación. El egresado del programa será competente para ejercer funciones preventivas, educativas, asistenciales, de control, regulacion y seguridad vial, de los diferentes actores de la vía (peatones, conductores y pasajeros); con el fin de intervenir en el cumplimiento de las normas de tránsito y transporte en todo el territorio colombiano y generar consciencia de la responsabilidad de preservar la vida en las vías.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwentythree">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseTwentythree" aria-expanded="false" id="button_co" aria-controls="collapseTwentythree">
												Tecnico En Electricidad Residencial
											</a>
										</h4>
									</div>
									<div id="collapseTwentythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentythree">
										<div class="panel-body" id="panel-body">
											La persona con amplios conocimientos en electricidad con experiencia de taller y laboratorio, capacitado para realizar, reparar, mejorar o ampliar la instalación eléctrica de una residencia o de un comercio mediano.
											Capacitada para interpretar un plano eléctrico, realizar un presupuesto y ejecutar un proyecto pequeño.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwentyfour">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseTwentyfour" aria-expanded="false" id="button_co" aria-controls="collapseTwentyfour">
												Tecnico En  Mecanizado De Productos Metalmecánicos
											</a>
										</h4>
									</div>
									<div id="collapseTwentyfour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyfour">
										<div class="panel-body" id="panel-body">
											La industria metalmecánica, es el sector que comprende las maquinarias industriales y las herramientas proveedoras de partes a las demás industrias metálicas, siendo su insumo básico el metal y las aleaciones de hierro, para su utilización en bienes de capital productivo, relacionados con el ramo.
											La metalmecánica, estudia todo lo relacionado con la industria metálica, desde la obtención de la materia prima, hasta su proceso de conversión en acero y después el proceso de transformación industrial para la obtención de láminas, alambre, placas, etc. las cuales puedan ser procesadas, para finalmente obtener un producto de uso cotidiano
											La metalmecanica abarca los procesos de producción fabricacion y mantenimiento de la rama que ocupan los metales.  
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwentyfive">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseTwentyfive" aria-expanded="false" id="button_co" aria-controls="collapseTwentyfive">
												Tecnico En Construccion de Edificaciones
											</a>
										</h4>
									</div>
									<div id="collapseTwentyfive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyfive">
										<div class="panel-body" id="panel-body">
											Se caracteriza por poseer conocimientos, destrezas y habilidades que le permiten inspeccionar y controlar las especificaciones técnicas de cada una de las etapas constructivas de un proyecto, controlar tanto la cantidad como la calidad de los materiales al interior de una obra, interpretar los diseños de los diferentes componentes de una obra, ejecutar procesos de construcción, remodelación y mantenimiento de obras civiles con criterios de seguridad, economía y eficiencia.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingtwentysix">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapsetwentysix" aria-expanded="false" id="button_co" aria-controls="collapsetwentysix">
												Tecnico En Mantenimiento de Motocicletas
											</a>
										</h4>
									</div>
									<div id="collapsetwentysix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentysix">
										<div class="panel-body" id="panel-body">
											Formar integralmente aprendices en la prevención y corrección fallas de los sistemas componentes de las motocicletas, en competencias ciudadanas y de emprendimiento, utilizando los recursos humanos, tecnológicos y económicos de acuerdo con las necesidades del sector.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwentyseven">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapseTwentyseven" aria-expanded="false" id="button_co" aria-controls="collapseTwentyseven">
												Tecnico En Seguridad y Salud en el Trabajo 
											</a>
										</h4>
									</div>
									<div id="collapseTwentyseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyseven">
										<div class="panel-body" id="panel-body">
											Como Técnico Laboral en Seguridad Ocupacional estarás en capacidad de identificar condiciones inseguras y peligros  de higiene y seguridad industrial para la aplicación de medidas de intervención acordes al Sistema de Gestión en Seguridad y Salud en el Trabajo (SG-SST) y verificar el cumplimiento de estas, monitorear condiciones seguras en equipos, máquinas y herramientas, suministrar información en aspectos de control de emergencia, asistir en actividades de seguimiento  y control de accidentalidad, verificar el cumplimiento de la  normatividad para ATEL. Aportaras liderazgo, interés por la preservación de la salud y la integridad de los trabajadores, velando por el buen manejo de los recursos de la empresa, con énfasis en las condiciones del Plan Básico Legal.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingtwentyeight">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#sub-accordion2" href="#collapsetwentyeight" aria-expanded="false" id="button_co" aria-controls="collapsetwentyeight">
												Tecnico En Seguridad y Salud en el Trabajo 
											</a>
										</h4>
									</div>
									<div id="collapsetwentyeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentyeight">
										<div class="panel-body" id="panel-body">
											Como Técnico Laboral en Seguridad Ocupacional estarás en capacidad de identificar condiciones inseguras y peligros  de higiene y seguridad industrial para la aplicación de medidas de intervención acordes al Sistema de Gestión en Seguridad y Salud en el Trabajo (SG-SST) y verificar el cumplimiento de estas, monitorear condiciones seguras en equipos, máquinas y herramientas, suministrar información en aspectos de control de emergencia, asistir en actividades de seguimiento  y control de accidentalidad, verificar el cumplimiento de la  normatividad para ATEL. Aportaras liderazgo, interés por la preservación de la salud y la integridad de los trabajadores, velando por el buen manejo de los recursos de la empresa, con énfasis en las condiciones del Plan Básico Legal.
										</div>
									</div>
								</div>





							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		</div>






		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//cdn.jsdelivr.net/velocity/1.1.0/velocity.min.js"></script>
		<script src="../public/js/login.js"></script>
		<script src="../public/js/bootstrap.min.js"></script>


		<script>
		
</script>


</body>
</html>