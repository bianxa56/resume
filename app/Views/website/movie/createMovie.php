<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Favorite Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <body>
        <div class="container">
            <section class="section">
                <h1 class="is-size-1 has-text-centered">Add Movie</h1>
            </section>

            <form method="post" action="<?= base_url('storeMovie') ?>" class="form">
                
                <div class="field">
                    <label class="label" for="movie_title">Movie Title:</label>
                    <div class="control">
                        <input class="input" type="text" id="movie_title" name="movie_title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="movie_genre">Movie Genre:</label>
                    <div class="control">
                        <input class="input" type="text" id="movie_genre" name="movie_genre">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="movie_synopsis">Movie Synopsis:</label>
                    <div class="control">
                        <textarea class="textarea" name="movie_synopsis" id="movie_synopsis"></textarea>
                    </div>
                </div>

                

                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>