function enviardados() {

if (document.valida.nomeObra.value == ""||
    document.valida.nomeObra.value.length <8) {
    alert("Preencha campo 'NOME DA OBRA' corretamente!");
    document.valida.nomeObra.focus();
    return false;
}

if (document.valida.nomeAutor.value == ""||
    document.valida.nomeAutor.value.length <8) {
    alert("Preencha campo 'NOME DO AUTOR' corretamente!");
    document.valida.nomeAutor.focus();
    return false;
}

if (document.valida.dataCriacao.value == "" ||
    document.valida.dataCriacao.value.indexOf('.')== -1) {
    alert("Preencha o campo 'DATA DE CRIACAO' CORRETAMENTE!");
    Document.valida.tx_dataCriacao.focus();
    return false;
}

if (document.valida.ciade.value == ""||
    document.valida.ciade.value.length <8) {
    alert("Preencha campo 'CIDADE EM QUE NASCEU' corretamente!");
    document.valida.tx_ciade.focus();
    return false;
}

if (document.valida.identificaoObra.value == ""||
    document.valida.identificaoObra.value.length <8) {
    alert("Preencha campo 'IDENTIFICACAO DA OBRA' corretamente!");
    document.valida.tx_identificaoObra.focus();
    return false;
}

if (document.valida.cpf.value == "" ||
    document.valida.cpf.value.indexOf('.')== -1) {
    alert("Preencha o 'CPF' corretamente!");
    document.valida.tx_cpf.focus();
    return false;
}

if (document.valida.email.value == "" ||
    document.valida.email.value.indexOf('@')== -1 ||     
    document.valida.email.value.indexOf('.')== -1) {
    alert("Preencha o 'E-MAIL' corretamente!");
    document.valida.tx_email.focus();
    return false;
}

return true
}

