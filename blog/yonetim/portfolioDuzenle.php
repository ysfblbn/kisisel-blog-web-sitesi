<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; 
$veri       =   $_GET["photoID"];
$portfolio = $db->prepare("SELECT * FROM  portfoliaphoto WHERE photoID=?");
$portfolio->execute(array($veri));
$portfolioCek = $portfolio->fetch(PDO::FETCH_ASSOC);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="col-lg-6">
                        <div class="card">

                            <div class="col-md-6 grid-margin stretch-card" style="width: auto;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Portfolio URL Düzeltme</h4>
                                        <p class="card-description"></p>
                                        <form class="forms-sample" action="../system/islem.php" method="POST">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Site Url</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1" name="photoUrl" value="<?= $portfolioCek["photoUrl"] ?>">
                                            </div>
                                            <input type="hidden" name="photoID" value="<?= $portfolioCek["photoID"] ?>">
                                            <button type="submit" name="urlGuncelle" class="btn btn-primary me-2">Güncelle</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <form action="../system/islem.php" method="POST" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <h3><div for="inputTitle">Fotograf Güncelle</div></h3>
                                    <img width="500" src="../images/<?= $portfolioCek["photoBaglanti"] ?>">
                                </div>


                                <label for="inputTitle">Fotograf Yükle</label>
                                <div class="form-floating mb-3">

                                    <input class="form-control" name="photo" type="file">

                                </div>
                                <input name="photoID" value="<?= $portfolioCek["photoID"]; ?>" type="hidden">
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button name="photoGuncelle" class="btn btn-primary text-center">Güncelle</button>
                                </div>
                                <br>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>