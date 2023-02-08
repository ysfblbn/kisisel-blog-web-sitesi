<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>




<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="col-md-6 grid-margin stretch-card" style="width: 1610px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Portfolio Ekleme</h4>
                                        <p class="card-description"></p>
                                        <form class="for ms-sample" action="../system/islem.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Proje Url</label>
                                                <input type="text" class="form-control" name="photoUrl" placeholder="Url Giriniz"><br>
                                                <input class="form-control" name="photoBaglanti" type="file"><br>
                                                <button name="portfolioEkle" class="btn btn-primary text-center">Ekle</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>