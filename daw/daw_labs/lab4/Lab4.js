function table_function() {
	let entrada = prompt("Numero limite: ");
	
	if(entrada>=1){
		document.write("<table border='1'>");
		document.write("<tr>");
		document.write("<th>Number</th> <th>Squared</th> <th>Cubed</th>");
		document.write("</tr>");

		for(var i =1; i<=entrada; i++){
			document.write("<tr>");
			document.write("<td>"+i+"</td>" + "<td>"+i*i+"</td>" + "<td>"+Math.pow(i,3)+"</td>");
			document.write("</tr>");
		}document.write("</table>");
	}else if(entrada < 0){
		alert("No escribir negativos");
	}else{
		alert("No campos vacios ni letras");
	}
}

function prompt_function(){
	let entrada = prompt("Numero a adivinar: ");

	let num1 = Math.floor(Math.random()*10);
	let num2 = Math.floor(Math.random()*10);
	let suma = num1 + num2;

	if(entrada == suma){
		document.write("Has acertado");
		document.write("<br>"+"Real: "+ suma);
		document.write("<br>"+"Ingresado: "+ entrada);
	}else{
		document.write("No has acertado");
		document.write("<br>"+"Real: "+ suma);
		document.write("<br>"+"Ingresado: "+ entrada);
	}
}

function array_values(){
	let arr = new Array();
	let mayores = 0;
	let menores = 0;
	let zeros   = 0;

	for(let i =0; i<10; i++){
		arr[i]= Math.floor((Math.random()*10)-5);
		document.write(arr[i]+" ");

		if(arr[i]<0){
			menores+=1;
		}else if(arr[i]>0){
			mayores+=1;
		}else{
			zeros+=1;
		}
	}
	document.write("<br>Menores a 0: " +menores);
	document.write("<br>Mayores a 0: " +mayores);
	document.write("<br>Iguales a 0: " +zeros);
}

function matrix_prom(){
	let matrix = [];
	let acum = 0;
	let arr = new Array(10);

	for(let i=0; i<10; i++) {
    	matrix[i] = [];
    	for(let j=0; j<10; j++) {
        	matrix[i][j] = Math.floor(Math.random()*10);
        	acum+=matrix[i][j];
        	document.write(matrix[i][j]+" ");
    	}document.write("<br>");
    	arr[i]=acum/10;
	}document.write("<br>");
	for(i=0; i<10; i++){
		document.write(arr[i]+" ");
	}
}

function invert_digits(){
	let x = prompt("Dame una cantidad positiva: ");
	if(x>=0){
		let y = x.toString();
		let z = y.split("").reverse().join("");
		let aa = Number(z);
		document.write("Cifras invertidas: "+aa);			
	}else{
		alert("Cantidad y/o caracter no permitida");
	}
}

function problem_solving(){
	document.write("Determinar si dada la medida de 3 segmentos es posible que estos formen un triangulo: <br>");
	var a = prompt("Valor de a: ");
	var b = prompt("Valor de b: ");
	var c = prompt("Valor de c: ");


	class Triangle{
		constructor(aa, bb, cc){
			this.a = a;
			this.b = b;
			this.c = c;
		}
		mostrar(){
			document.write("<br>Valor de a: "+a);
			document.write("<br>Valor de b: "+b);
			document.write("<br>Valor de c: "+c);
		}
		evaluar(){
			if((+a + +b > c) && (+b + +c > a) && (+a + +c > b)){
				document.write("<br><br>Si es posible formar un triangulo de lados: "+a+", "+b+" y "+c);
			}else{
				document.write("<br><br>No es posible formar un triangulo de lados: "+a+", "+b+" y "+c);
			}	
		}
	}

	let triangulo = new Triangle(a,b,c);
	triangulo.mostrar();
	triangulo.evaluar();
}