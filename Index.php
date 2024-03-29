<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Styles/estilo.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="Scripts/diccionario.js"></script>
	<script type="text/javascript" src="Scripts/script.js"></script>
	<script type="text/javascript" src="Scripts/jquery.translate.js"></script>
	<title>SimpsonsToday</title>
</head>
<body>
	<header>
		<div id="logo"><img src="Images/logo.png" alt="logo de los simpsons"></div>
		<div id="titulo"><h1>Simpsons Today</h1></div>
		<div>
			<select size="1" id="idiomas">
            	<option value="es" selected>Castellano</option>
            	<option value="en">Ingles</option>
    		</select>
		</div>
		<div id="hora">
			<?php
				function horaFecha(){
					$localtime_assoc = localtime(time(), true);
					$hour = $localtime_assoc[tm_hour];
					$min = $localtime_assoc[tm_min];
					$sec = $localtime_assoc[tm_sec];
					// Si no les pongo el 0 por delante, la hora saldria asi: "9:7:1" 
					if ($hour < 10) {
						$hour = "0".$hour;
					}
					if ($min < 10) {
						$min = "0".$min;
					}
					if ($sec < 10) {
						$sec = "0".$sec;
					}
					echo($localtime_assoc[tm_hour].':'.$localtime_assoc[tm_min].':'.$localtime_assoc[tm_sec].'</br>');
					echo($localtime_assoc[tm_mday].'/'.$localtime_assoc[tm_mon].'/'.((int)$localtime_assoc[tm_year]+1900));
				}
				echo(horaFecha());
			?>
		</div>
	</header>
	<nav>
		<ul>
			<li class="trn" data-trn-key="descripcion" id="descripcion">Descripción</li>
			<li class="trn" data-trn-key="temporadas" id="temporadas">
				<button onmouseover="myFunction()" class="dropbtn">Temporadas</button>
				<div id="myDropdown" class="dropdown-content">
				  <a href="#temp1">Temporadas 1-9</a>
				  <a href="#temp2">Temporadas 10-19</a>
				  <a href="#temp3">Temporadas 20-29</a>
				  <a href="#temp4">Temporadas 30+</a>
				</div>
			</li>			
			<li class="trn" data-trn-key="reparto" id="reparto">Reparto</li>
			<li class="trn" data-trn-key="merchandising" id="merch">Mechandising</li>
			<li class="trn" data-trn-key="videos" id="videos">Vídeos & links</li>
		</ul>
	</nav>

	<section id="Contenido">
		<div class="trn" data-trn-key="descripcionCont" id="descripcionCont" class="cont">
			<p>Los Simpson es una serie estadounidense de animación y comedia, creada por Matt Groening para el canal de televisión de la compañía Fox. La seríe cuenta la vida de una familia tipica trabajadora estadounidense, la cual constituyen los personajes <strong>Homer, Marge, Bart, Lisa y Maggie</strong>*. Esta situada en el pueblo ficticio de Springfield y parodia la cultura americana, su sociedad, televisión y la condición humana.</p>
			<p class="pImg">
				<img src="Images/matt.jpg" alt="creador los simpsons">
			</p>
			<p>La familia fue concebida por Groening poco antes de solicitar una serie de cortos animados con el productor James L. Brooks. Groening creó una familia disfuncional y nombró a los personajes en honor a los miembros de su propia familia, sustituyendo a Bart por su propio nombre. Los cortometrajes se convirtieron en parte de The Tracey Ullman Show el 19 de abril de 1987. Después de tres temporadas, el boceto se convirtió en un show de media hora en horario estelar y se convirtió en la primera serie de Fox en llegar a las 30 clasificaciones principales en una temporada (1989– 90)</p>
			<p>Desde su debut el 17 de diciembre de 1989, se han transmitido 662 episodios de Los Simpson. Es la comedia de situación estadounidense de más larga duración, y la serie de televisión estadounidense en horario estelar de mayor duración tanto en temporadas como en número de episodios. The Simpsons Movie, un largometraje, se estrenó en los cines de todo el mundo el 27 de julio de 2007 y recaudó más de $ 527 millones. Luego, el 30 de octubre de 2007, se lanzó un videojuego. Actualmente, The Simpsons terminó de emitirse su trigésima temporada, que comenzó a emitirse el 30 de septiembre de 2018. The Simpsons se renovó por una trigésima primera y trigésima segunda temporada el 6 de febrero de 2019, en la que esta última contendrá el episodio 700. The Simpsons es una producción conjunta de Gracie Films y 20th Century Fox Television y sindicada por 20th Television.</p>
			<p>Los Simpson recibieron elogios durante sus primeras nueve o diez temporadas, que generalmente se consideran su "Edad de Oro". Time la nombró la mejor serie de televisión del siglo XX, y Erik Adams de The A.V. Club lo llamó "el mayor logro de la televisión independientemente del formato". El 14 de enero de 2000, la familia Simpson recibió una estrella en el Paseo de la Fama de Hollywood. Ha ganado docenas de premios desde que debutó como una serie, incluidos 31 Premios Primetime Emmy, 30 Premios Annie y un Premio Peabody. Frase exclamativa de Homero "D'oh!" ha sido adoptado en el idioma inglés, mientras que The Simpsons ha influido en muchas otras comedias animadas orientadas a adultos. Sin embargo, también ha sido criticado por una disminución de la calidad percibida a lo largo de los años.</p>
			<p class="pImg">
				<img src="Images/Familia.jpg" alt="Familia los simpsons">
			</p>
		</div>
		<div class="trn" data-trn-key="temporadasCont" id="temporadasCont" class="cont">
			<h3>La serie de "Los Simpsons" actualmente dispone de 31 temporadas.</h3>
			<h5 id="temp1">Temporada 1</h5>
			<p>17/12/1989 - 13/03/1990</p>
				<iframe width="60%" height="415" src="https://www.youtube.com/embed/nekvVuoiTyA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h5>Temporada 2</h5>
			<p>11/10/1990 - 11/07/1991</p>
				<iframe width="60%" height="415" src="https://www.youtube.com/embed/F3nYNuwjdlU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h5>Temporada 3</h5>
			<p>19/09/1991 - 27/08/1992</p>
				<iframe width="60%" height="415" src="https://www.youtube.com/embed/qT1oU35QpQM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h5>Temporada 4</h5>
			<p>24/09/1992 - 13/05/1993</p>
			<h5>Temporada 5</h5>
			<p>30/09/1993 - 19/05/1994</p>
			<h5>Temporada 6</h5>
			<p>04/09/1994 - 21/05/1995</p>
			<h5>Temporada 7</h5>
			<p>17/09/1995 - 19/05/1996</p>
			<h5>Temporada 8</h5>
			<p>27/10/1996 - 18/05/1997</p>
			<h5>Temporada 9</h5>
			<p>21/09/1997 - 17/05/1998</p>
			<h5 id="temp2">Temporada 10</h5>
			<p>23/08/1998 - 16/05/1999</p>
			<h5>Temporada 11</h5>
			<p>26/09/1999 - 14/05/2000</p>
			<h5>Temporada 12</h5>
			<p>1/11/2000 - 20/05/2001</p>
			<h5>Temporada 13</h5>
			<p>6/11/2001 - 22/05/2002</p>
			<h5>Temporada 14</h5>
			<p>3/11/2002 - 18/05/2003</p>
			<h5>Temporada 15</h5>
			<p>2/11/2003 - 23/05/2004</p>
			<h5>Temporada 16</h5>
			<p>7/11/2004 - 15/05/2005</p>
			<h5>Temporada 17</h5>
			<p>11/09/2005 - 21/05/2006</p>
			<h5>Temporada 18</h5>
			<p>10/09/2006 - 20/05/2007</p>
			<h5>Temporada 19</h5>
			<p>23/09/2007 - 18/05/2008</p>
			<h5 id="temp3">Temporada 20</h5>
			<p>28/09/2008 - 17/05/2009</p>
			<h5>Temporada 21</h5>
			<p>27/09/2009 - 23/05/2010</p>
			<h5>Temporada 22</h5>
			<p>26/09/2010 - 22/05/2011</p>
			<h5>Temporada 23</h5>
			<p>25/09/2011 - 20/05/2012</p>
			<h5>Temporada 24</h5>
			<p>26/09/2012 - 22/05/2013</p>
			<h5>Temporada 25</h5>
			<p>22/09/2013 - 23/05/2014</p>
			<h5>Temporada 26</h5>
			<p>26/09/2014 - 22/05/2015</p>
			<h5>Temporada 27</h5>
			<p>23/09/2015 - 22/05/2016</p>
			<h5>Temporada 28</h5>
			<p>27/09/2016 - 22/05/2017</p>
			<h5>Temporada 29</h5>
			<p>26/09/2017 - 22/05/2018</p>
			<h5 id="temp4">Temporada 30</h5>
			<p>30/09/2018 - 12/05/2019</p>
			<h5>Temporada 31</h5>
			<p>29/09/2019 - En emisión</p>
		</div>
		<div class="trn" data-trn-key="repartoCont" id="repartoCont" class="cont">
			<h3>Hay una larga serie de personajes en Los Simpson de los cuales los mas importantes serían:</h3>
			<ul>
				<li><a href="#homer"> Homer J. Simpson</a></li>
				<li><a href="#marge">Marge Simpson</a></li>
				<li><a href="#bart">Bart Simpson</a></li>
				<li><a href="#lisa">Lisa Simpson</a></li>
				<li><a href="#maggie">Maggie Simpson</a></li>
			</ul>
		</br>
			<div id="homer">
				<h4>Homer J. Simpson</h4>
				<p class="GpImg">
					<img src="Images/homer.png" alt="Homer">
				</p>
				<p>Homer Jay Simpson es un personaje ficticio y el protagonista de la comedia animada estadounidense Los Simpson. Dan Castellaneta le da voz y apareció por primera vez en televisión, junto con el resto de su familia, en el corto "Buenas noches" de The Tracey Ullman Show el 19 de abril de 1987. Homer fue creado y diseñado por el dibujante Matt Groening mientras esperaba. El vestíbulo de la oficina de James L. Brooks. Groening había sido llamado para lanzar una serie de cortos basados en su historieta Life in Hell, pero en su lugar decidió crear un nuevo conjunto de personajes. Llamó al personaje por su padre, Homer Groening.</p>
				<p>Como patriarca de la familia del mismo nombre, Homer y su esposa <a href="#marge">Marge</a> tienen tres hijos: <a href="#bart">Bart</a>, <a href="#lisa">Lisa</a> y <a href="#maggie">Maggie</a>. Como proveedor de la familia, trabaja en la planta de energía nuclear de Springfield como inspector de seguridad. Homer encarna muchos estereotipos de la clase trabajadora estadounidense: es grosero, obeso, incompetente, perezoso, torpe, tonto, de mal genio, infantil y adicto a la cerveza, la comida chatarra y mirar televisión. Sin embargo, a menudo hace todo lo posible por ser un hombre decente y se dedica con fiereza a su familia, especialmente cuando más lo necesitan. A pesar de la rutina suburbana de su vida, ha tenido una serie de experiencias notables, como ir al espacio, escalar la montaña más alta de Springfield solo, luchar contra el ex presidente George HW Bush y ganar un premio Grammy como miembro de un cuarteto de barbería.</p>
				<p>En los cortos y episodios anteriores, Castellaneta expresó a Homero con una impresión suelta de Walter Matthau; Sin embargo, durante la segunda y tercera temporada del espectáculo de media hora, la voz de Homero evolucionó para hacerse más robusta, para permitir la expresión de una gama más completa de emociones. Ha aparecido en otros medios relacionados con The Simpsons, incluidos los videojuegos, The Simpsons Movie, The Simpsons Ride, comerciales y cómics, e inspiró una línea completa de productos. Su eslogan característico, el gruñido molesto "D'oh!", Se ha incluido en The New Oxford Dictionary of English desde 1998 y en el Oxford English Dictionary desde 2001.</p>
				<p>Homer es uno de los personajes más influyentes en la historia de la televisión, y es ampliamente considerado como un ícono cultural estadounidense. El periódico británico The Sunday Times lo describió como "La mayor creación cómica del tiempo [moderno]". Fue nombrado el mejor personaje "de los últimos 20 años" en 2010 por Entertainment Weekly, fue calificado como el segundo mejor personaje de dibujos animados por TV Guide, detrás de Bugs Bunny, y fue votado como el mejor personaje de televisión de todos los tiempos por los televidentes de Channel 4. Por expresar a Homer, Castellaneta ha ganado cuatro premios Primetime Emmy por su destacada actuación de doblaje y un premio Annie de logros especiales. En 2000, Homer y su familia recibieron una estrella en el Paseo de la Fama de Hollywood.</p>
				<p>La voz de Homer es interpretada por Dan Castellaneta, quien interpreta a muchos otros personajes, incluidos el abuelo Simpson, Krusty the Clown, Barney Gumble, Groundskeeper Willie, el alcalde Quimby y Hans Moleman. Castellaneta había formado parte del elenco habitual de The Tracey Ullman Show y anteriormente había hecho un trabajo de doblaje en Chicago junto a su esposa Deb Lacusta. Se necesitaban voces para los cortos de Los Simpson, por lo que los productores decidieron pedirle a Castellaneta y a su compañera de reparto Julie Kavner que expresen a Homer y Marge en lugar de contratar más actores. En los cortos y las primeras temporadas del espectáculo de media hora, la voz de Homer es diferente de la mayoría de la serie. La voz comenzó como una impresión suelta de Walter Matthau, pero Castellaneta no pudo "obtener suficiente poder detrás de esa voz", o mantener su impresión de Matthau para las sesiones de grabación de nueve a diez horas, y tuvo que encontrar algo más fácil. Durante la segunda y tercera temporada del espectáculo de media hora, Castellaneta "bajó la voz" y la desarrolló como más versátil y humorística, permitiendo a Homer una gama más completa de emociones.</p>
				<p>La voz normal de Castellaneta no se parece en nada a la de Homer. Para interpretar la voz de Homer, Castellaneta baja la barbilla al pecho y se dice que "suelta su coeficiente intelectual". Mientras estuvo en este estado, ha improvisado varios de los comentarios menos inteligentes de Homer, como la línea "S-M-R-T; quiero decir, S-M-A-R-T". de "Homer Goes to College" (quinta temporada, 1993), que fue un error genuino cometido por Castellaneta durante la grabación. A Castellaneta le gusta permanecer en el personaje durante las sesiones de grabación, y trata de visualizar una escena para poder darle la voz adecuada. A pesar de la fama de Homer, Castellaneta afirma que rara vez es reconocido en público, "excepto, tal vez, por un fanático acérrimo".</p>
				<p class="GpImg">
					<img src="Images/Actor_Voz_Homer.jpg" alt="actor voz homer">
				</p>
			</div>
			<div id="marge">
				<h4>Marge Simpson</h4>
				<p class="GpImg">
					<img src="Images/Marge.png" alt="Marge Simpson">
				</p>
				<p>Marjorie Jacqueline "Marge" Simpson (Bouvier) es un personaje ficticio de la comedia animada estadounidense Los Simpson y parte de la familia del mismo nombre. Ella es la voz de Julie Kavner y apareció por primera vez en televisión en el corto "Buenas noches" de The Tracey Ullman Show el 19 de abril de 1987. Marge fue creado y diseñado por el dibujante Matt Groening mientras esperaba en el vestíbulo de la oficina de James L. Brooks . Groening había sido llamado para lanzar una serie de cortos basados en Life in Hell, pero en su lugar decidió crear un nuevo conjunto de personajes. Llamó al personaje después de su madre Margaret Groening.</p>
				<p>Marge es la matriarca de la familia Simpson. Marge es la fuerza moralista en su familia y, a menudo, proporciona una voz firme en medio de las travesuras de su familia al tratar de mantener el orden en el hogar Simpson. A menudo se la retrata como una madre estereotipada de televisión y a menudo se la incluye en las listas de las mejores "mamás de la televisión". Ha aparecido en otros medios relacionados con The Simpsons, incluidos los videojuegos, The Simpsons Movie, The Simpsons Ride, comerciales y cómics, e inspiró una línea completa de productos.</p>
				<p>El distintivo peinado de colmena azul de Marge se inspiró en una combinación de la novia de "La novia de Frankenstein" y el estilo que llevaba Margaret Groening en la década de 1960. Se le pidió a Julie Kavner, miembro del elenco original de The Tracey Ullman Show, que hiciera una voz de Marge para que no se necesitaran más actores de voz. Kavner ha ganado varios premios por expresar a Marge, incluido un Premio Primetime Emmy a la Mejor Interpretación de Voz en off en 1992. También fue nominada para un Premio Annie a la Mejor Actuación de Voz en una Película Animada por su actuación en The Simpsons Movie. En 2000, Marge, junto con el resto de su familia, recibió una estrella en el Paseo de la Fama de Hollywood.</p>
				<p>La voz de Marge es interpretada por Julie Kavner, quien también interpreta las voces de la madre de Marge, Jacqueline, y sus hermanas Patty y Selma. Kavner había formado parte del elenco habitual de The Tracey Ullman Show. Se necesitaban voces para los cortometrajes, por lo que los productores decidieron pedirle a Kavner y al compañero de reparto Dan Castellaneta que expresen a Marge y Homer en lugar de contratar más actores. Parte del contrato de Kavner dice que nunca tendrá que promocionar a Los Simpson en video y rara vez interpreta la voz de Marge en público porque cree que "destruye la ilusión. La gente siente que son personas reales". Kavner toma en serio las sesiones de grabación y siente que la actuación de voz es "un poco más limitante que la actuación en vivo. Y no tengo nada que ver con el movimiento de mi personaje".</p>
				<p>La voz áspera de Marge es solo ligeramente diferente de la de Kavner, que tiene una "voz de grava melosa" que, según ella, se debe a "un golpe en [sus] cuerdas vocales". Mientras Marge es su personaje más famoso, los personajes favoritos de Kavner son Patty y Selma porque "son muy divertidos y tristes al mismo tiempo". En The Simpsons Movie, algunas escenas, como el mensaje de video de Marge a Homer, se grabaron más de cien veces, dejando a Kavner exhausta.</p>
				<p class="GpImg">
					<img src="Images/Actriz_Voz_Marge.jpg" alt="Actriz voz Marge">
				</p>
			</div>
			<div id="bart">
				<h4>Bart Simpson</h4>
				<p class="GpImg">
					<img src="Images/Bart.png" alt="Bart">
				</p>
				<p>Bartholomew JoJo "Bart" Simpson es un personaje ficticio de la serie de televisión animada estadounidense Los Simpson y parte de la familia Simpson. Tiene la voz de Nancy Cartwright y apareció por primera vez en televisión en el corto "Buenas noches" de The Tracey Ullman Show el 19 de abril de 1987. El dibujante Matt Groening creó y diseñó a Bart mientras esperaba en el vestíbulo de la oficina de James L. Brooks. Groening había sido llamado para lanzar una serie de cortos basados en su historieta, Life in Hell, pero en su lugar decidió crear un nuevo conjunto de personajes. Mientras que el resto de los personajes llevan el nombre de los miembros de la familia de Groening, el nombre de Bart es un anagrama de la palabra mocoso. Después de aparecer en The Tracey Ullman Show durante tres años, la familia Simpson recibió su propia serie en Fox, que se estrenó el 17 de diciembre de 1989.</p>
				<p>A los diez años, Bart es el hijo mayor y único hijo de Homer y Marge, y el hermano de Lisa y Maggie. Los rasgos de carácter más prominentes y populares de Bart son su picardía, rebeldía y falta de respeto por la autoridad.</p>
				<p>En el reparto, Nancy Cartwright originalmente planeó audicionar para el papel de Lisa, mientras que Yeardley Smith probó para Bart. La voz de Smith era demasiado alta para un niño, por lo que le dieron el papel de Lisa. Cartwright descubrió que Lisa no era interesante en ese momento, por lo que audicionó para Bart, que pensó que era un mejor papel.</p>
				<p>Las características del personaje incluyen sus mordazas de pizarra en la secuencia de apertura; su broma llama a Moe; y sus frases "Come mis pantalones cortos", "¡Ay, caramba!", "¡No tengas una vaca, hombre!", y "Soy Bart Simpson. ¿Quién demonios eres?". Aunque, con la excepción de "¡Ay, caramba!", Se han retirado o no se usan con frecuencia.</p>
				<p>Durante las dos primeras temporadas de The Simpsons, Bart fue el personaje principal del espectáculo y "Bartmania" se produjo, generando mercancías con el tema de Bart Simpson promocionando su actitud rebelde y orgullo por el bajo rendimiento, lo que causó que muchos padres y educadores lo eligieran como un mal modelo a seguir. para niños. Alrededor de la tercera temporada, la serie comenzó a centrarse más en la familia en su conjunto, aunque Bart sigue siendo un personaje destacado. Time nombró a Bart una de las 100 personas más importantes del siglo XX, y fue nombrado "artista del año" en 1990 por Entertainment Weekly.</p>
				<p>La voz de Bart es proporcionada por Nancy Cartwright, quien expresa varios otros personajes infantiles en Los Simpson, incluidos Nelson Muntz, Ralph Wiggum, Todd Flanders y Kearney. Si bien los papeles de Homer y Marge fueron asignados a Dan Castellaneta y Julie Kavner porque ya formaban parte del elenco de The Tracey Ullman Show, los productores decidieron celebrar el reparto para los papeles de Bart y Lisa. Inicialmente, se le había pedido a Yeardley Smith que hiciera una audición para el papel de Bart, pero la directora de casting Bonita Pietila creía que su voz era demasiado alta. Más tarde, Smith recordó: "Siempre soné demasiado como una niña. Leí dos líneas como Bart y me dijeron:" ¡Gracias por venir! ". Smith recibió el papel de Lisa. El 13 de marzo de 1987, Nancy Cartwright fue a audicionar para el papel de Lisa. Después de llegar a la audición, descubrió que Lisa simplemente fue descrita como la "hija del medio" y que en ese momento no tenía mucha personalidad. Cartwright se interesó más en el papel de Bart, quien fue descrito como "desviado, de bajo rendimiento, odiando a la escuela, irreverente, [e] inteligente". Matt Groening la dejó probar el papel, y al escucharla leer, le dio el trabajo en el acto. Cartwright es el único de los seis miembros principales del elenco de Los Simpson que había sido entrenado profesionalmente en la actuación de voz antes de trabajar en el programa.</p>
				<p>Se dice que la voz normal de Cartwright no tiene "rastros obvios de Bart". La voz vino naturalmente a Cartwright; antes de The Tracey Ullman Show, ella había usado elementos de ella en programas como My Little Pony, Snorks y Pound Puppies. Cartwright describe la voz de Bart como fácil de interpretar, diciendo: "Algunos personajes requieren un poco más de esfuerzo, control de las vías respiratorias superiores, sea lo que sea técnicamente. Pero Bart es fácil de hacer. Simplemente puedo entrar sin dificultad". Por lo general, hace cinco o seis lecturas de cada línea para darles a los productores más para trabajar. En episodios flashforward, Cartwright todavía proporciona la voz de Bart. Para "La boda de Lisa", (sexta temporada, 1995) la voz de Bart se bajó electrónicamente.</p>
				<p class="GpImg">
					<img src="Images/Actriz_Voz_Bart.jpg" alt="Actriz voz Bart">
				</p>
			</div>
			<div id="lisa">
				<h4>Lisa Simpson</h4>
				<p class="GpImg">
					<img src="Images/Lisa.png" alt="Lisa">
				</p>
				<p>Lisa Marie Simpson es un personaje ficticio de la serie animada de televisión Los Simpson. Es la hija del medio y la más inteligente de la familia Simpson. Con la voz de Yeardley Smith, Lisa nació como personaje en el corto "Good Night" de The Tracey Ullman Show el 19 de abril de 1987. El dibujante Matt Groening la creó y diseñó mientras esperaba conocer a James L. Brooks. Groening había sido invitado a lanzar una serie de cortos basados en su cómic Life in Hell, pero en cambio decidió crear un nuevo conjunto de personajes. Llamó a la hija mayor de Simpson por su hermana menor Lisa Groening Bartlett.</p>
				<p>Inteligente, apasionada y centro moral de la familia, Lisa Simpson, a los ocho años, es la segunda hija de Homer y Marge, la hermana menor de Bart y la hermana mayor de Maggie. El alto intelecto y la postura política liberal de Lisa crean una barrera entre ella y otros niños de su edad, por lo tanto, es un paria solitaria y social. Lisa es vegetariana, ecologista fuerte, feminista y budista. El personaje de Lisa se desarrolla muchas veces a lo largo del programa: se vuelve vegetariana en la temporada 7 y se convierte al budismo en la temporada 13. Lisa, una fuerte liberal, aboga por una variedad de causas políticas (por ejemplo, apoyar el movimiento de independencia tibetano) que generalmente la pone en contra de la mayoría de las personas en Springfield. Sin embargo, también puede ser algo intolerante con las opiniones que difieren de las suyas, y a menudo se niega a considerar perspectivas alternativas. En su tiempo libre, Lisa disfruta de muchos pasatiempos como leer y tocar el saxofón barítono, a pesar de la molestia de su padre con respecto a este último. Ha aparecido en otros medios relacionados con The Simpsons, incluidos los videojuegos, The Simpsons Movie, The Simpsons Ride, comerciales y cómics, e inspiró una línea de productos.</p>
				<p>Yeardley Smith originalmente probó el papel de Bart, mientras que Nancy Cartwright (quien más tarde fue elegida como la voz de Bart) probó para Lisa. Los productores consideraron la voz de Smith demasiado alta para un niño, por lo que le dieron el papel de Lisa. En los cortos de Tracey Ullman Show, Lisa era una especie de "mujer Bart" que reflejaba la travesura de su hermano, pero a medida que la serie progresaba, se convirtió en una voz liberal de la razón que atrajo tanto elogios como críticas de los fanáticos del espectáculo. Debido a su estilo de cabello puntiagudo inusual, muchos animadores consideran que Lisa es el personaje de Simpson más difícil de dibujar.</p>
				<p>Si bien los papeles de Homer y Marge se les dieron a Dan Castellaneta y Julie Kavner porque ya formaban parte del elenco de Tracey Ullman Show, los productores decidieron celebrar el reparto para los papeles de Bart y Lisa. Nancy Cartwright tenía la intención de audicionar para el papel de Lisa, pero no le gustó la descripción insípida del personaje (Lisa fue descrita simplemente como el "hijo del medio") y leyó el papel de Bart. La directora de casting Bonita Pietila trajo a Yeardley Smith para una audición después de verla actuar en la obra Living on Salvation Street. Smith dudaba en audicionar para una serie animada, pero su agente la había persuadido para que lo intentara. Smith audicionó originalmente para el papel de Bart, pero Pietila creía que su voz era demasiado alta. Más tarde, Smith recordó: "Siempre soné demasiado como una niña, leí dos líneas como Bart y me dijeron: '¡Gracias por venir!'". Pietila le ofreció a Smith el papel de Lisa.</p>
				<p>Smith y los escritores del programa trabajaron para darle a Lisa una personalidad más definida, y ella se ha desarrollado mucho durante la serie. En sus memorias de 2000 Mi vida como un niño de 10 años, Cartwright escribió: "con el ingenio brillante de los escritores y la interpretación irónica, honesta y sincera, Yeardley Smith ha convertido a Lisa una luz brillante de liderazgo, llena de compasión y competencia más allá de sus años. Lisa Simpson es el tipo de niño que no solo queremos que nuestros hijos sean, sino también el tipo de niño que queremos que sean todos los niños. Pero, en ese momento, en The Tracey Ullman Show, ella era solo una niña animada de ocho años que no tenía personalidad ".</p>
				<p class="GpImg">
					<img src="Images/Actriz_Voz_Lisa.jpg" alt="Actriz voz Lisa">
				</p>
			</div>
			<div id="maggie">
				<h4>Maggie Simpson</h4>
				<p class="GpImg">
					<img src="Images/Maggie.jpeg" alt="Maggie">
				</p>
				<p>Margaret "Maggie" Simpson es un personaje ficticio de la serie animada de televisión Los Simpson. Apareció por primera vez en televisión en el corto "Good Night" de Tracey Ullman Show el 19 de abril de 1987. Maggie fue creada y diseñada por el dibujante Matt Groening mientras esperaba en el vestíbulo de la oficina de James L. Brooks. Recibió su primer nombre de la hermana menor de Groening.</p>
				<p>Maggie es la hija menor de Homer y Marge, y hermana de Bart y Lisa. A menudo se la ve chupando su chupete rojo y, cuando camina, se tropieza con su ropa y se cae de cara (esta mordaza se usa mucho más en temporadas anteriores). Siendo una niña, no ha aprendido a hablar. Sin embargo, ella pareció hablar en el primer corto de Tracey Ullman Show.</p>
				<p>Aunque rara vez habla, con frecuencia hace un ruido de succión característico con su chupete, que se ha convertido en sinónimo del personaje. Los ruidos de succión del chupete son proporcionados por el creador del programa, Matt Groening y el primer productor Gabor Csupo. Nancy Cartwright proporciona actualmente partes orales y otras vocalizaciones de Maggie, pero también ha sido interpretada por las estrellas invitadas James Earl Jones, Elizabeth Taylor y Jodie Foster, y por los regulares de la serie Yeardley Smith y Harry Shearer.</p>
				<p>Con pocas excepciones, Maggie nunca habla, pero participa en los eventos que la rodean, con gestos sutiles y expresiones faciales. Las primeras líneas de Maggie se hablaron en "Buenas noches", el primer corto al aire en The Tracey Ullman Show, después de que la familia se durmiera. En esta ocasión, Liz Georges proporcionó la voz de Maggie.</p>
				<p>En lugar de hablar, Maggie es conocida por producir un sonido característico de "succión" de su chupete. Este efecto de sonido fue proporcionado originalmente por el creador del programa Matt Groening, para los primeros episodios de The Tracey Ullman Show, y también por Gabor Csupo. El ruido de succión se escucha en todas las apariciones de Maggie hasta la fecha, y generalmente es un archivo de audio de las grabaciones iniciales de Groening o Csupo (de los primeros episodios del programa). Además de su ruido de succión, se sabe que Maggie hace otros ruidos, como chillidos ocasionales y balbuceos. En la mayoría de los casos, estas vocalizaciones son proporcionadas por Nancy Cartwright o Yeardley Smith.</p>
			</div>
		</div>
		<div class="trn" data-trn-key="merchCont" id="merchCont" class="cont">

			<div class="merchDiv">
				<p>Camiseta Homer</p>
				<p class="GpImg">
					<img src="Images/camiseta.jpg" alt="Camiseta homer">
				</p>
			</div>
			<div class="merchDiv">
				<p>Camiseta Homer Nirvana:</p>
				<p class="GpImg">
					<img src="Images/camiseta1.jpg" alt="Camiseta homer 2">
				</p>
			</div>
			<div class="merchDiv">
				<p>Camiseta Bart:</p>
				<p class="GpImg">
					<img src="Images/camiseta2.jpg" alt="Camiseta Bart">
				</p>
			</div>
			<div class="merchDiv">
				<p>Camiseta Best Dad:</p>
				<p class="pImg">
					<img src="Images/camiseta3.jpg" alt="Camiseta Best Dad">
				</p>
			</div>
		</div>
		<div class="trn" data-trn-key="videosCont" id="videosCont" class="cont">
			<div>
				<p>Mejores Momentos:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/5RuWT11Q84A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
			<div>
				<p>Mejores Momentos 2:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/wrAoswsvHwg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
			<div>
				<p>Mejores Momentos Homer:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/19zs-sOZUn4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
			<div>
				<p>Mejores Momentos Bart:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/TUsF8QOMYrU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
			<div>
				<p>Mejores Momentos Marge:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/Gj_s-uYylPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
			<div>
				<p>Mejores Momentos Moe:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/VmzuziFEgk0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
			<div>
				<p>Mejores Momentos Sr.Burns:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/cjUmL4-i7iw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
			<div>
				<p>Mejores Momentos Ralph:</p>
				<p>
					<iframe width="80%" height="550px" src="https://www.youtube.com/embed/t9sK3mD5kzc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>



		<hr>
	</section>

	<footer>
		Todos los derechos reservados
		Ander González agonzalezro17dw@ikzubirimanteo.com
		Jon Valdés jvaldesdi17dw@ikzubirimanteo.com
	</footer>

</body>
</html>