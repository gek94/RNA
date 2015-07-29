<?php
        session_start();
        include("funciones.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blanco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- estilos -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">

</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<table class="table table-bordered">
  <tr class="info">
    <td>
        <h3 class="text-info"><center><img src="img/redneuronal.jpg" class="img-circle" width="80" height="80"> 
        ZONA DE RECONOCIMIENTO<center/></h3>
    </td>
  </tr>
</table>
   <div class="modal-body">  
        <div class="span3">
        <h3 align="center">Zona de dibujo</h3>
            <?php 
                include("zonadedibujo.php");
             ?>        
        </div> 
        <br><br>
        <div class="span9">
           <pre> 
           <table class="table table-bordered">
             <tr>
                <td>
                    <h3 class="text-info"><center>CARACTER MAS PROBABLE: <center/></h3>
                    <?php 
                        if (isset($_SESSION['data'])){
                            $data = $_SESSION['data'];
                            $b = fbias();
                            $sigmoide = fsigmoide($data,$b);
                            $no1 = fno1();
                            $no2 = fno2();
                            $no3 = fno3();
                            $no4 = fno4();
                            $r = array();
                            $r[0] = fsalidaN($sigmoide,$no1,-1.14479);
                            $r[1] = fsalidaN($sigmoide,$no2,-1.12719);
                            $r[2] = fsalidaN($sigmoide,$no3,0.84303);
                            $r[3] = fsalidaN($sigmoide,$no4,0.33672);
                            $w = array();
                            $w = fpesosCapSalida();
                            // $salida = array();
                            $salida = fsalidaFinal($w,$r);
                            for ($i=0; $i < 10 ; $i++) { 
                                if($salida[$i] == 1){
                                    switch ($i) {
                                        case '1':
                                            echo '<h3 class="span"><p style="margin-left:14em">UNO</p></h3>';
                                            break;
                                        case '2':
                                            echo '<h3 class="span"><p style="margin-left:14em">DOS</p></h3>';
                                            break;
                                        
                                        case '3':
                                            echo '<h3 class="span"><p style="margin-left:14em">TRES</p></h3>';
                                            break;
                                        
                                        case '4':
                                            echo '<h3 class="span"><p style="margin-left:14em">CUATRO</p></h3>';
                                            break;
                                        
                                        case '5':
                                            echo '<h3 class="span"><p style="margin-left:14em">CINCO</p></h3>';
                                            break;
                                        
                                        case '6':
                                            echo '<h3 class="span"><p style="margin-left:14em">SEIS</p></h3>';
                                            break;
                                        
                                        case '7':
                                            echo '<h3 class="span"><p style="margin-left:14em">SIETE</p></h3>';
                                            break;
                                        
                                        case '8':
                                            echo '<h3 class="span"><p style="margin-left:14em">OCHO</p></h3>';
                                            break;
                                        
                                        case '9':
                                            echo '<h3 class="span"><p style="margin-left:14em">NUEVE</p></h3>';
                                            break;
                                        
                                        case '0':
                                            echo '<h3 class="span"><p style="margin-left:14em">CERO</p></h3>';
                                            break;
                                                                                
                                        default:
                                            echo '<h3 class="span"><p style="margin-left:14em">No se pudo encontrar</p></h3>';
                                            break;
                                    }
                                     

                                }
                            }
                            unset($_SESSION['data']);
                        }
                    ?>         
                </td>
             </tr>
             </pre>
           </table>
        </div> 
   </div>
</body>
</html>
