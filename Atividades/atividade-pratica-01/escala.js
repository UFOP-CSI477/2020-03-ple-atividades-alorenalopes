function calcular_escala() {

    const a = document.getElementById("input_amplitude").value;
    const t = document.getElementById("input_tempo").value;

    const m = (Math.log10(a) + (3 * (Math.log10(8 * t))) - 2.92).toFixed(2);

    if (m < 3.5) {
        gera_resultado("Geralmente não sentido, mas gravado.", 0, m);
    }
    if (m >= 3.5 && m <= 5.4) {
        gera_resultado("Às vezes sentido, mas raramente causa danos.", 0, m);
    }
    if (m >= 5.5 && m <= 6) {
        gera_resultado("No máximo causa pequenos danos a prédios bem construídos, mas pode danificar casas mal construídas na região. ", 1, m);
    }
    if (m >= 6.1 && m <= 6.9) {
        gera_resultado("Pode ser destrutivo em áreas em torno de até 100km do epicentro.", 1, m);
    }
    if (m >= 7 && m <= 7.9) {
        gera_resultado("Grande terremoto. Pode causar sérios danos em uma grande faixa.", 1, m);
    }
    if (m >= 8) {
        gera_resultado("Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros.", 1, m);
    }

}

function gera_resultado(mensagem, status, m) {
    const div_alerta = document.getElementById("alertas");

    if (status == 0) {
        div_alerta.innerHTML = `
        <div class="alert alert-warning" role="alert">
        Magnitude:
            <a class="alert-link">${m}</a>
        </div>
        <div class="alert alert-success" role="alert">${mensagem} </div>`;
    } else {
        div_alerta.innerHTML =
        `<div class="alert alert-warning" role="alert">
            Magnitude:
                <a class="alert-link">${m}</a>
        </div>
        <div class="alert alert-danger" role="alert">
            ${mensagem}
        </div>`;
    }
}