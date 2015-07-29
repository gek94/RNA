<?php
 		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blanco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        .btnpx{
            display: inline-block;
            padding:5px 10px 6px;
            text-decoration: none;
            font-size: 30px;
            -webkit-border-radius:4px;
            -moz-border-radius:4px;
            border-radius: 4px;
            overflow: visible;
            background: white;
            color:white;
        }
    </style>
    <!-- Le styles -->
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
            ZONA DE ENTRENAMIENTO<center/></h3>
        </td>
      </tr>
    </table>   
    <div class="row-fluid" align="center">
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form" id="form">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form');"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form1" id="form1">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form1');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form1');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form1');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form1');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form1');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form1');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form1');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form1');"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form2" id="form2">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form2');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form2');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form2');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form2');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form2');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form2');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form2');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form2');"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="row-fluid" align="center">
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form3" id="form3">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form3');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form3');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form3');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form3');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form3');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form3');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form3');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form3');"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form4" id="form4">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form4');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form4');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form4');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form4');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form4');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form4');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form4');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form4');"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form5" id="form5">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form5');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form5');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form5');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form5');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form5');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form5');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form5');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form5');"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="row-fluid" align="center">
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form6" id="form6">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form6');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form6');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form6');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form6');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form6');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form6');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form6');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form6');"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form7" id="form7">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form7');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form7');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form7');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form7');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form7');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form7');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form7');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form7');"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form8" id="form8">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form8');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form8');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form8');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form8');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form8');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form8');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form8');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form8');"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="row-fluid" align="center">
        <div class="span4">
            <h3 align="center">Zona de dibujo</h3>
            <form action="" method="POST" name="form9" id="form9">
                <table align="center">
                    <tr>
                    <td><input type="button"  class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4','form9');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4','form9');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4','form9');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4','form9');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4','form9');"></td>
                    </tr>
                    <td><input type="button"  class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4','form9');"></td>
                    <tr>
                    <td><input type="button"  class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3','form9');"></td>
                    <td><input type="button"  class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4','form9');"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <br>
    <a href="calcular.php" class="btn btn-large btn-block btn-primary" type="button"><strong>GUARDAR</strong></a>
</body>
</html>

<script>
    function cambiar(variable,formulario){
        
        document.getElementById(formulario)[variable].style.background='black';
        document.getElementById(formulario)[variable].style.color='black';
        document.getElementById(formulario)[variable].value='1'; 

    }
</script>
