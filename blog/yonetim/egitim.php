<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';
$egitim			=	$db->prepare("SELECT * FROM egitim");
$egitim->execute();
$egitimim		=	$egitim->fetch(PDO::FETCH_ASSOC);
?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">İletişim Ekleme Formu</h4><br>
                                <?php
                                error_reporting(0);
                                $sonuc  =   $_GET["sonuc"]; 
                                if($sonuc=="basarili"){
                                    echo "<div class='alert alert-success'>İletişim Yazısı Eklendi</div>";
                                }
                                elseif($sonuc=="hatali") {
                                    echo "<div class='alert alert-danger'>İletişim Yazısı Eklenemedi!</div>";
                                }
                                ?>
                                
                                <div class="basic-form">
                                    <form method="POST" action="../system/islem.php">
                                        <div class="form-group">
                                            <label for="form">Eğitim Başlık</label>
                                            <input type="text" name="egitimBaslik" class="form-control input-rounded" value="<?= $egitimim["egitimBaslik"]; ?>">
                                            <input type="hidden" value="<?= $egitimim["id"]; ?>" name="id">

                                        </div>

                                        <div class="form-group">
                                            <label for="form">Eğitim Yazı</label>
                                            <input type="text" name="egitimYazi" class="form-control input-rounded" value="<?= $egitimim["egitimYazi"]; ?>">
                                            <input type="hidden" value="<?= $egitimim["id"]; ?>" name="id">

                                        </div>

                                        <div class="form-group">
                                            <label for="form">Tarih</label>
                                            <input type="text" name="tarih" class="form-control input-rounded" value="<?= $egitimim["tarih"]; ?>">
                                            <input type="hidden" value="<?= $egitimim["id"]; ?>" name="id">

                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" name="egitimEkle" class="btn btn-warning">Güncelle</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
       <?php require_once 'footer.php';?>