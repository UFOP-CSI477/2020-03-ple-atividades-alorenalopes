function calcular_imc(){

    const peso = document.getElementById("input_peso").value;
    const altura = document.getElementById("input_altura").value;

    const imc = (peso / (altura*altura));
    const peso_ideal1 = (18.5*(altura*altura)).toFixed(3);
    const peso_ideal2 = (24.9*(altura*altura)).toFixed(3);

    if(imc < 18.5){
        gera_resultado("Subnutrição", 1, peso_ideal1, peso_ideal2);
    }
    if(imc >= 18.5 && imc <= 24.9){
        gera_resultado("Peso saudável", 0, peso_ideal1, peso_ideal2);
    }
    if(imc >= 25 && imc <= 29.9 ){
        gera_resultado("Sobrepeso", 1, peso_ideal1, peso_ideal2);
    }
    if(imc >= 30 &&  imc <= 34.5){
        gera_resultado("Obesidade grau 1", 1, peso_ideal1, peso_ideal2);
    }
    if(imc >= 35 && imc <= 39.9){
        gera_resultado("Obesidade grau 2", 1, peso_ideal1, peso_ideal2);
    }
    if(imc >= 40){
        gera_resultado("Obesidade grau 3", 1, peso_ideal1, peso_ideal2);
    }

}

function gera_resultado(mensagem, status, peso1, peso2){
    const div_alerta = document.getElementById("alertas");

    if(status == 0){
        div_alerta.innerHTML = `<div class="alert alert-success" role="alert">${mensagem} </div>`;
    }else{
        div_alerta.innerHTML = 
        `<div class="alert alert-danger" role="alert">
            ${mensagem}
        </div>
        <div class="alert alert-warning" role="alert">
            Seu peso ideal é entre 
                <a class="alert-link">${peso1} kg</a> e 
                <a class="alert-link">${peso2} kg</a>
        </div>`;
    }
}