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

            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            //Creamos la conexión
            $conex = new mysqli($servername, $username, $password, $bdname);

            $conex->set_charset("utf8");

            //Chequear si funciona 
            if($conex->connect_error){
                die("Connection failed: ". $conex->connect_error);
            }

            try {
                $conex->query("INSERT INTO formulario VALUES 
                ('$nombre', '$primerapellido', '$segundoapellido', '$email', '$login', '$pwd1')");
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo '<span class="nota" >El email introducido ya existe en la base de datos</span>';
                } else {
                    throw $e;// en caso de que sea algún otro error
                }
            
            }
            echo '<span class="nota" >Los datos se han insertado correctamente</span>';
            
 
             //Cierro la conexión
             $conex->close();
 
             
             }
             ?>
             <br>
        <a href="ConsultarBBDD.html" ><button type="button" class="boton">CONSULTAR LA BASE DE DATOS</button></a>
        <a href="FormularioAñadir.html" ><button type="button" class="boton">VOLVER AL FORMULARIO</button></a>
        <a href="principal.html" ><button type="button" class="boton">VOLVER A LA PÁGINA PRINCIPAL</button></a>
    </body>
</html>
