<html>
<body>
    <?= $this->extend('layouts/main') ?>

    <?= $this->section('content') ?>
    <div>
        <h6 class="title is-2 has-text-weight-bold has-text-centered" style="color: #638889; margin-top: 20px;">Education</h6>
    </div>

    <div class="container text-center" style="margin-top: 30px;">
        <div class="columns">
            <?= $this->include('partials/school/ses') ?>
            <?= $this->include('partials/school/cnchs') ?>
            <?= $this->include('partials/school/wvsu') ?>
        </div>    
    </div>
    <div>
      <h6 class="title is-2 has-text-weight-bold has-text-centered" style="color: #638889; margin-top: 20px; margin-bottom: 30px;">Life as an IT student</h6>
  </div>
<div class="columns" style="margin: 10px;">
    <?= $this->include('partials/itpics/cross') ?>
    <?= $this->include('partials/itpics/lapulapu') ?>
    <?= $this->include('partials/itpics/smart') ?>
    <?= $this->include('partials/itpics/handlink') ?>
</div>
<div class="columns" style="margin: 10px;">
    <?= $this->include('partials/itpics/collegefriends') ?>
    <?= $this->include('partials/itpics/dancepractice') ?>
    <?= $this->include('partials/itpics/akwe22') ?>
    <?= $this->include('partials/itpics/defense') ?>

</div>

<?= $this->endSection() ?>
</body>
</html>
