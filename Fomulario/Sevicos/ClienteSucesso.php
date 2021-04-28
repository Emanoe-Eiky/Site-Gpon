<?php
function MensagemConfirma (array $param ) : ?string
    
{
    if (validaCampos($param)) 
    {
        
        removerMensagemErro();
        removerMensagemSucesso();
        setarMensagemSucesso('Cadastro feito com sucesso!');
        echo ('Cadastro feito com Sucesso!');
        $para = "eikymanoel09@gmail.com";
        $assunto = "Formulário de requerimento de conta";
        $corpo = "Nome: " .$param['nome']. "\r\n" . 
                 "Data nascimento: " .$param['nascimento']. "\r\n" . 
                 "E-mail:" .$param['email'] . "\r\n" .
                 "Telefone:" .$param['tel'] . "\r\n".
                 "RG: " .$param['rg']. "\r\n"."CPF: ".$param['cpf'] . "\r\n". 
                 "Rua: " .$param['rua'] . "\r\n". "Numero da casa: ".$param['numero'] . "\r\n" . 
                 "Bairro: ".$param['bairro'] . "\r\n" . 
                 "Cidade: ".$param['cidade']. "\r\n" . 
                 "CEP: ".$param['cep']. "\r\n". 
        $headers = "From: ". $param['email']. "\r\n". 
                    "X=Maile:PHP".phpversion();
        mail($para, $assunto, $corpo, $headers);
    }
    removerMensagemSucesso();
    return obterMensagemErro();
}

function validaCampos(array $param){
    var_dump($param['bairro']);
    return ((validaNome( $param['nome']) && validaNumero( $param['numero']) &&
             validaNascimento( $param['nascimento']) && validaRua( $param['rua']) 
             && validaCidade ( $param['cidade']) && validaBairro( $param['bairro'] )));
  }