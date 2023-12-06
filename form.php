<?php
    if(empty($_POST['nome']) && empty($_POST['email'])){
        echo "</br> Carregando...";
 
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo ('Seu nome é:' . $name. '</br>');
        echo ('Seu e-mail é:' . $email. '</br>');
    }
tem menu de contexto