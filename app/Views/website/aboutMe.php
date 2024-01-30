<html>
<body>
    <?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
    <div class="container" >
        <div class="columns">
            <div class="column">
                <figure class="image is-256x256" style="margin: 70px;">
                    <img class="is-rounded"  src="assets/home.jpg">
                </figure>
            </div>                       
            <div class="column">
                <?= $this->include('partials/aboutme-text') ?>
            </div>            
        </div>
        <p class="is-size-4 has-text-weight-semibold" style="color: #638889;"> What are my hobbies? </p>
            <?= $this->include('partials/hobbies') ?>      
        <div class="columns">
            <div class="column">
            <?= $this->include('partials/kpopband') ?>
            </div>
            <div class="column">
                <div class="columns">
                    <div class="column">
                        <img src="assets/twice.jpg" class="img-fluid" alt="Image 1" style="object-fit: cover; height: 100%;">
                    </div>
                </div>
            </div>
              
        </div>

        <p class="is-size-2 has-text-weight-bold" style="margin: 0px 50px 30px 0px; color: #638889; "> Where do I see my self in 5 years? </p>

        <?= $this->include('partials/futureme') ?>  
    </div>
<?= $this-> endSection() ?>
</body>
</html>
