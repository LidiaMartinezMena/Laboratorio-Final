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
              $nombreBBDD = $_POST['nombreBBDD'];
              
              
            
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
             $queryBD="SELECT * FROM " . $nombreBBDD ;
         
              //Ejecutar la query y obtener los datos
              
              $result=$conex->query($queryBD);

            $table2 = "<table  border='1' cellpadding='10'  >\n";
            $table2 .= "<tr><th >Nombre</th><th>Primer apellido</th><th>Segundo apellido</th><th>Email</th><th>Login</th><th>Password</th></tr>\n";

              while ($fila = $result->fetch_assoc()) {
                $table2 .= "<tr>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["Primer_apellido"]."</td>
                <td>".$fila["Segundo_apellido"]."</td>
                <td>".$fila["Email"]."</td>
                <td>".$fila["Login"]."</td>
                <td>".$fila["Password"]."</td>
                
             </tr>\n";
              }
          $table2 .= "</table>\n"; 
          echo $table2;
            }
          ?>
          <a href="ConsultarBBDD.html" ><button type="button" style="margin-top:20px" class="boton">CONSULTAR OTRA TABLA</button></a>
          <a href="principal.html" ><button type="button" style="margin-top:20px" class="boton">VOLVER A LA PÁGINA PRINCIPAL</button></a>
            

          </body>
      </html>