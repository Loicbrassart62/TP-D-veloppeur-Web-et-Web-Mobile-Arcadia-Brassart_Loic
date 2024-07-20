<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/index.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/9c87998ff2.js" crossorigin="anonymous"></script>
    <title>Arcadia</title>
</head>


<!-- Navbar -->

<?php

include ('./Librairies/navbar.php');

?>

<!-- Script pour Menu burger -->

<script src="./Script/script-burger.js"></script>

<!-- Main image -->

<section>
    <div class="hero-image">
        <div class="hero-text">
            <h1 class="main-tittle">Bienvenue à Arcadia</h1>
            <p>Venez découvrir notre incroyable parc !</p>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
    </div>
</section>

<!-- Presentation zoo section -->

<section>
    <div class="presentation-zoo">
        <h1>Présentation du zoo</h1>
        <div class="main-presentation">
            <p>Notre zoo est situé en France près de la forêt de Brocéliande, en bretagne depuis 1960. Nous
                disposons
                énormément d’animaux qui sont répartis dans différents habitats.</p>
            <p>Un service de restauration est mise à disposition, une visite du parc avec un guide entièrement
                gratuit
                ainsi qu’une visite du zoo en petit train.</p>
            <p>Tout notre zoo dispose d’une énergie verte et nous en sommes très fier.</p>
        </div>
    </div>
</section>

<!-- Services section -->

<section>
    <div class="activities">
        <h1>Venez découvrir tout nos services !</h1>
        <div class="gallery">
            <div class="gallery-item">
                <img src="./Ressources/zoo-173640 1.png" alt="Visite du parc en petit train">
                <p>Visite du parc en petit train</p>
            </div>
            <div class="gallery-item">
                <img src="./Ressources/zoo-173640 2.png" alt="Restauration<">
                <p>Restauration</p>
            </div>
            <div class="gallery-item">
                <img src="./Ressources/zoo-173640 3.png" alt="Visite du parc avec un guide (gratuit)">
                <p>Visite du parc avec un guide (gratuit)</p>
            </div>
        </div>
        <button class="btn"><a href="services.php">Découvrir nos services<i
                    class="fa-solid fa-chevron-right"></i></button></a>
    </div>
</section>

<!-- Habitats section -->

<section>
    <div class="habitats">
        <h1>Découvrez en ce moment trois habitats !</h1>
        <div class="content">
            <div class="photos">
                <div class="thumbnails">
                    <img src="./Ressources/zebras-4258909_1920.jpg" alt"">
                    <div class="black"></div>
                    <div class="title">Biome Savane</div>
                </div>
                <div class="thumbnails">
                    <img src="./Ressources/crocodile-2878249_1920.jpg"
                        alt="digital portrait of woman holding her face with a red background">
                    <div class="black"></div>
                    <div class="title">Biome Marais</div>
                </div>
                <div class="thumbnails">
                    <img src="./Ressources/gorilla-3373856_1920.jpg" alt="digital portrait of Gemma Arterton as Gretel">
                    <div class="black"></div>
                    <div class="title">Biome Jungle</div>
                </div>
            </div>
        </div>
        <button class="btn"><a href="habitats.php">Découvrir nos habitats<i
                    class="fa-solid fa-chevron-right"></i></button></a>
    </div>
</section>

<!-- Section slider animaux -->

<section>
    <div class="animaux-savane">
        <h1>Découvrez tout les animaux du zoo !</h1>
        <div class="slider">
            <div class="slides">
                <div class="slide">
                    <img src="./Ressources/lion-7148207_1920.jpg" alt="Lion">
                    <div class="caption">Le Lion Alias "Simba"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/animal-4917802_1920.jpg" alt="Zebre">
                    <div class="caption">Le Zèbre Alias "Nora"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/zoo-5301038_1920 (1).jpg" alt="Girafe">
                    <div class="caption">La Girafe Alias "Sofy"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/rhino-1895111_1920.jpg" alt="Rhinocéros">
                    <div class="caption">Le Rhinocéros Alias "Sahib"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/otter-7228458_1920.jpg" alt="Loutre">
                    <div class="caption">La Loutre Alias "Moutig"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/animal-8169942_1920.jpg" alt="Alligator">
                    <div class="caption">L'Alligator Alias "Hector"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/turtle-5568624_1920.jpg" alt="Tortue">
                    <div class="caption">La Tortue Alias "Léo"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/heron-5218997_1920.jpg" alt="Héron">
                    <div class="caption">Le Héron Alias "Adia"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/jaguar-8104230_1920.jpg" alt="Jaguar">
                    <div class="caption">Le Jaguar Alias "Balam"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/toucan-4240727_1920.jpg" alt="Toucan">
                    <div class="caption">Le Toucan Alias "Rubis"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/tapir-7504609_1920.jpg" alt="Toucan">
                    <div class="caption">Le Tapir Alias "Bosco"</div>
                </div>
                <div class="slide">
                    <img src="./Ressources/gorilla-4547188_1920.jpg" alt="Gorille">
                    <div class="caption">Le Gorille Alias "Bobby"</div>
                </div>
            </div>
            <div class="controls">
                <button class="prev">⟨</button>
                <button class="next">⟩</button>
            </div>
        </div>

        <!-- Script pour slider -->

        <script src="./Script/script-slider.js"></script>

    </div>
</section>

<!-- Avis -->

<h1 class="title-avis">Avis de nos visiteurs !</h1>

<?php

include ("./Librairies/testimonials.php");

?>

<!-- Footer -->

<?php

include ("./Librairies/footer.php");

?>

</body>

</html>
