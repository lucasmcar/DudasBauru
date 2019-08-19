<html>
    <body>
        <head>
            <link rel="stylesheet" href="css/bootstrap.min.css">
        </head>        
          
<?php if (isset($_POST['btEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
	$emailremetente = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)); 
	$mensagem = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
        $emaildestinatario = 'eduardohomar@terra.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
	//====================================================
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = 'Formulário de Contato
Nome: '.$nome.'
E-Mail: '.$emailremetente.'
Mensagem: '.$mensagem.'
';
?>

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
<?php
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $mensagemHTML, $headers, $mensagem); 
?>
 <?php if($envio){ ?>
<span class="alert alert-succes"></span>Enviado com sucesso!

<?php }else{ ?>
  echo "Mensagem não enviada!"; 
<?php } }?>
    </body>
</html>

  
       
 