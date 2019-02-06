



function add1(){
	document.getElementById("campo1").value++;
}

function add2(){
	document.getElementById("campo2").value++;
}

function add3(){
	document.getElementById("campo3").value++;
}

function rest1(){
	if(document.getElementById("campo1").value > 0){
		document.getElementById("campo1").value--;		
	}
	
}

function rest2(){
	if(document.getElementById("campo2").value >0){
		document.getElementById("campo2").value--;		
	}
}

function rest3(){
	if(document.getElementById("campo3").value >0){
		document.getElementById("campo3").value--;
	}
}

function calculate_total(){
	var book1 = document.getElementById("campo1").value;
	var book2 = document.getElementById("campo2").value;
	var book3 = document.getElementById("campo3").value;

	var b1 = 0;
	b1 = parseInt(book1);

	var b2 = 0; 
	b2 = parseInt(book2);

	var b3 = 0;
	b3 = parseInt(book3);

	var total = (b1*464) + (b2*2320) + (b3*4292);
	document.getElementById("total").value = "$" +total;
}