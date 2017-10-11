<?php

session_start();



  ?>


  <form action="validar.php" method="post" enctype="application/x-ww-form-urlecoded">
 <label for="caja1"></label>	<p>Nombre de Usuario</p>

 <p><input type="text" id="caja1" name="usuario" placeholder="Usuario" required="usuario"> </p>

<label for="caja2"> <p>Contraseña</p>
<input type="password" id="caja2" name="password" placeholder="Contraseña" required="password"></label>
<input type="submit" value="Iniciar Sesion">
</form>