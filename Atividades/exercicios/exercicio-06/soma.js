function soma() {
    let n1 = document.frmDados.item1;
    let n2 = document.frmDados.item2;
    const idade = document.frmDados.idade;
    const cpf = document.frmDados.cpf;

    if(validarNumber(n1) && validarNumber(n2) && validarCPF(cpf) && validarNumber(idade)){
        return true;
    }

    return false;
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