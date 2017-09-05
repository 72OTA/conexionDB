<?php
function conectar() //conecta la base de datos
{
    $basededatos    = "nombre";       //nombre de tu base de datos
    $host           = "localhost";    //host aqui por defecto es local
    $usuario        = "root";         //usuario para la conexion
    $password       = "123";          // password para la conexion
    $charset        = "utf8";         //la codificación de la db
    
    if (!($link = mysqli_connect($host, $usuario, $password,$basededatos)))  //hago un if el cual se ejecutara si no logras conectarte a la db
    {
        echo "Error Al Conectar!";                                           // mensaje que aparecera si no logras conectarte.
        exit();
    }
    //mysqli_set_charset($charset, $link);
    return $link;                                                             // guardamos la conexion en la variable $link para luego solo
                                                                              // solo llamar a la variable para que haga la conexion
}
?>
