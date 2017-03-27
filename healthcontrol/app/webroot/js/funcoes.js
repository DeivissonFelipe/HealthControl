function calcularImc(){
	var h = parseFloat(document.imc.altura.value);
	var p = parseFloat(document.imc.peso.value);

	var result = (p / Math.pow(h,2)).toFixed(2);
	
	if(result < 18.5){
		// abaixo do peso
		alert("Subnutrição");
	}
	else if (result < 24.9){
		// peso ideal
		alert("Peso saudável");
	}
	else if (result < 29.9){
		//levemente acima do peso
		alert("SobrePeso");
	}
	else if (result < 34.9){
		//obesidade grau I
		alert("Obesidade grau 1");
	}
	else if (result < 39.9){
		//obesidade grau II
		alert("Obesidade grau 2");
	}
	else{
		// obesidade grau III
		alert("Obesidade grau 3");
	}
	var pesoIdeal1 = (18.6 * Math.pow(h,2)).toFixed(2);
	var pesoIdeal2 = (24.9 * Math.pow(h,2)).toFixed(2);

	document.imc.resultado.value = result;
	document.imc.pesoIdeal1.value = pesoIdeal1;
	document.imc.pesoIdeal2.value = pesoIdeal2;
}

function validar() {
	if(document.getElementById('peso').value == null || document.getElementById('peso').value == ""){
		alert("O campo peso é obrigatório. Por favor digite-o para prosseguir com o cálculo");
		document.getElementById('peso').focus();
		return false;
	}
	else if(isNaN(document.getElementById('peso').value)){
		alert("Campo Inválido");
		document.getElementById('peso').focus();
		return false;
	}

	if(document.getElementById('altura').value == null || document.getElementById('altura').value == ""){
		alert("O campo altura é obrigatório. Por favor digite-o para prosseguir com o cálculo");
		document.getElementById('altura').focus();
		return false;
	}
	else if(isNaN(document.getElementById('altura').value)){
		alert("Campo Inválido");
		document.getElementById('altura').focus();
		return false;
	}

	calcularImc();
}
	