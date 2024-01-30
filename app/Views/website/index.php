
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .container-center {
            position: absolute;
            top: 50%;
            right: 20%;
            transform: translate(50%, -50%);
            text-align: left;
            color: white;
            max-width: 40%;
            padding: 20px;
            margin: 30px;
            border-radius: 10px;
        }

        /* Adjusted styles for better visibility */
        .container-center h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .container-center h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .container-center p {
            font-size: 1.5em;
            margin: 0 auto;
        }

        .social-icons img {
            width: 30px; 
            height: 30px; 
            margin-top: 15px;
            margin-right: 1px;
            margin-left: 2px;
        }
        .icons a:hover {
            fill: #1da1f2;
        }

</style>

<body>
    <div style="overflow: hidden; position: relative;">
        <img src="assets/dagat.png" class="img-fluid" alt="me.jpg" style="width: 100%; height: 100vh; object-fit: cover;">

        <div class="container-center">
            <h1 class="title is-1 has-text-weight-bold" style="color: white;">Welcome!</h1>
            <h2 class="title is-1 has-text-weight-bold" style="color: white;">I'm Bianca Amor Mazarate</h2>
            <p style="font-size: 15px; background-color: rgba(0, 0, 0, 0.3); padding: 10px;">I am a fourth-year student pursuing a Bachelor of Science in Information Technology. 
                Want to learn more about me? 
                Join me as you explore the pages that unfold my journey and experiences!
            </p>
            <div class="row">
                <ul class="social-icons">
                    <a href="https://www.facebook.com/biancakesssz/" target="_blank"><img src="assets/icons/facebook.svg" class="icons"></a>
                    <a href="https://www.instagram.com/bianxa.amore/" target="_blank"><img src="assets/icons/instagram.svg" class="icons"></a>
                    <a href="https://twitter.com/your-twitter-handle" target="_blank"><img src="assets/icons/twitter.svg" class="icons"></a>
                    <a href="https://www.linkedin.com/in/bianca-amor-mazarate-8bba0224b/" target="_blank"><img src="assets/icons/linkedin.svg" class="icons"></a>
                    <a href="https://twitter.com/your-twitter-handle" target="_blank"><img src="assets/icons/telegram.svg" class="icons"></a>

                </ul>
            </div>
            <button class="button is-primary is-normal is-rounded"  style="margin-top: 10px;"><a href="<?= base_url("about")?>" style="color: white; ">Get started</a></button>
        </div>
    </div>
<?= $this->endSection() ?>
</body>

</html>