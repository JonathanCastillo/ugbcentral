<!DOCTYPE html>
<html>
<head>
<?php include 'view/Components/Header.php';?>
</head>
<body>
<div class="Container">
	  <nav class="panel  grey darken-4">
    <?php include 'view/Components/Simple_Menu.php'; ?>
  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Iniciar Sesión</h1>
			<form method="POST" action="?c=Usuario&a=Validar">
      
      <div class="input-field">
      <i class="material-icons prefix">person_pin</i>
      <input type="text" name="Email" id="Email" required="Por favor rellene este campo">
      <label for="Email">Código</label>
      </div>

      <div class="input-field">
      <i class="material-icons prefix">verified_user</i>
      <input type="Password" name="Password" id="Password" required="Por favor rellene este campo">
      <label for="Password"></label>
      </div>


     
<br><br>

        	<input type="submit" value="Aceptar" class="btn waves-effect waves-light blue darken-2">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
    </div>
    </div>
	</center>






  
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
    $('dropdown').dropdown();
		$('.datepicker').pickadate();
	}
	);

</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
 </body>
<footer>
<?php include 'view/Components/Footer.php';?>
</footer>
</html>
