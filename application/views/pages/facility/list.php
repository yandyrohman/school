<div class="page-layout-list">
    <?php foreach($content as $data) : ?>
        <a class="page-layout-list-item" href="<?= base_url('facility/show/'.$data->id) ?>">
            <img class="page-layout-list-item-img" src="<?= base_url('img/facility/'.$data->photo) ?>" draggable="false" />
            <div class="page-layout-list-item-title"><?= $data->name ?></div>
            <div class="page-layout-list-item-text"><?= limit_string($data->text, 300) ?></div>
        </a>
    <?php endforeach; ?>
</div>