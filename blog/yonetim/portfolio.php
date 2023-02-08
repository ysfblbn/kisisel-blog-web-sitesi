<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>




<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Projeler</h4><a href="portfolioEkle.php"><button type="button" class="btn mb-1 btn-rounded btn-primary">Ekle</button></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Resim</th>
                                                <th>Resim Url</th>
                                                <th>İşlemler</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $photo            =    $db->prepare("SELECT * FROM portfoliaphoto");
                                            $photo->execute();
                                            $photos            =    $photo->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($photos as $key) { ?>
                                                <tr>
                                                    <th><?= $key["photoID"]; ?></th>
                                                    <td><img src="../images/<?= $key["photoBaglanti"]; ?>" alt="" style="align: center;" width="250"></td>
                                                    <td><span class="text"><?= $key["photoUrl"]; ?></span></td>
                                                    <td>
                                                        <input type="hidden" value="<?= $key["photoID"]; ?>" name="photoID">
                                                        <a href="portfolioDuzenle.php?photoID=<?= $key["photoID"]; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Düzenle</button></a>
                                                        <a href="../system/islem.php?portfoliosil=<?= $key["photoID"]; ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-trash"></i>Sil</button></a>

                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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