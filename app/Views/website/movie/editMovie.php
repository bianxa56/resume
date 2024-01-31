<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Edit Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Edit your movie</h1>
            <a class="button is-primary" href=<?= base_url('movie') ?>>Index</a>
            <a class="button is-info" href=<?= base_url('createMovie') ?>>Create</a>

            <form method="post" action="<?= base_url('updateMovie/') . $movie["id"]?>">
                <label for="movie_title" class="label">Movie Title:</label>
                <div class="control">
                    <input class="input" type="text" id="movie_title" name="movie_title" value="<?= $movie["movie_title"] ?>">
                </div>
                
                <label for="movie_genre" class="label">Movie Genre:</label>
                <div class="control">
                    <input class="input" type="text" id="movie_genre" name="movie_genre" value="<?= $movie["movie_genre"] ?>">
                </div>

                <label for="movie_synopsis" class="label">Movie Synopsis:</label>
                <div class="control">
                    <textarea class="textarea" name="movie_synopsis" id="movie_synopsis"><?= $movie["movie_synopsis"] ?></textarea>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-success mt-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>