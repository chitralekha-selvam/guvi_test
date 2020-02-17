
<?php
include "db.php";
if(isset($_POST['email']) && isset($_POST['password'])){

    $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   //  $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    $Query = $db->prepare("SELECT * FROM users WHERE Email = ?");
    $Query->execute([$email]);
    if($Query->rowCount() > 0 ){
    $row = $Query->fetch(PDO::FETCH_OBJ);
    $dbPassword = $row->Password;
    $name = $row->Name;
    $id = $row->Id;
    if(password_verify($password, $dbPassword)){
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'passwordError', 'message' => 'Your Password is wrong']);
    }
    } else {
        echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
    }

}
?>