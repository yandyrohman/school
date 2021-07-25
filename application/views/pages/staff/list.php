<div class="page-layout-list">
    <?php foreach($content as $data) : ?>
        <div class="page-layout-list-item">
            <img class="page-layout-list-item-img" src="<?= base_url('img/staff/'.$data->photo) ?>" draggable="false" />
            <div class="page-layout-list-item-title"><?= $data->name ?></div>
            <div class="page-layout-list-item-text"><?= staff_position($data->position) ?></div>
        </div>
    <?php endforeach; ?>
</div>