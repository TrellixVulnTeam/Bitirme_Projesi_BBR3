<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.html") : null;

$id = g('id');
$sor = $db->query("SELECT * FROM zeytinyagen WHERE zeytinyagid	={$id} AND zeytinyag_p=0");
$icerik = $sor->fetch(PDO::FETCH_ASSOC);
$icerik_varmi = $sor->rowCount();
if ($icerik_varmi > 0) {
    null;
} else {
    header("Location: " . URL . "/en/admin/index.php?do=zeytinyagen");
    exit;
}
?>
<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-trash-o"></i> Zeytin Yağı Sil EN</h2>
        <div class="item row">
            <?php
            $sil = $db->prepare("DELETE FROM zeytinyagen WHERE zeytinyagid={$id}");
            $sil->execute();
            header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=zeytinyagen");
            ?>
            <p class="alert alert-success">içerik başarıyla silindi.</p>
        </div>
    </div>
</section>