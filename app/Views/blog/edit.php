<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <h1 class="title is-1">This is the blog edit</h1>
        <a class="button is-primary" href=<?= base_url('blog') ?>>Index</a>
        <a class="button is-info" href=<?= base_url('blog/create') ?>>Create</a>

        <form method="post" action="<?= base_url('blog/update/') . $blog["blog_id"]?>">
            <label for="blog_title" class="label">Blog Title:</label>
            <div class="control">
                <input class="input" type="text" id="blog_title" name="blog_title" value="<?= $blog["blog_title"] ?>">
            </div>

            <label for="blog_description" class="label">Blog Description:</label>
            <div class="control">
                <textarea class="textarea" name="blog_description" id="blog_description"><?= $blog["blog_description"] ?></textarea>
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
