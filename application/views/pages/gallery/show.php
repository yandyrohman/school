<div class="page-layout-show-gallery-text">
    <?= $content ?>
</div>
<div class="page-layout-show-gallery">
    <?php foreach($photos as $photo) : ?>
        <img src="<?= base_url('img/gallery/'.$photo->photo) ?>" onclick="window.open('<?= base_url('img/gallery/'.$photo->photo) ?>')" />
    <?php endforeach; ?>
</div>