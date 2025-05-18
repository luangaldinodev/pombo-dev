<?php


include 'conexao.php';
include '../functions/sendEmail.php';

session_start();

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
    $_SESSION['mensagem'] = "<script>alert('Preencha todos os campos!');</script>";
    header("Location: ../../signup.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $stmt = $con->prepare("SELECT * FROM user WHERE email_user = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['mensagem'] = "<script>alert('E-mail já cadastrado.');</script>";
        header("Location: ../../signup.php");
        exit;
    }

    $id = time() . mt_rand(100, 99999);
    echo $id;

    $token = bin2hex(random_bytes(16));

    $stmt = $con->prepare("INSERT INTO user (id_user, first_name_user, last_name_user, email_user, password_user, token_user) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $id, $first_name, $last_name, $email, $password, $token);
    if ($stmt->execute()) {
        // sendEmail($email, $first_name, $token);
        $_SESSION['mensagem'] = "<script>alert('Cadastro realizado! Verifique seu e-mail.');</script>";
        $stmt->close();
        header("Location: ../../index.php");
    } else {
        $_SESSION['mensagem'] = "<script>alert('Erro ao cadastrar.');</script>";
        header("Location: ../../signup.php");
    }
}
