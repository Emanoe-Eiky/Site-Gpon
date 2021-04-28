<?php
function  validaNome(string $nome): bool
{
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio');
        return false;
    } else if (strlen($nome) < 6) {
        setarMensagemErro('O nome deve conter mais que 3 caractere! Por favor coloque seu nome completo.');
        return false;
    } else if (is_numeric($nome)) {
        setarMensagemErro('Seu nome não pode ser um numero.');
        return false;
    }
    return true;
}


function validaNumero(string $numero) : bool
{
    if (!is_numeric($numero)) {
        setarMensagemErro("Digete um numero valido para o numero da casa");
        return false;
    }
    return true;
}


function validaNascimento(string $nascimento): bool
{
    if (empty($nascimento)) {
        setarMensagemErro('Você esqueceu de preenche sua idade.');
        return false;
    }
    return true;
}


function validaRua (string $rua) : bool
{
    if (empty($rua)) {
        setarMensagemErro('O nome da sua Rua não pode ser vazio');
        return false;
    } else if (strlen($rua) < 3) {
        setarMensagemErro('O nome da sua Rua deve conter mais que 3 caractere! Por favor tente .');
        return false;
    } else if (is_numeric($rua)) {
        setarMensagemErro('A Rua não pode ser um numero.');
        return false;
    }

    return true;
}





function validaCidade (string $cidade)
{
    if (empty($cidade)){
        setarMensagemErro('Onome da cidade não pode ser vazio');
        return false;
    }else if (strlen($cidade) < 3){
        setarMensagemErro('O nome deve comter mais que 3 caractere! por favor tente novamente');
        return false;
    }else if (is_numeric($cidade)){
        setarMensagemErro('O nome da cidade não pode ser umm numero');
        return false;
    }
    return true;
}


function validaBairro (string $bairro)
{
    if (empty($bairro)){
        setarMensagemErro('Onome da bairro não pode ser vazio');
        return false;
    }else if (strlen($bairro) < 3){
        setarMensagemErro('O nome deve comter mais que 3 caractere! por favor tente novamente');
        return false;
    }else if (is_numeric($bairro)){
        setarMensagemErro('O nome do bairro não pode ser umm numero');
        return false;
    }
    return true;
}