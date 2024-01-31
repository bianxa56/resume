<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <body>
        <h1>My Favorite Movies</h1>
        <div class="container">
        <a class="button is-primary" href="<?= base_url('createMovie') ?>">Create</a>
        <a class="button is-info" href="<?= base_url('editMovie') ?>">Edit</a>
        
        <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Movie Title</th>
                        <th>Movie Synopsis</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie): ?>
                        <tr>
                            <td><?= $movie['movie_title'] ?></td>
                            <td><?= $movie['movie_synopsis'] ?></td>
                            <td><a class="button is-link" href="<?= base_url('editMovie/') . $movie['id'] ?>">Edit</a></td>
                            <td><a class="button is-link is-danger" href="<?= base_url('deleteMovie/') . $movie['id'] ?>">Remove</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>