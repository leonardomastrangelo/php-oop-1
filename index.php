<?php
include __DIR__ . "/View/header.php";
include __DIR__ . "/Model/Movie.php";
?>
<main class="container">
    <section class="row">
        <!-- tramite un foreach, utilizzo il metodo printCard della classe Movie per stampare tutti i film di $movies -->
        <?php
        foreach ($movies as $key => $movie) {
            $movie->printCard();
        }
        ?>
    </section>
</main>
<?php
include __DIR__ . "/View/footer.php";
?>