
<?php
//se existe, ou foi enviada, a variável usuário
if (isset($_POST['usuario'])){
    //verifica se o usuario é igual a admin e a senha igual a 123
    if($_POST['usuario'] == "admin" &&  $_POST['senha'] == 123){
        echo "Usuário Logado";
    }else{
        echo "Usuário ou senha inválidos!";
    }

}else{
    //manda abrir outro arquivo, o formulário de login
    //caso o usuário tente abrir esse arquivo pela URL
    //sem acessar o formulário de login "redirecionamento"
    header("Location: form_login.html");
}
