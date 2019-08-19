<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

include_once('dados/tradicional.php');
include_once('dados/amoda.php');
include_once('dados/bz_tradicional.php');
include_once('dados/bz_amoda.php');
include_once('dados/bebidas.php');

ini_set('default_charset','utf8');
 ?>
<html>
    <head>
        <meta charset="UTF-8">
                <!--Bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
       
        <title></title>
    </head>
    <body>
        <div class="container">
    
            <div class="col-md-6">
                
        <table class="table table-responsive table-hover">
            <tr>
                <th><h4>Tradicional: </h4> <h5>Pão Cervejinha 120g, Alface, Tomate, Queijo Muzzarela.</h5></th>
                
                <th><h4>Preço</h4></th>
            </tr>
            <?php  if ( count($result) ) { 
                        foreach($result as $row) {?>
                <tr>
                    <td><?php echo $row['sabor'];?></td>
                    <td><?php echo "    R$".$advir = number_format($row['preco'], 2, ',', '.');?></td>
                </tr>
            <?php } }?>
            <tr>
                <th><h4>A Moda da Casa: </h4><h5>Pão Cervejinha 120g, Alface, Tomate, Cebolinha Frita na Chapa, Molho de Chapa(segredo da casa), Mostarda, Katchup, Maionese e Queijo Muzzarela.</h5></th>
                <th><h4>Preço</h4></th>
            </tr>
            <?php  if ( count($result_1) ) { 
                        foreach($result_1  as $row) {?>
                <tr>
                    <td><?php echo $row['sabor'];?></td>
                    <td><?php echo "R$".$advir = number_format($row['preco'],2, ',','.');?></td>
                </tr>
                <?php } 
                
                    }?>	
            <tr>
                <th><h4>Bauruzito Tradicional: </h4><h5>Pão Cervejinha 50g, Alface, Tomate e Queijo Muzzarela</h5></th>
                <th><h4>Preço</h4></th>
            </tr>
             <?php  if ( count($result_2) ) { 
                        foreach($result_2 as $row) {?>
                <tr>
                  <td><?php echo $row['sabor'];?></td>
                  <td><?php echo "R$".$advir = number_format($row['preco'], 2,',','.');?></td>
                </tr>
                <?php } 
                
                    }?>	
            <tr>
                <th><h4>Bauruzito À Moda da Casa: </h4><h5>Pão Cervejinha 50g, Alface, Tomate, Cebolinha Frita na Chapa, Molho de Chapa(segredo da casa), Mostarda, Katchup, Maionese e Queijo Muzzarela</h5></th>
                <th><h4>Preço</h4></th>
            </tr>
            <?php  if ( count($result_3) ) { 
                        foreach($result_3 as $row) {?>
                <tr>
                    <td><?php echo $row['sabor'];?></td>
                  <td><?php echo "R$".$advir = number_format($row['preco'], 2, ',','.');?></td>
                </tr>
                <?php } 
                
               }?>
                  <tr>
                        <th>Bebidas</th>
		<tr>
                    <th><h4>Cerveja</h4></th>
                    <th><h4>Preço</h4></th>
		</tr>
	<?php if(count($result_4)){
            foreach($result_4 as $row) {?>
                <tr>
                    <td><?php echo $row['cerveja'];?></td>
                    <td><?php echo "R$".$advir = number_format($row['preco'], 2, ',','.');?></td>
                </tr>
	<?php }}?>
                <tr>
                    <th><h4>Refrigerantes</th>
                    <th>Preço</th>
                </tr>
                <?php if(count($result_5)){
            foreach($result_5 as $row) {?>
                <tr>
                    <td><?php echo $row['refri'];?></td>
                    <td><?php echo "R$".$advir = number_format($row['preco'], 2, ',','.');?></td>
                </tr>
	<?php }}?>
                <tr>
                
                </tr>
                <tr>   
                    <td>
                        Aceitamos os cartões: 
                        <span><img src="icon/mastercard.png"></span>
                        <span><img src="icon/visa.png"></li></span>
                        <span><img src="icon/elo.png"></span>
                        </ul>
                    </td>
                </tr>    
        </table>
        <button type="button" id="fechar" class="btn btn-info">Fechar Cardápio</button>
            </div>
            
        </div>
        
  

        
     <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
              $(document).ready(function(){
    $('#fechar').click(function(){

       $('#data').hide(2000);
    });
});
    </script>
    </body>
</html>
