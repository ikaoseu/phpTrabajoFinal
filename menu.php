<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <div style=" background-color: #2c3e50;">      
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3e50; margin-left: 20%; margin-right: 20%; height: 80px;">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" href="menu.php" tabindex="-1" aria-disabled="true">La Tienda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Packs</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      nosotros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="menu.php?mostrar=1">camisetas</a>
                        <a class="dropdown-item" href="menu.php?mostrar=2">sudaderas</a>
                        <a class="dropdown-item" href="menu.php?mostrar=3">zapatillas</a>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </nav>
        </div>  
        
        
        
        
        
        
        
        
        <?php
            if(isset($_GET['mostrar'])){
                
            }else{
                if($_GET['mostrar'] == 1){
                    
                }
                if($_GET['mostrar'] == 2){
                    
                }
                if($_GET['mostrar'] == 3){
                    
                }
            }
                
        ?>
        <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
