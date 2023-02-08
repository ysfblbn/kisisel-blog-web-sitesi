<?php
require_once '../system/config.php';
ob_start();
session_start();
// Admin Giriş Paneli 
if(isset($_POST["admingiris"])){
$gelenMail = $_POST["email"];
$gelenSifre =$_POST["sifre"];


    $adminKontrol =$db->prepare("SELECT * FROM users WHERE usersMail=? AND usersSifre=?");
    $adminKontrol -> execute([$gelenMail,$gelenSifre]);
    $row = $adminKontrol->rowCount();
 

    if ($row ==1){
      
        $_SESSION["mail"] = $gelenMail;
        $_SESSION["pass"] = $gelenSifre;

        print_r($_SESSION["pass"]);
       
        header("Location: index.php");


    }else{
        echo '<div class="alert alert-danger">Bu Bilgilere Ait Kullanıcı Bulunamadı</div>';
        header("Location: login.php");

    }
}


?>