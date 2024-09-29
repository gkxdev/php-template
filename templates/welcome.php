<?php defined('GKXDEV') or die(); ?>
<?php $this->render('layouts/header.php'); ?>

<p>Welcome, <strong><?=$name?>!</strong></p>

<ul>
    <?php foreach ($skills as $skill): ?>
        <li><?=$skill?></li>
    <?php endforeach; ?>
</ul>

<?php $this->render('layouts/footer.php'); ?>