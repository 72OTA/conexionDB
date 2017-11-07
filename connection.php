<?php
function connection() //function that contains the necessary data for the connection in the db
{
    $db    = "name";       //name of the db
    $host           = "localhost";    //default host
    $user        = "root";         //user of the db
    $password       = "123";          // password of the db
    $charset        = "utf8";         
    
    if (!($link = mysqli_connect($host, $usuario, $password,$basededatos)))  //I do an if which will be executed if you can not connect to the db
    {
        echo "Error while trying to connect!";                                           // message that appears if the error occurs
        exit();
    }
    //mysqli_set_charset($charset, $link);
    return $link;                                                             // we save the connection in the variable $ link for later
                                                                              // just call the variable to make the connection
}
?>
