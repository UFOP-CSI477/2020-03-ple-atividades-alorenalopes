function soma() {
    let n1 = document.frmDados.item1;
    let n2 = document.frmDados.item2;
    let resultado = 0;
    const nome = document.frmDados.nome.value;
    const idade = document.frmDados.idade;
    const cpf = document.frmDados.cpf;

    if (validarNumber(n1) && validarNumber(n2) && validarCPF(cpf) && validarNumber(idade)) {
        resultado = (n1.value * 10) + (n2.value * 6);
        document.getElementById("nomeLista").innerHTML = nome;
        document.getElementById("idadeLista").innerHTML = idade.value;
        document.getElementById("cpfLista").innerHTML = cpf.value;
        document.getElementById("valorLista").innerHTML = "Valor total:" + " " + "R$" + " " + resultado;
    }

}

function validarNumber(campo) {
    let number = campo.value;

    if (number < 0) {
        window.alert("Informe um valor correto!")
        campo.value = "";
        campo.focus();
        return false;
    }

    return true;
}

function validarCPF(campo) {
    let cpf = campo.value;

    if (cpf.length != 14) {
        window.alert("Informe um cpf válido!")
        campo.value = "";
        campo.focus();
        return false;
    }

    return true;
}