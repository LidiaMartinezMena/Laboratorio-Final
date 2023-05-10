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
                //$nombre3 = $_POST['$nombre2'];
                $email3 = $_POST['email_cliente'];
              
            
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

    
            //Datos para eliminar al cliente
          if (isset($_POST["email_cliente"])){

            //Preparar la consulta
            $consulta = "DELETE FROM formulario where Email='".$email3. "'";

            //Ejecutar la consulta
            $result=$conex->query($consulta);
            echo '<span class="nota" >Contacto borrado con éxito</span>';

            //redirigir nuevamente a la página para ver el resultado
        header("location: principal.php");
        }
 
             //Cierro la conexión
             $conex->close();
 
            }
             
            
             ?>