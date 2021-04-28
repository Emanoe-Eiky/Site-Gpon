<?php
session_start();

function setarMensagemErro(string $Mensagem): void
{
    unset($_SESSION['Mensagem-de-erro']);
    unset($_SESSION['Mensagem-de-sucesso']);
    $_SESSION['Mensagem-de-erro'] = $Mensagem;
}
function obterMensagemErro(): ?string
{
    removerMensagemSucesso();
    if (isset($_SESSION['Mensagem-de-erro'])) {
        return $_SESSION['Mensagem-de-erro'];
    }
    return null;
}
function setarMensagemSucesso(string $Mensagem): void
{
    unset($_SESSION['Mensagem-de-sucesso']);
    unset($_SESSION['Mensagem-de-erro']);
    $_SESSION['Mensagem-de-sucesso'] = $Mensagem;
}
function obterMensagemSucesso(): ?string
{
   
    if (isset($_SESSION['Mensagem-de-sucesso'])) {
        return $_SESSION['Mensagem-de-sucesso'];
    }
    return null;
}


function removerMensagemErro () : void {
    if(isset($_SESSION['Mensagem-de-erro'])){
         unset($_SESSION['Mensagem-de-erro']);
         unset($_SESSION['Mensagem-de-Erro']);}
}
function removerMensagemSucesso () : void{
    if(isset($_SESSION['Mensagem-de-Sucesso']))
        unset($_SESSION['Mensagem-de-Sucesso']);}






