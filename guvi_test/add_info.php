<?php
include "db.php";

if(isset($_POST['age']) && isset($_POST['contactnumber']) && isset($_POST['date'])){
    $name = trim($_POST['age']);
    $email = trim($_POST['contactnumber']);
    $password = trim($_POST['date']);

    $checkEmail = $db->prepare("SELECT Email FROM users WHERE email = ?");
    $checkEmail->execute([$email]);
    if($checkEmail->rowCount() > 0 ){
        echo json_encode(['status' => 'error', 'message' => 'Sorry this email is already taken']);
    } else {
     $Query = $db->prepare("INSERT INTO users (Age, ContactNumber, DOB) VALUES (?,?,?)");
     $Query->execute([$age,$contactnumber,$dob]);
     if($Query){
         $_SESSION['created'] = "Your account has been created successfully";
         echo json_encode(['status' => 'success']);
     }
    }

}