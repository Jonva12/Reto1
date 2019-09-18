$(document).ready(function () {
	var seccion = document.getElementById("Contenido");

	document.getElementById("temporadas").addEventListener("click", function(){
	  	document.getElementById('temporadasCont').style.display = 'block';
	  	document.getElementById('descripcionCont').style.display = 'none';
	  	document.getElementById('repartoCont').style.display = 'none';
	  	document.getElementById('merchCont').style.display = 'none';
	  	document.getElementById('videosCont').style.display = 'none';
	});

	document.getElementById("descripcion").addEventListener("click", function(){
	  	document.getElementById('temporadasCont').style.display = 'none';
	  	document.getElementById('descripcionCont').style.display = 'block';
	  	document.getElementById('repartoCont').style.display = 'none';
	  	document.getElementById('merchCont').style.display = 'none';
	  	document.getElementById('videosCont').style.display = 'none';
	});

	document.getElementById("reparto").addEventListener("click", function(){
	  	document.getElementById('temporadasCont').style.display = 'none';
	  	document.getElementById('descripcionCont').style.display = 'none';
	  	document.getElementById('repartoCont').style.display = 'block';
	  	document.getElementById('merchCont').style.display = 'none';
	  	document.getElementById('videosCont').style.display = 'none';
	});

	document.getElementById("merch").addEventListener("click", function(){
	  	document.getElementById('temporadasCont').style.display = 'none';
	  	document.getElementById('descripcionCont').style.display = 'none';
	  	document.getElementById('repartoCont').style.display = 'none';
	  	document.getElementById('merchCont').style.display = 'block';
	  	document.getElementById('videosCont').style.display = 'none';
	});

	document.getElementById("videos").addEventListener("click", function(){
	  	document.getElementById('temporadasCont').style.display = 'none';
	  	document.getElementById('descripcionCont').style.display = 'none';
	  	document.getElementById('repartoCont').style.display = 'none';
	  	document.getElementById('merchCont').style.display = 'none';
	  	document.getElementById('videosCont').style.display = 'block';
	});

});