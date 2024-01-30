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
            <h1 class="title">Create Blog</h1>
            <a class="button is-link" href="<?= base_url('blog') ?>">Index</a>

            <form method="post" action="<?= base_url('blog/store') ?>" class="form">
                <div class="field">
                    <label class="label" for="blog_title">Blog Title:</label>
                    <div class="control">
                        <input class="input" type="text" id="blog_title" name="blog_title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="blog_description">Blog Description:</label>
                    <div class="control">
                        <textarea class="textarea" name="blog_description" id="blog_description"></textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
