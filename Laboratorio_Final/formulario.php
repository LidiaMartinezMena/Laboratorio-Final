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
                $primerapellido = $_POST['primerapellido'];
                $segundoapellido = $_POST['segundoapellido'];
                $email = $_POST['email'];
                $login = $_POST['Login'];
                $pwd1 = $_POST['pwd1'];
            
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
             $sql = "INSERT INTO formulario VALUES 
             ('$nombre', '$primerapellido', '$segundoapellido', '$email', '$login', '$pwd1')";
         
             //Mensaje de datos introducidos correctamente o no
             if($conex->query($sql) ===TRUE) {
                 echo "Se ha creado el registro satisfactoriamente";
             } else {
                 echo "Error" .$sql . "<br>" . $conex->error;
             }
 
             //Cierro la conexión
             $conex->close();
 
             
             }
             ?>
        <a href="formulario.html" ><button type="button" class="boton">VOLVER AL FORMULARIO</button></a>

    </body>
</html>
