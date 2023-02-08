<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';
$hakkimizda		=	$db->prepare("SELECT * FROM hakkimizda");
$hakkimizda->execute();
$hakkimda		=	$hakkimizda->fetch(PDO::FETCH_ASSOC);
?>


<div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Hakkımda Ekleme Formu</h4>
                                <?php
                                error_reporting(0);
                                $sonuc  =   $_GET["sonuc"]; 
                                if($sonuc=="basarili"){
                                    echo "<div class='alert alert-success'>Hakkımda Yazısı Eklendi</div>";
                                }
                                elseif($sonuc=="hatali") {
                                    echo "<div class='alert alert-danger'>Hakkımda Yazısı Eklenemedi!</div>";
                                }
                                ?>
                                
                                <div class="basic-form">
                                    <form method="POST" action="../system/islem.php">
                                        <div class="form-group">
                                            <label for="form">Hakkımda Yazısı</label>
                                            <input type="text" name="hakkimdaYazi" class="form-control input-rounded" value="<?= $hakkimda["hakkimdaYazi"]; ?>">
                                            <input type="hidden" value="<?= $hakkimda["id"]; ?>" name="id">

                                            
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" name="hakkimdaEkle" class="btn btn-warning">Hakkımda Güncelle</button>                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

            <?php require_once 'footer.php';?>