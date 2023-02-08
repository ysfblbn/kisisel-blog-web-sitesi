<?php
require_once 'config.php';
error_reporting(0);
extract($_POST);

// Eğitim Yazısı Ekleme
if (isset($_POST["egitimEkle"])) {
    $egitimBaslik     =   $_POST["egitimBaslik"];
    $egitimYazi       =   $_POST["egitimYazi"];
    $tarih      =   $_POST["tarih"];
    
    $veriEkle   =   $db->prepare("UPDATE egitim SET egitimBaslik=? , egitimYazi=? , tarih=? WHERE id=?");
    $veriEkle   ->  execute(array($egitimBaslik,$egitimYazi,$tarih,$id));
    if ($veriEkle) {
        header("location:../yonetim/egitim.php?sonuc=basarili");
    }else {
        header("location:../yonetim/egitim.php?sonuc=hatali");
    }

}

// Hakkımda Yazısı Ekleme
if (isset($_POST["hakkimdaEkle"])) {
    $hakkimdaYazi     =   $_POST["hakkimdaYazi"];
    
    $veriEkle   =   $db->prepare("UPDATE hakkimizda SET hakkimdaYazi=? WHERE id=?");
    $veriEkle   ->  execute(array($hakkimdaYazi,$id));
    if ($veriEkle) {
        header("location:../yonetim/hakkimda.php?sonuc=basarili");
    }else {
        header("location:../yonetim/hakkimda.php?sonuc=hatali");
    }

}

// İletişim Yazısı Ekleme
if (isset($_POST["iletisimEkle"])) {
    $yas     =   $_POST["yas"];
    $ulke      =   $_POST["ulke"];
    $telefon      =   $_POST["telefon"];
    $email      =   $_POST["email"];
    
    $veriEkle   =   $db->prepare("UPDATE iletisim SET yas=? , ulke=? , telefon=? , email=? WHERE id=?");
    $veriEkle   ->  execute(array($yas,$ulke,$telefon,$email,$id));
    if ($veriEkle) {
        header("location:../yonetim/iletisim.php?sonuc=basarili");
    }else {
        header("location:../yonetim/iletisim.php?sonuc=hatali");
    }

}


// Kişisel Yazısı Ekleme
if (isset($_POST["kisiselEkle"])) {

    $kisiselYazi     =   $_POST["kisiselYazi"];
    
    $veriEkle   =   $db->prepare("UPDATE kisisel SET kisiselYazi=? WHERE kisiselID=?");
    $veriEkle   ->  execute(array($kisiselYazi,$kisiselID));
    if ($veriEkle) {
        header("location:../yonetim/kisisel.php?sonuc=basarili");
    }else {
        header("location:../yonetim/kisisel.php?sonuc=hatali");
    }
}


// İletişim Kısmı Veri Tabanına Kaydetme
if (isset($_POST["formGonder"])) {

    
    $iletisimFormAd         =   $_POST["iletisimFormAd"];
    $iletisimFormMail       =   $_POST["iletisimFormMail"];
    $iletisimFormMesaj      =   $_POST["iletisimFormMesaj"];
    
  
        $sorgu  =   $db->prepare("INSERT INTO  iletisimform SET iletisimFormAd=? , iletisimFormMail=? , iletisimFormMesaj=?");
        $sorgu  ->  execute(array($iletisimFormAd, $iletisimFormMail, $iletisimFormMesaj));
        if ($sorgu) {
            header("Location: ../?update=yes");
        } else {
            header("Location: ../?update=no");
        }
    }
    //Portfolio Sil
    $portfoliosil = $_GET["portfoliosil"];
    if (isset($portfoliosil)) {
    
    
        $portfolio = $db->prepare("DELETE FROM portfoliaphoto WHERE photoID=?");
        $portfolio->execute(array($portfoliosil));
        if ($memnun) {
            header("Location: ../yonetim/portfolio.php?sonuc=no");
        } else {
            header("Location: ../yonetim/portfolio.php?sonuc=yes");
        }
    }
// Portfolio Duzenle
    if (isset($_POST["urlGuncelle"])) {

        $photoUrl      =   $_POST["photoUrl"];
    
        if (!$photoUrl) {
            header("Location: portfolioDuzenle.php?update=bos");
        } else {
            $portfolio = $db->prepare("UPDATE portfoliaphoto SET photoUrl=? WHERE photoID=?");
            $portfolio->execute(array($photoUrl, $photoID));
            if ($portfolio) {
                header("Location: ../yonetim/portfolio.php?update=yes");
            } else {
                header("Location: ../yonetim/portfolioDuzenle.php?update=no");
            }
        }
    }
//Portfolio Fotograf Günceleme 
    if (isset($_POST["photoGuncelle"])) {

        $photoID     =   $_POST["photoID"];
        $kaynak = $_FILES["photo"]["tmp_name"]; 
        $isim = $_FILES["photo"]["name"];
        $turu = $_FILES["photo"]["type"];
    
        $hedef = "../images/". basename($isim);
        
    
        if (move_uploaded_file($kaynak, $hedef)) {
            $yukle  = $db->prepare("UPDATE portfoliaphoto SET photoBaglanti=? WHERE photoID=?");
            $update = $yukle->execute(array($isim, $photoID));
    
            if ($update) {
                header("Location: ../yonetim/portfolioDuzenle.php?update=yes");
            } else {
                header("Location: ../yonetim/portfolioDuzenle.php?update=no");
            }
        }
    }

    if (isset($_POST["portfolioEkle"])) {
        $kaynak = $_FILES["photoBaglanti"]["tmp_name"];
        $isim = $_FILES["photoBaglanti"]["name"];
        $turu = $_FILES["photoBaglanti"]["type"];
    
        $hedef = "../images/" . basename($isim);
    
        $photoUrl      =   $_POST["photoUrl"];
       
        if (move_uploaded_file($kaynak, $hedef)) {
            $yukle  = $db->prepare("INSERT INTO  portfoliaphoto SET photoBaglanti=?, photoUrl=?");
            $yukle->execute(array($isim, $photoUrl));
    
            if ($yukle) {
                header("Location: ../yonetim/portfolioEkle.php?update=yes");
            } else {
                header("Location: ../yonetim/portfolioEkle.php?update=no");
            }
        }
    }


// Admin Giriş Paneli 
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
       
        header("Location: ../yonetim/index.php");


    }else{
        echo '<div class="alert alert-danger">Bu Bilgilere Ait Kullanıcı Bulunamadı</div>';
        header("Location: ../yonetim/login.php");

    }
}

?>