<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Hosting &hearts; </title>
</head>
<body>
    <h1>Hola :3</h1>
    <h3>Este es un hosting de prueba que de la la info de tu server y tu IP. Mira </h3><br>
    <?php

    echo "<b>IP del servidor: </b>" . $_SERVER['SERVER_ADDR'] . "<br/>"; //Imprime la IP del servidor
    echo "<b>Nombre del servidor: </b>" . $_SERVER['SERVER_NAME'] . "<br/>"; //Imprime el nombre del servidor
    echo "<b>Software del servidor: </b>" . $_SERVER['SERVER_SOFTWARE'] . "<br/>"; //Imprime el software que usa el servidor
    echo "<b>Protocolo: </b>" . $_SERVER['SERVER_PROTOCOL'] . "<br/>"; //Imprime el protocolo usado
    echo "<b>Método: </b>" . $_SERVER['REQUEST_METHOD'] . "<br/>"; //Imprime el método de petición empleado
    echo "<b>Tiempo de respuesta: </b>" . $_SERVER['REQUEST_TIME'] . "<br/>";  //Imprime el tiempo de respuesta
    echo "<b>Software y navegador: </b>" . $_SERVER['HTTP_USER_AGENT'] . "<br/>"; /*Imprime la información de S.O y navegador del cliente*/
    echo "<b>IP del cliente: </b>" . $_SERVER["REMOTE_ADDR"] . "<br/>";  //Imprime la dirección IP del cliente
    /*Imprime puerto empleado por la máquina del usuario para comunicarse con el servidor web. */
    echo "<b>Puerto de comunicación: </b>" . $_SERVER["REMOTE_PORT"] . "<br/>";
    echo "<b>Ruta del script (ruta de la página solicitada): </b>".$_SERVER['DOCUMENT_ROOT']."<br/>";
    echo "<b>Version del CGI usada por el software: </b>".$_SERVER['GATEWAY_INTERFACE']."<br/>";
    echo "<b> Header de la consulta: </b>".$_SERVER['HTTP_ACCEPT']."<br/>";
    # echo "<b> Charset del header de la consulta: </b>".$_SERVER['HTTP_REFERER']."<br/>";
    echo "<b> Archivo desde el cual se hace la consulta: </b>".$_SERVER['PHP_SELF']."<br/>";
    echo "<b> Ruta del archivo de consulta: </b>".$_SERVER['SCRIPT_FILENAME']."<br/>";

    ?>
</body>
</html>