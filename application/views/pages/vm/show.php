<div style="margin-bottom: 30px; text-align: center">
    <h2>VISI</h2>
    <?php foreach($visi as $item) : ?>
        <span>" <?= $item->value ?> "</span>
    <?php endforeach; ?>
</div>
<div style="margin-bottom: 20px; text-align: center">
    <h2>MISI</h2>
    <?php foreach($misi as $i => $item) : ?>
        <div><?= $i+1 ?> - <?= $item->value ?></div>
    <?php endforeach; ?>
</div>