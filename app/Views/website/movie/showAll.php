<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Edit Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    </head>
    <body>
    <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Synopsis</th>
                        <th>Genre</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie): ?>
                        <tr>
                            <td><?= $movie['movie_title'] ?></td>
                            <td><?= $movie['movie_synopsis'] ?></td>
                            <td><?= $movie['movie_genre'] ?></td>
                            <td><a class="button is-link" href="<?= base_url('editMovie/') . $movie['id'] ?>">Edit</a></td>
                            <td><a class="button is-link is-danger" href="<?= base_url('deleteMovie/') . $movie['id'] ?>">Remove</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </body>
</html>