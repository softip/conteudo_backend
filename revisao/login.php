<?php
    if($_POST['nome'] == 'admin' 
         && $_POST['senha'] == '123'){
            echo "Bem-Vindo! Login realizado com sucesso.";
    }else{
       echo "usuário a senha inválidos";
    }

?>