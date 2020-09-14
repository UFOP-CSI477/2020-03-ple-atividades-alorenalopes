var largadas = new Array(6);
var competidores = new Array(6);
var tempos = new Array(6);
var temposordenados = new Array(6);
var cont = 0;

function inserir() {
    if (cont <= 5) {
        largadas[cont] = document.getElementById("input_largada").value;
        competidores[cont] = document.getElementById("input_competidor").value;
        tempos[cont] = document.getElementById("input_tempo").value;

        var table = document.getElementById("resultados");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = largadas[cont];
        cell2.innerHTML = competidores[cont];
        cell3.innerHTML = tempos[cont];

        cont++;

        document.getElementById("input_largada").value = "";
        document.getElementById("input_competidor").value = "";
        document.getElementById("input_tempo").value = "";

        if(cont == 6) {
            setTimeout(()=>{window.alert("Número máximo de competidores permitido!")}, 500);
            setTimeout(calcular_vencedores , 2000);    
        }
    } 
}


function calcular_vencedores() {

    temposordenados = tempos.slice();
    temposordenados.sort(sortfunction);
    var table = document.getElementById("resultados");
        table.innerHTML = "";

    for (var i = 0; i <= 5; i++) {
        var numero = temposordenados[i]

        var posicao = tempos.indexOf(numero);
        var row = table.insertRow(-1);
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        cell0.innerHTML = largadas[posicao];
        cell1.innerHTML = competidores[posicao];
        cell2.innerHTML = tempos[posicao];
        cell3.innerHTML = i + 1;
        if (i == 0 || i == 1) {
            cell4.innerHTML = "Vencedor(a)!";
        } else {
            cell4.innerHTML = "-";
        }
    }

}

function sortfunction(a, b) {
    return (a - b)
}