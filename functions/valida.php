<?php
session_start();
include_once("conn.php");
if((isset($_POST['email'])) && (isset($_POST['senha']))){
    $usuario = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    $result_usuario = "SELECT * FROM admin WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if(isset($resultado)){
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        header("Location: ../admin.php");

    }
    else
    {
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: ../admin-error.php");
    }
}else{
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../admin-error.php");
}
?>