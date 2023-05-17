<?php
require "../../../dao.php";
if (session_status() == PHP_SESSION_NONE) {session_start();}

$mail = (isset($_POST['mail']) && $_POST['mail'] != "") ? $_POST['mail'] : Null;
$pssword = (isset($_POST['password']) && $_POST['password'] != "") ? $_POST['password'] : Null;

if ($mail == Null || $pssword == Null) {
    header("Location: ../../../login.php");
    exit();
}

$db = ConnectDB();

$requete = $db->prepare("SELECT id, password FROM utilisateur WHERE email=:mail LIMIT 1;");
$requete-> execute(array(':mail' => $mail));
// $requete->execute();
$arr = $requete->fetchAll(PDO::FETCH_ASSOC);
$requete->closeCursor();
$hashed_password=$arr[0]["password"];
$id = $arr[0]["id"];

if(count($arr)>0 && $arr!=Null ){
    if(password_verify($pssword, $hashed_password)==True){
        $_SESSION['login'] = $id;
        header("Location: ../../../index.php");
        exit();
    }
    else {
        header("Location: ../../../login.php");
        exit();
    }
}

else {
    header("Location: ../../../login.php");
    exit();
}

    ?>