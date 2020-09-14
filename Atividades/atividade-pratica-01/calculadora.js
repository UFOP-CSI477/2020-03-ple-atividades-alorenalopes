var expressao_total = "";
var display_numbers = document.getElementById("display_numbers");
var display_results = document.getElementById("display_results");

function button_numbers(num){
    display_numbers.innerHTML += `${num}`;
    expressao_total = expressao_total + `${num}`;
}

function buttonigual(){
    display_results.innerHTML = eval(expressao_total.toString());
}

function buttonlimpar(){
    display_results.innerHTML = "";
    display_numbers.innerHTML = "";
}