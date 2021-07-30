<div class="page-layout-table-download">
    <?php if(count($datas) != 0) : ?>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama File</th>
                <th>Deskripsi</th>
                <th>Link</th>
            </tr>
            <?php foreach($datas as $i => $data) : ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $data->name ?></td>
                    <td><?= $data->summary ?></td>
                    <td>
                        <a href="<?= $data->link ?>" target="_blank">Download</a>    
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <div style="text-align: center">Data download belum ada, silahkan tambahkan di admin.</div>
    <?php endif; ?>
</div>