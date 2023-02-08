<?php




try {
    $db = new PDO("mysql:host=localhost;dbname=blog;","root","");
} catch (PDOException $error) {
    echo "Veri tabanına bağlanılamadı";
}
?>
