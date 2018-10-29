<section class="s-intro" id="intro">
    <h1 class="main-healdine"><?= $site->title()->html() ?></h1>
    <h2 class="s-intro__subtitle"><?= $site->subtitle()->html() ?></h2>
    <div class="s-intro__content">
      <?php snippet('modules/about', array('data'=> $data)) ?>
      <?php snippet('modules/contact') ?>
    </div>
</section>