<?php require_once 'header.php';?>
<?php require_once 'sidebar.php';
$iletisim		=	$db->prepare("SELECT * FROM iletisim");
$iletisim->execute();
$iletisimim		=	$iletisim->fetch(PDO::FETCH_ASSOC);
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
                                            <label for="form">Yaş Giriniz</label>
                                            <input type="text" name="yas" class="form-control input-rounded" value="<?= $iletisimim["yas"]; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="form">Ülke Giriniz</label>
                                            <input type="text" name="ulke" class="form-control input-rounded" value="<?= $iletisimim["ulke"]; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="form">Telefon Giriniz</label>
                                            <input type="text" name="telefon" class="form-control input-rounded" value="<?= $iletisimim["telefon"]; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="form">E-mail Giriniz</label>
                                            <input type="text" name="email" class="form-control input-rounded" value="<?= $iletisimim["email"]; ?>">
                                            <input type="hidden" value="<?= $iletisimim["id"]; ?>" name="id">
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" name="iletisimEkle" class="btn btn-warning">İletişim Güncelle</button>
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