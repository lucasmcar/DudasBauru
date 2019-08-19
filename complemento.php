<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once('dados/complementos.php');

ini_set('default_charset','utf8');
?>

<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-6">
       	<table class="table table-hover" id="cerveja">
            
		<tr>
                    <th><h4>Adicionais</h4></th>
                    <th><h4>Preço</h4></th>
		</tr>
	<?php if(count($result_6)){
            foreach($result_6 as $row) {?>
                <tr>
                    <td><?php echo $row['sabor'];?></td>
                    <td><?php echo "R$".$advir = number_format($row['preco'], 2, ',','.');?></td>
                </tr>
	<?php }}?>
               
	</table>
        
            </div>
        </div>
          <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        
    
    
    
              $(document).ready(function(){
    $('#fechar').click(function(){

       $('#data2').hide(2000);
    });
});
    </script>
    </body>
</html>

