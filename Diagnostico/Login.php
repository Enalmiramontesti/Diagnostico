<?php
    
    $UserName = $_POST["txtUserName"];
    $Password = $_POST["txtPassword"];

    if($UserName === "admin" && $Password ==="admin"){
        header('refresh:0,url = Principal.html');
    }//Fin if
    else{
        echo "Datos incorrectos";
        header('refresh:2,url = index.html');
    }
?>