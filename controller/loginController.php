<?php
include '../model/user.php';
include '../model/connection.php';

//Recogemos los valores enviados
$femail = $_POST['femail'];
$fpassword = $_POST['fpassword'];

//echo "El email es: {$femail}. El password es: {$fpassword}";

//Instanciamos la clase User con los datos recogidos del formulario via _POST
$user = new User($femail, $fpassword);

echo $user->getEmail();
echo "<br>";
echo $user->getPassword();

$sql = "SELECT * FROM tbl_user WHERE email = ? AND pass = ?";
$smt =  $pdo->prepare($sql);
$smt->bindParam(1, $femail);
$smt->bindParam(2, $fpassword);
$smt->execute();
$numPerson = $smt->rowCount();
echo "<br>";
echo $numPerson;

if($numPerson == 1) {
    //Autenticacion correcta
    header("Location: ../view/home.php");
} else {
    //Autenticacion incorrecta
    header("Location: ../view/vista_login.html?error=1");
}

?>