<?php
include "Sevicos/MensagemDeErro.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="Width=device-width, initial-scale=1">
    <link rel="stylesheet" href="beleza/estyle.css">
    <title>Formulário cadastro de clientes</title>
</head>

<body>

    <form action="script.php" method="post">
        <div class="mensgeTelaErro">
            <?php
            removerMensagemSucesso();
            
            $MensagemErro = obterMensagemErro();
            if (!empty($MensagemErro)) {
                echo ($MensagemErro);
            }
            removerMensagemErro();
            ?>
        </div>

        <div class="mensageTelaSucesso"> 
            <?php
            
            removerMensagemSucesso();
            $MensagemSucesso = obterMensagemSucesso();
            if (!empty($MensagemSucesso)) {
                echo $MensagemSucesso;
            }
            removerMensagemErro();
            ?>
         </div> 
    </br></br></br>
        <!-- Dados pessoas -->
        <fieldset class="lineDadosPessoas">
         <legend class="dadosClente"> Dados Pessoas </legend>
         <table cellspacing="20">
         <tr>
             <td>
              <label class="nome"  for="nome"><p>Nome:</p></label> 
             </td>
             <td align="left">
               <input class="nomePrimeiro" type="text" name="nome" size="38" maxlength="40" id="nome">
             </td>
         </tr>
         <tr>
             <td>
             <label ><p>Nascimento:</p></label>
             </td>
             <td aling="left">
             <input class="NascInput" type="date" name="nascimento" id="">
             <!-- <input type="text" name="dia" size="2" maxlength="2" value="dd">
             <input type="text" name="mes" size="2" maxlength="2" value="mm">
             <input type="text" name="ano" size="4" maxlength="4" value="aaaa"> -->
             </td>
             <td>
             <label  for="email"><p class="emaiTele">E-mail:</p></label>
             </td>
             <td aling="left">
               <input class="emailInput" type="email" name="email">
             </td>
         </tr>
         <tr> 
          <td>
          <label for="rg"><p>GR:</p></label>
          </td>
          <td align="left">
          <input class="rgInput" type="text" name="rg" \ pattern="\d{3}\.\d{3}\.\d{3}" \ title="O RG deve seguir essa ordem: XXX.XXX.XXX">
          </td>
          <td>
              <table class="descCampos" for="tel"><p class="emaiTele">Telefone:</p></table>
          </td>
          <td align="left">
                <input class="telefoInput" type="text" name="tel" id="" \ pattern="(\d{2}\)\d{5}-\{4}" title="Digite seu numero dessa forma:(XX)XXXXX-XXXX">
          </td>
         </tr>
         <tr>
             <td>
                 <label ><p>CPF:</p></label>
             </td>
                <td align="lefit">
                <input class="cpfInput" type="text" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite o CPF dessa Formar: XXX.XXX.XXX-XX"> 
             </td>
         </tr>
         </table>



         
        </fieldset> <br/>


        <!-- ENDEREÇO -->
        <fieldset class="lineDadosPessoas">
            <legend class="dadosClente">Endereço</legend>
            <table cellspacing="15">
                <tr>
                    <td>
                        <table  for="rua"><p>Rua</p></table>
                    </td>
                    <td aling="left">
                        <input class="ruaInput" type="text" name="rua" size="9" id="">
                    </td>
                    <td>
                        <table  for="numero"> <p>Numero:</p> </table>
                    </td>
                    <td aling="left">
                        <input class="numeroImput" type="text" name="numero" size="4" id="" maxlength="5">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label  for="bairro"><p>Bairro:</p></label>
                    </td>
                    <td aling="left">
                        <input class="bairroInput" type="text" name="bairro" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label  for="cidade"><p>Cidade:</p></label>
                    </td>
                    <td aling="left">
                        <input class="cidadeInput" type="text" name="cidade" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label  for="cep"><p>CEP:</p></label>
                    </td>
                    <td>
                        <input class="cepInput" type="text" name="cep" \ pattern="\d{5}-\d{3}" title="Digite assim o seu CEP: XXXXX-XXX"> <!-- <input type="text" name="cep2" size="3" maxlength="3">-->
                    </td>
                </tr>
            </table>
        </fieldset><br />
        <input id="enBtn" type="submit" value="Enviar">
        <input id="limBtn" type="reset" value="Limpar">


    </form>
</body>

</html>