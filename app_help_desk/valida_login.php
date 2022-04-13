<?php

    session_start();
    $_SESSION[x] = 'valor de session';
    
    $usuario_autenticado = false;
    $usuario_id = null;
    $perfis = array(1 => 'administrativo', 2 => 'usuario');
    $usuario_perfil_id = null;

    $usuarios_app = array(array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
                        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
                        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
                        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
    );

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header("Location: home.php");
    } else {
        $_SESSION['autenticado'] = 'nao';
        header('Location: index.php?login=erro');
    }

    $_POST['email'];
    $_POST['senha'];

?>