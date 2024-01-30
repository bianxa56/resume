<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Home</h1>
            <a class="button is-primary" href="<?= base_url('blog/create') ?>">Create</a>
            <a class="button is-info" href="<?= base_url('blog/edit') ?>">Edit</a>

            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Blog Title</th>
                        <th>Blog Description</th>
                        <th>Command</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogs as $blog): ?>
                        <tr>
                            <td><?= $blog['blog_title'] ?></td>
                            <td><?= $blog['blog_description'] ?></td>
                            <td><a class="button is-link" href="<?= base_url('blog/edit/') . $blog['blog_id'] ?>">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
