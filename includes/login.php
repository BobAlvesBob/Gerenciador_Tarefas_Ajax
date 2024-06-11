<?php
session_start();  // Iniciar sessão no topo do arquivo
include 'includes/db_config.php';  // Inclui configuração do banco

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];  // Senha deve ser tratada com hash

    // Verificação de usuário no banco
    $query = $pdo->prepare("SELECT user_id, username FROM users WHERE username = ? AND password = ?");
    $query->execute([$username, $password]);
    $user = $query->fetch();

    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];  // Salva user_id na sessão
        header("Location: index.php");  // Redireciona para a página principal
        exit;
    } else {
        $error = "Credenciais inválidas!";
    }
}
?>
<!-- Formulário de login HTML -->
<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
<?php if(isset($error)) echo $error; ?>
