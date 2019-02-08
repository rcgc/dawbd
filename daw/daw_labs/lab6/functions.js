var bandera=0;

function fun0(){
	
}

function fun1(){
	

	if(bandera == 0){
		document.getElementById("myDIV").style.position = "absolute";	
		bandera=1;	
	}else{
		
		document.getElementById("myDIV").style.position = "initial";
		bandera=0;
	}
	
}

function fun2(){
	document.getElementById("myP").style.fontStyle = "italic";
}

function fun3(){
	document.getElementById("myP").style.fontStyle = "normal";	
}

function ocultar(){
	document.getElementById("parr").style.visibility = "hidden";
}

function mostrar(){
	document.getElementById("parr").style.visibility = "visible";
}

function mostrar_ayuda(){
	document.getElementById("aux").innerHTML = "Texto alternativo que mostrará sugerencias al usuario sobre como llenar este campo de texto, haz doble clic sobre el campo de texto para ocultarlo.";
}

function ocultar_ayuda(){
	document.getElementById("aux").innerHTML = " ";
}

function mensaje(){
	setTimeout(function(){ alert("Hello"); }, 1000);
}