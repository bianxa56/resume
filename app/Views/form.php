<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form</title>
        <link rel="stylesheet" href="assets/bulma.css">
    </head>

    <body>
    <div class="container" method="post" enctype="multiplepart/form-data">

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" name="email" type="email" placeholder="Email input">
            </div>
        </div>

        <div class="field">
            <label class="label">Select type of user to log in</label>
            <div class="control">
                <div class="select">
                    <select name="category" class="form-control">
                        <option>Select dropdown</option>
                        <option value="">
                            <?php foreach ($categories as $cat) : ?>
                                <option value="<?= $cat ?>">
                                    <?= $cat ?>
                                </option>
                            <?php endforeach; ?>
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input class="input" name="password" type="password" placeholder="Enter password">
            </div>
        </div>

        <div class="file has-name">
            <label class="file-label">
                <input class="file-input" type="file" name="theFile">
                <span class="file-cta">
                    <span class="file-label">
                        Choose a file…
                    </span>
                </span>
                <span class="file-name">
                        Filename
                </span>
            </label>
        </div>

        <div class="field is-grouped margin-small">
            <div class="control mt-3">
                <button class="button is-link">Submit</button>
            </div>

            <div class="control mt-3">
                <button class="button is-link is-light">Cancel</button>
            </div>
        </div>
        </div>
    </body>
</html>