<?php
include "db.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    $checkEmail = $db->prepare("SELECT Email FROM users WHERE email = ?");
    $checkEmail->execute([$email]);
    if($checkEmail->rowCount() > 0 ){
        echo json_encode(['status' => 'error', 'message' => 'Sorry this email is already taken']);
    } else {
     $Query = $db->prepare("INSERT INTO users (Name, Email, Password) VALUES (?,?,?)");
     $Query->execute([$name, $email, $password]);
     if($Query){
         $_SESSION['created'] = "Your account has been created successfully";
         echo json_encode(['status' => 'success']);
     }
    }

}