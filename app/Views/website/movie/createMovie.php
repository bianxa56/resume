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
                <h1 class="title is-2 has-text-weight-bold has-text-centered" style="color: #638889;">Add Movie</h1>
            </section>

            <form method="post" action="<?= base_url('store-movie') ?>" class="form">
                
                <div class="field">
                    <label class="label" for="movie-title">Movie Title:</label>
                    <div class="control">
                        <input class="input" type="text" id="movie-title" name="movie-title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="movie-genre">Movie Genre:</label>
                    <div class="control">
                        <input class="input" type="text" id="movie-genre" name="movie-genre">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="movie-date">Date Released:</label>
                    <div class="control">
                        <input class="input" type="text" id="movie-date" name="movie-date">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="movie-synopsis">Movie Synopsis:</label>
                    <div class="control">
                        <textarea class="textarea" name="movie-synopsis" id="movie-synopsis"></textarea>
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