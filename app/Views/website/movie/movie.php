<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <body>
        <h1 class="title is-size-1 has-text-centered">My Favorite Movies</h1>
        <div class="container">
            
            <div class="container">
                <?php foreach ($movies as $movie): ?>
                    <div class=card>
                        <div class="card-content">
                            <p class="title">
                                <?= $movie['movie_title'] ?>
                            </p>
                            <p class="subtitle">
                                <?= $movie['movie_genre'] ?> .  1990
                            </p>
                            <p class="subtitle">
                                <?= $movie['movie_synopsis'] ?>
                            </p>
                        </div>    
                        <footer class="card-footer">
                            <p class="card-footer-item">
                            <span>
                                <a href="<?= base_url('editMovie/') . $movie['id'] ?>">Edit </a>
                            </span>
                            </p>
                            <p class="card-footer-item">
                            <span>
                                <a href="<?= base_url('deleteMovie/') . $movie['id'] ?>" style="color: red;">Remove</a>
                            </span>

                            </p>
                        </footer>
                    </div>
                <?php endforeach; ?>   
            </div>

            <a class="button is-primary is-pulled-right mt-2" href="<?= base_url('createMovie') ?>">Add Movie</a>
        </div>
    </body>
</html>