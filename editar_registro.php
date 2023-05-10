<html>
<head>
<style>
.boton {
		width: 280px;
		height: auto;
		position: relative;
		margin-left: 0%;
		margin-top: 2%;
		border: 1px outset rgb(93, 100, 121);
		border-radius: 5px;
		background-color: rgb(255, 225, 171);
		padding:15px;
		box-sizing: border-box;
}
body{
	background-color:  rgb(252, 241, 220);
}
.nota{
    color: rgb(255, 145, 2);
	font-family: Arial, sans-serif;
	font-weight: bold;
	font-size: 20px;
}
</style
</head>
    <body>
        

            <?php 
            //Si existen datos en el formulario creado:
            if($_POST){
                $nombre3 = $_POST['nombre2'];
                $primerapellido3 = $_POST['primerapellido2'];
                $segundoapellido3 = $_POST['segundoapellido2'];
                $email3 = $_POST['email2'];
                $login3 = $_POST['Login2'];
                $email_modificado = $_POST['email_modificado'];
              
            
            //Conexión con base de datos
            $servername= "localhost";
            $username="root";
            $password="";
            $bdname="laboratoriofinal";

            //Creamos la conexión
            $conex = new mysqli($servername, $username, $password, $bdname);
            //Chequear si funciona 
            if($conex->connect_error){
                die("Connection failed: ". $conex->connect_error);
            }


             //Creamos una query
             $ssql="UPDATE formulario SET Nombre='".$nombre3. "' OR Login='".$login3. "' OR Primer_apellido='".$primerapellido3. "' OR Segundo_apellido='".$segundoapellido3. "' OR Email='".$email3."' WHERE Email= '" .$email_modificado."'";
         
             if($conex->query($ssql)) {
                echo '<span class="nota" >Cliente actualizado con éxito</span>';
              } else {
                echo '<p>Hubo un error al actualizar el cliente: ' . $conex->error . '</p>';
              }
        
             
            }

 
             //Cierro la conexión
             $conex->close();
 
            
             
            
             ?>

        <a href="ModificarCliente.html" ><input type="submit" style="margin-top:20px" class="boton"  value="MODIFICAR OTRO CLIENTE" /></a>
        <a href="principal.html" ><button type="button" class="boton">VOLVER A LA PÁGINA PRINCIPAL</button></a>
            

    </body>
</html>