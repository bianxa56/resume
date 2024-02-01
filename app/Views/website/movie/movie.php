
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <style>
        .card.mb-4 {
            background-color: white;
        }
        .card-footer {
            border-top: 1px solid #ccc; 
        }
        .card-content p.title,
        .card-content p.subtitle {
            font-size: 20px; 
            color: black;
        }
    </style>
    <?= $this->extend('layouts/main') ?>

    <?= $this->section('content')?>

    <body>
        <h1 class="title is-2 has-text-weight-bold has-text-centered mt-2" style="color: #638889;">My Favorite Movies</h1>
        <div class="container">
            
            <div class="container">
                <?php foreach ($movies as $movie): ?>
                    <div class="card mb-4">
                        <div class="card-content">
                            <p class="title">
                                <?= $movie['movie_title'] ?>
                            </p>
                            <p class="subtitle">
                                <?= $movie['movie_genre'] ?> · <?= $movie['movie_date'] ?>
                            </p>
                            <p class="subtitle">
                                <?= $movie['movie_synopsis'] ?>
                            </p>
                        </div>    
                        <footer class="card-footer">
                            <p class="card-footer-item">
                                <span>
                                    <a href="<?= base_url('edit-movie/') . $movie['id'] ?>">Edit </a>
                                </span>
                            </p>
                            <p class="card-footer-item">
                                <span>
                                    <a href="<?= base_url('delete-movie/') . $movie['id'] ?>" style="color: red;">Remove</a>
                                </span>
                            </p>
                        </footer>
                    </div>
                <?php endforeach; ?>   
            </div>

            <a class="button is-primary is-pulled-right mt-2" href="<?= base_url('create-movie') ?>">Add Movie</a>
        </div>
    </body>
</html>
<?= $this->endSection() ?>