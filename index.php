

<?php

include_once('dados/tradicional.php');
include_once('dados/amoda.php');
include_once('dados/bz_tradicional.php');
include_once('dados/bz_amoda.php');
include_once('dados/bebidas.php');
include_once('dados/complementos.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Duda's Bauru">
        <link rel="canonical" href="https://dudasbauru.com.br">
        <meta name="keywords" content="Bauru, Bauru zona sul Porto Alegre, Dudas Bauru, Tristeza, Bauru Tristeza">
        
        <!--Bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!--CSS Personalizado-->
        <link rel="stylesheet" href="css/estilo.css">
        
        <!--CSS Vegas-->
        <link rel="stylesheet" href="vegas/vegas.min.css">
        
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        
        <link rel="stylesheet" href="css/css/fontawesome.min.css">
        <title>Duda's Bauru</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--Navbar-->
   
    <nav class="navbar navbar-default navbar-fixed-top" id="top">
  	    <div class="container">
	      	<div class="topall">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle hidden" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
                        <a class="navbar-brand page-scroll" id="logo" href="#"><img src="img/duda-log2.png" class="img-responsive"></a>
		        </div>
		        <div class="pull-right hidden-xs infos-hidden">
                            <div class="navbar-infos">
		        	<ul class="list-inline pull-right social-topo">
                        <li></li>
                        <li><a href="https://www.instagram.com/dudasbauru" target="_blank"><img id="insta" src="img/instagram.png" class="img-responsive"></a></li>
                        <li><a href="https://www.facebook.com/DudasBauru" target="_blank"><img id="face" src="img/facebook.png" class="img-responsive"></a></li>
                                
                </ul>
				<div class="clearfix"></div>
				<ul class="list-inline">
                    <li>
					    <strong>Duda's Bauru - (51) 3269.2212</strong><br />
					    Rua Dr. Dias de Carvalho, 408 - Bairro Tristeza 
                    </li>
                        <li><?php
                                        
                            $d = new DateTime();
                            date_default_timezone_set('America/Sao_Paulo');
                            echo $d->format('d/m/Y H:i');?></li>
   
                        <li>
				</ul>
                </div>
		        </div>
		       	<div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right menu-look">
                            <li><a href="#?cardapio" id="" class="page-scroll scroll">Cardápio</a></li>
		            <li><a href="#horario" class="page-scroll scroll">Horário</a></li>
		            <li><a href="#contato" class="page-scroll scroll">Contato</a></li>
                            
		            <li><a href="#localizacao" class="page-scroll scroll">Localização</a></li>
		          </ul>
		        </div>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse menu-hidden">
	          <ul class="nav navbar-nav">
                <li><a href="#cardapio" class="page-scroll scroll">Cardápio</a></li>
	            <li><a href="#horario" class="page-scroll scroll">Horário</a></li>
	            <li><a href="#contato" class="page-scroll scroll">Contato</a></li>
	           	<li><a href="#como-chegar" class="page-scroll scroll">Localização</a></li>
                        <li><a href="#conheca" class="page-scroll scroll text-center">Conheça o Duda's</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>
    <!--//Navbar-->
    <!--Banner-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div id="banner">
                    
                </div>
            </div>
        </div> 
    </div>
    <!--/Banner-->
    <!--Cardápio-->
    <div class="container-fluid">
       <div id="cardapio">
           <img src="img/duda-log2.png" class="logo-card img-responsive center-block">
           <h3 class="text-center">Venha saborear nosso delicioso bauru.</h3>
           <h3 class="text-center">Conheça nosso sabor.</h3>
               <div class="col-xs-6 col-xs-12">
                    
                   <table class="table table-responsive sd center-block">
            <tr>
                <th class="nome"><h4>TRADICIONAL </h4> 
                <h5>Pão Cervejinha 120g, Alface, Tomate, Queijo Muzzarela.</h5></th>
                
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
                    <th><h4>Preço</h4></th>
                </tr>
                <?php if(count($result_5)){
            foreach($result_5 as $row) {?>
                <tr>
                    <td><?php echo $row['refri'];?></td>
                    <td><?php echo "R$".$advir = number_format($row['preco'], 2, ',','.');?></td>
                </tr>
	<?php }}?>
                   
        </table>
               </div>
            
    <div class="col-md-6">
        <div id="data2"></div>
            <table class="table  table-responsive" id="adicionais">
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
    </div>
            
    
    
    <!--//Cardapio-->
    <!--Horario--> 
    <div id="horario">
        <div class="container-fluid">
            <div class="col-md-12">
                <img  src="icon/relogio.png">
            </div>
            <div class="col-md-12">
                <h4>Horários de atendimento</h4>
                
                
                <h5>Das 11h até as 15h e das 17h até as 22h:30</h5>
                
                <h4>Tele-entrega</h4>
                
                <h5>Das 19h até as 22h:30</h5>
            </div>
       
    </div>
    </div>
    <!--/Horario-->
    <!--Contato-->
    <div id="contato">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-4 right">
                <img src="icon/msg.png"  class="hidden-xs">
            </div>
            <div class="col-md-6 col-xs-12 ">
                <h2 class="text-center">Entre em contato</h2>
                 <form id="formC" name="formContato" onsubmit="return validaForm();">
                    <div class="form-group">
                        
                            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        
                            <input type="text" name="email" id="email" placeholder="Digite seu email" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        
                        <textarea type="text" name="msg" id="mensagem" class="form-control" placeholder="Sua Mensagem"></textarea>
                        
                    </div>
                    <input type="submit" value="Enviar" id="enviarContato" name="btEnvia" class="btn btn-primary pull-left">
                </form>
                
            </div>
        </div> 
    </div>
    </div>
    <!--/contato-->
    
    <!--Conheça-->
    <div id="conheca">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Conheça o Duda's Bauru</h2>
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/dudas bauru1.jpg" class="img-box">
                </div>
                
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/bauru2.jpg" class="img-box">
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/bauru3.jpg" class="img-box">
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/dudas4.jpg" class="img-box">
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/dudas5.jpg" class="img-box">
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/dudas6.jpg" class="img-box">
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/dudas11.jpg" class="img-box">
                </div>
                <div class="col-md-3 col-xs-6">
                    <img src="img-show/dudas12.jpg" class="img-box">
                </div>
                <div class="col-md-12 col-xs-12">
                    <a class="text-uppercase text-center center-block" href="https://www.instagram.com/dudasbauru/">Veja mais em nosso instagram</a>
                </div>
            </div>
        </div>
    </div>
    <!--/Conheça-->
    <!--Como Chegar-->
    <div id="como-chegar">
    <div class="container">
        
        <div class="row">
            <div class="col-md-5 ">
                <div id="mapa" ></div>
            </div>
            <div class="col-md-6 col-xs-12 text-left">
                <div class="clearfix"></div>
                <h2>Como chegar</h2>
                 
                    <p class="text-left">Rua Dr. Dias de Carvalho, 408
                    <p class="text-left">Bairro Tristeza
                    <p class="text-left">Porto Alegre - RS
                    <p class="text-left">(51) 3269.2212
            </div>
            
        </div>
    </div>
    </div>
    <!--/Como Chegar-->
    <!--Footer-->
    <div class="container">
	<div class="row">
            <div class="col-md-12">
                <div class=" text-center">
                     <p>Aceitamos os cartões:
                     
                        <span><img src="icon/mastercard.png"></span>
                        <span><img src="icon/visa.png"></span>
                        <span><img src="icon/elo.png"></span>
                        <span><img src="icon/diners.png"></span>
                        <span><img src="icon/bradesco.png"></span>
                        
                    <p><i class="fa fa-copyright"></i><?php
                        $a = new DateTime();
                        date_default_timezone_set('America/Sao_Paulo');
                        echo $a->format('Y');?></p>
                        <p>Duda's Bauru - 3269.2212</p>
                        
                        
                    
                </div>
                
                <div class="col-md-12">
		<ul class="list-inline social-foot pull-right">
                    <li><a href="https://www.instagram.com/dudasbauru/" target="_blank" title="Instagram"><img src="img/instagram.png" class="img-responsive" alt="Instagram"></a></li>
                    <li><a href="https://www.facebook.com/dudas.bauru" target="_blank" title="Facebook"><img src="img/facebook.png" class="img-responsive" alt="Facebook"></a></li>
                    
                </ul>
                </div>
               
                    
                </div>
            </div>
	</div>
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <img src="img/aniversario.jpg" class="img-responsive center-block">
          

      
    </div>
  </div>
  </div>
</div>
    <!--/Footer-->
    <!--Voltar ao topo-->
    <a href="#top" onclick="topFunction()" id="bttop" class="btn btn-secondary btn-lg page-scroll scroll">
        Topo
    </a>
    

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vegas/vegas.min.js"></script>
     <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1mK6ItyOVlA81g0A_q6xP2IP7H0TtTv0&ampcallback=initMap;sensor=false">
  </script>
  <script src="js/valida.js"></script>
  <script src="js/funcao.js"></script>
  <!--Inicialização do mapa-->
  <script src="js/mapa.js"></script>
    <script>
    
    /*$(function(){
       $('#myModal').modal('show'); 
    });*/
      /* $('#enviarContato').click( function(e) {
		e.preventDefault();
		$('#enviarContato').attr('disabled', 'disabled');
	    $.ajax({
	        url: 'sendmsg.php',
	        type: 'post',
	       	dataType: 'html',
	        data: $('form#formC').serialize(),

	        success: function(data) {
	            $("#resultado").html(data);
	            $('#enviarContato').removeAttr('disabled');
	        }
	    });
	});*/


        
        /*$(document).ready(function(){
            $(function(){
            $.ajax({url: "cardapio.php", success: function(result){
            $("#data").html(result);
            $('#data').show(2000);
        }});
    });
            $(function(){
            $.ajax({url: "complemento.php", success: function(result){
            $("#data2").html(result);
            $('#data2').show(2000);
        }});
    });
    });*/
    //Mapa
    function initMap() {
            var myLatLng = {lat: -30.107568, lng: -51.247907};

            var map = new google.maps.Map(document.getElementById("mapa"), {
            zoom: 18,
            center: myLatLng
        });

   marker = new google.maps.Marker({
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: {lat: -30.107568, lng: -51.247907}
  });
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
        
    var $doc = $('html, body');
        $('.scroll').click(function() {
            $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
        });
		
        //vegas
        $(function() {
            $('#banner').vegas({
            slides: [
            { src: 'img/duda.jpg' },
            { src: 'img/duda1.jpg' },
            { src: 'img/dudas14.jpg' },
            { src: 'img/dudas4.jpg' },
            { src: 'img/dudas13.jpg' }
            ]
                });
            });
           //Scroll 
            var $doc = $('html, body');
        $('.scroll').click(function() {
            $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
        });
        
        window.onscroll = function() {scrollFunction();};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("bttop").style.display = "block";
    } else {
        document.getElementById("bttop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};


        
    </script>
    </body>
</html>
