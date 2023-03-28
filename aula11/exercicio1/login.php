
<?php

if($_GET['usuario'] == "admin" &&  $_GET['senha'] == 123){
    echo "Usuário Logado";
}else{
    echo "Usuário ou senha inválidos!";
}