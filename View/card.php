<div class="col-4 py-4">
    <div class="card">
        <img src="<?= $poster_path ?>" class="card-img-top" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <p class="card-text">
                <?= substr($overview, 0, 250) ?>
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <img class="flag" src="<?= $original_language ?>" alt="<?= $title ?>">
            </li>
            <li class="list-group-item">
                <?= $release_date ?>
            </li>
            <li class="list-group-item">
                <?= $vote_average ?>
            </li>
            <li class="list-group-item">
                <?= $genre ?>
            </li>
        </ul>
    </div>
</div>