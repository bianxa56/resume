<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-HnbUz87HznmWg2rOKNx8VmHDbtdNlq0U9V0Zay4FpgeL5YkQe8jP9WXiQvA1bfzIqFzjTXLCBftXDmMty9tlvw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/bulma.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->
    <!-- <link rel="stylesheet" href="index.js"> -->
</head>

<style>
    .navbar a:hover {
        background-color: #9DBC98;
        
    }

    

</style>

<body>
<nav class="navbar" style="background-color: #638889;">
    <div class="navbar-end">
        <a class="navbar-item" style="color: white;" href="<?= base_url("index")?>">Home</a>
        <a class="navbar-item" style="color: white;" href="<?= base_url("about")?>">About me</a>
        <a class="navbar-item" style="color: white;" href="<?= base_url("education")?>">Education</a>
    </div>
</nav>

<?= $this->renderSection('content')?>
</body>
</html>