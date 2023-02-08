<?php require_once '../system/config.php';?>

<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <h4>Gelen Mesajlar</h4>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Ad Soyad</th>
                        <th>E-mail</th>
                        <th>Mesaj</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $iletisimform = $db->prepare("SELECT * FROM  iletisimform");
                      $iletisimform->execute();
                      $iletisimformcek = $iletisimform->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($iletisimformcek as $row) { ?>
                        <tr>
                          <th><?= $row["iletisimFormID"] ?></th>
                          <td><?= $row["iletisimFormAd"] ?></td>
                          <td><?= $row["iletisimFormMail"] ?></td>
                          <td><?= $row["iletisimFormMesaj"] ?></td>
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




  <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->


<?php require_once 'footer.php'; ?>