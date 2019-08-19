<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="vegas/vegas.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div id="foto" class="center-block">
            
            </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        
        <?php
        
        ?>
        <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="vegas/vegas.min.js" type="text/javascript"></script>
        <script>
        $(function() {
            $('#foto').vegas({
            slides: [
            { src: 'img/dudas10.jpg' },
            { src: 'img/dudas11.jpg' },
            { src: 'img/dudas12.jpg' }
            ]
                });
            });
        </script>
    </body>
</html>
