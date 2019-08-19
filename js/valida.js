 function validaForm(){
 
if(document.formContato.nome.value==="" || document.dados.tx_nome.value.length < 3)
{
alert( "Preencha campo NOME corretamente!" );
document.formContato.nome.focus();
return false;
}
 
 
if( document.formContato.email.value==="" || document.formContato.email.value.indexOf('@')===-1 || document.formContato.email.value.indexOf('.')===-1 )
{
alert( "Preencha campo E-MAIL corretamente!" );
document.formContato.email.focus();
return false;
}
 
if (document.formContato.mensagem.value==="")
{
alert( "Preencha o campo MENSAGEM!" );
document.formContato.mensagem.focus();
return false;
}
 
if (document.formContato.mensagem.value.length < 50 )
{
alert( "É necessario preencher o campo MENSAGEM com mais de 50 caracteres!" );
document.formContato.mensagem.focus();
return false;
}
 
return true;
}
