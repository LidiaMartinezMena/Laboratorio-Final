<html>
<head>
<style>
.boton {
   padding: 10px;
   background-color: red;
   color: white;
}
</style
<title>Archivo PHP</title>
</head>
    <body>
<?php 
            //Si existen datos en el formulario creado:
            if($_POST){
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
             
            
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
             //Creamos una query para buscar el cliente
             $sql1="SELECT * FROM formulario WHERE nombre = '".$nombre."OR email =" .$email;
             // Creamos una query para que elimine ese cliente
             //$sql2 = "DELETE from formulario WHERE nombre=".$nombre." OR email =" .$email;
             
             //Ejecutar la query y obtener los datos
             $datos=mysql_query($sql1);

            //Imprimir los datos
            while ($fila = mysql_fetch_array($datos)){
                echo "<p">;
                echo $fila["nombre"];
                echo "-"; // un separador
                echo $fila ["email"];
                echo "</p>"; 

        }else{
            echo "<p>La tabla no contiene ese usuario o email</p>";
            }
 
             //Cierro la conexión
             $conex->close();
 
             
             }
             ?>
    </body>
</html>