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


	document.onselectionchange = function(){
		traducir();
	};
});

// Submenu temporadas
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


function traducir(){
	var idioma = document.getElementById('idiomas').value;
	var translator = $('body').translate({lang: idioma, t: dict});
}