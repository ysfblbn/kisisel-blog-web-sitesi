<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';?>

<?php
$kisisel		=	$db->prepare("SELECT * FROM kisisel");
$kisisel        ->  execute();
$kisi			=	$kisisel->fetch(PDO::FETCH_ASSOC);
?>
<div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kişisel Ekleme Formu</h4>
                                <?php
                                error_reporting(0);
                                $sonuc  =   $_GET["sonuc"]; 
                                if($sonuc=="basarili"){
                                    echo "<div class='alert alert-success'>Kisisel Yazısı Eklendi</div>";
                                }
                                elseif($sonuc=="hatali") {
                                    echo "<div class='alert alert-danger'>Kisisel Yazısı Eklenemedi!</div>";
                                }
                                ?>
                                
                                <div class="basic-form">
                                    <form method="POST" action="../system/islem.php">
                                        <div class="form-group">
                                            <label for="form">Kişisel Yazısı</label>
                                            <input type="text" name="kisiselYazi" class="form-control input-rounded" value="<?= $kisi["kisiselYazi"]; ?>">
                                            <input type="hidden" value="<?= $kisi["kisiselID"]; ?>" name="kisiselID">

                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" name="kisiselEkle" class="btn btn-warning">Kişisel Güncelle</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



















<?php require_once 'footer.php';?>