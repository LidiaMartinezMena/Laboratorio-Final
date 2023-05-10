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
</style
</head>
    <body>
        

            <?php 
            //Si existen datos en el formulario creado:
            if($_POST){
                $nombre3 = $_POST['nombre'];
                $primerapellido3 = $_POST['primerapellido'];
                $segundoapellido3 = $_POST['segundoapellido'];
                $email3 = $_POST['email'];
                $login3 = $_POST['Login'];
            
              
            
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
             $query="SELECT * FROM formulario WHERE Nombre='".$nombre3. "' OR Login='".$login3. "' OR Primer_apellido='".$primerapellido3. "' OR Segundo_apellido='".$segundoapellido3. "' OR Email='".$email3."'";
         
              //Ejecutar la query y obtener los datos
              
              $result=$conex->query($query);

            $table = "<table  border='1' cellpadding='10'  >\n";
            $table .= "<tr><th >Nombre</th><th>Primer apellido</th><th>Segundo apellido</th><th>Email</th><th>Login</th><th>Password</th></tr>\n";

              while ($fila = $result->fetch_assoc()) {
                $table .= "<tr>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["Primer_apellido"]."</td>
                <td>".$fila["Segundo_apellido"]."</td>
                <td>".$fila["Email"]."</td>
                <td>".$fila["Login"]."</td>
                <td>".$fila["Password"]."</td>
                
             </tr>\n";
              }
          $table .= "</table>\n"; 
          echo $table;

          //Cierro conexión
          $conex->close();
 
        }
         
        
         ?>
         <a href="FormularioBuscar.html" ><button type="button" class="boton">REALIZAR OTRA BÚSQUEDA</button></a>
    <a href="principal.html" ><button type="button" class="boton">VOLVER A LA PÁGINA PRINCIPAL</button></a>
        

</body>
</html>