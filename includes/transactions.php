<?php
require_once 'DB.php';

// Register user
function registerUser($email, $password, $name)
{
    global $pdo;
    $sql = "INSERT INTO `admin` (email, password, name) VALUES (:email, :password, :name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email, 'name' => $name, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
    return $stmt->rowCount();
}

// Function for log in user
function loginUser($email, $password)
{
    global $pdo;
    $sql = "SELECT * FROM `admin` WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

function getAdmin($id)
{
    global $pdo;
    $sql = "SELECT * FROM `admin` WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $stmt->execute();
    return $stmt->fetch();
}
