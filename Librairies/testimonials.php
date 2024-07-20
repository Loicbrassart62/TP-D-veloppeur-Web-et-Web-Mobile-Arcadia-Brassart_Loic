<?php

include ("config.php");

$message = '';

$sql = "SELECT pseudo, commentaire FROM avis WHERE IsVisible=1 limit 3";
$requete = $pdo->prepare($sql);
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

if ($result) {
    echo "<div class='container'>";
    echo "<div class='testimonial'>";
    foreach ($result as $value) {
        echo "<div class='pseudo'>";
        echo $value['pseudo'] . "\n";
        echo "</div>";
        echo "<div class='comment'>";
        echo $value['commentaire'] . "\n";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
}
?>


<section class="section-btn-avis">
    <button class="btn-avis">
        <a href="avis.php">Laisser un avis
            <i class="fa-solid fa-chevron-right"></i>
        </a>
    </button>
</section>
