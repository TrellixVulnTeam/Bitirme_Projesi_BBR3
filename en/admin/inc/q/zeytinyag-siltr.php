<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.html") : null;

$id = g('id');
$sor = $db->query("SELECT * FROM zeytinyagtr WHERE zeytinyagid={$id} AND zeytinyag_p=0");
$icerik = $sor->fetch(PDO::FETCH_ASSOC);
$icerik_varmi = $sor->rowCount();
if ($icerik_varmi > 0) {
    null;
} else {
    header("Location: " . URL . "/en/admin/index.php?do=zeytinyagtr");
    exit;
}
?>
<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-trash-o"></i> Zeytin Yağı Sil TR</h2>
        <div class="item row">
            <?php
            $sil = $db->prepare("DELETE FROM zeytinyagtr WHERE zeytinyagid={$id}");
            $sil->execute();
            header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=zeytinyagtr");
            ?>
            <p class="alert alert-success">içerik başarıyla silindi.</p>
        </div>
    </div>
</section>