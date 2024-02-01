<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Edit Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <body>
        <div class="container">
            <section class="section">
                <h1 class="title is-2 has-text-weight-bold has-text-centered" style="color: #638889;">Edit Movie</h1>
            </section>

            <form method="post" action="<?= base_url('update-movie/') . $movie["id"]?>">
                <label for="movie-title" class="label">Movie Title:</label>
                <div class="control">
                    <input class="input" type="text" id="movie-title" name="movie-title" value="<?= $movie["movie_title"] ?>">
                </div>
                
                <label for="movie-genre" class="label">Movie Genre:</label>
                <div class="control">
                    <input class="input" type="text" id="movie-genre" name="movie-genre" value="<?= $movie["movie_genre"] ?>">
                </div>

                <label for="movie-date" class="label">Date Released:</label>
                <div class="control">
                    <input class="input" type="year" id="movie-date" name="movie-date" value="<?= $movie["movie_date"] ?>">
                </div>

                <label for="movie-synopsis" class="label">Movie Synopsis:</label>
                <div class="control">
                    <textarea class="textarea" name="movie-synopsis" id="movie-synopsis"><?= $movie["movie_synopsis"] ?></textarea>
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