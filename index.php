<?php
 		session_start();	
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>RNA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	  <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/holder/holder.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/application.js"></script>

    <!-- Iconos -->
    <link rel="shortcut icon" href="ico/favicon.png">

</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="informacion.php" target="admin"><strong>Principal</strong></a>
              </li>
              <li class="active">
                <a href="entrenar.php" target="admin"><strong>Entrenar</strong></a>
              </li>
              <li class="active">
                <a href="calcular.php" target="admin"><strong>Reconocer</strong></a>
              </li>
              <li class="active">
                <a href="acerca_de.php" target="admin"><strong>Acerca de</strong></a>
              </li>
            </ul>
            <!-- lado derecho -->
            <ul class="nav pull-right">
              <li id="fat-menu" class="dropdown active">
                <a href="informacion.php" id="drop3" role="button"  data-toggle="dropdown"><strong>Redes Neuronales Artificiales</strong></a>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div align="center">
        <table width="97%" border="0">
          <tr>
            <td>
            	<iframe src="informacion.php" name="admin" frameborder="0" scrolling="auto" width="100%" height="900"></iframe>
            </td>
          </tr>
        </table>
        
	</div>

</body>
</html>