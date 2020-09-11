function preencherEndereco(data) {

    const nome = document.frmDados.nome.value;
    const cpf = document.frmDados.cpf;
    const cep = data.cep;
    const cidade = data.cidade;
    const bairro = data.bairro;
    const rua = data.logradouro;
    const estado = data.estado;

    if (validarCPF(cpf)) {
        document.getElementById("nomeLista").innerHTML = nome;
        document.getElementById("cpfLista").innerHTML = cpf.value;
        document.getElementById("enderecoLista").innerHTML = rua;
        document.getElementById("bairroLista").innerHTML = "Bairro" + " " + bairro;
        document.getElementById("cidadeLista").innerHTML = cidade + " " + " , " + estado;
        document.getElementById("cepLista").innerHTML = cep;

    }

}


function carregarEndereco() {
    const cep_variavel = document.frmDados.cep.value
    fetch(`https://api.postmon.com.br/v1/cep/${cep_variavel}`)
        .then(response => response.json())
        .then(data => preencherEndereco(data))
        .catch(error => console.error(error))
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