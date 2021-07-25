<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Galeri</b>
      <a class="btn btn-primary btn-sm" href="<?= base_url('admin/gallery/create') ?>" style="justify-self: end">
        <i class="material-icons">add</i>
        <span>TAMBAH</span>
      </a>
    </div>
    <div class="card-body">
      <?php if(isset($msg)) : ?>
        <?= $msg ?>
      <?php endif; ?>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul Galeri</th>
            <th>Jumlah Foto</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>

          <?php if(count($datas) == 0) : ?>
            <tr>
              <td colspan="4" class="text-center">- data kosong -</td>
            </tr>
          <?php endif; ?>
          
          <?php foreach($datas as $i => $data) : ?>
            <tr>
              <td><?= $i + 1 ?></td>
              <td><?= $data->title ?></td>
              <td><?= $data->count ?></td>
              <td class="flex">
                <a class="btn btn-sm btn-primary" href="<?= base_url('admin/gallery/edit/'.$data->id) ?>">
                  <i class="material-icons">collections</i>
                </a>
                <a class="btn btn-sm btn-danger ml-1" href="#" onclick="deleteData(<?= $data->id ?>)">
                  <i class="material-icons">delete</i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  function deleteData(id) {
    if(confirm('Hapus data ini ?')) {
      window.location = `<?= base_url() ?>admin/gallery/delete/${id}`
    }
  }
</script>

<style>
  .card-header {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
  }

  .btn-sm {
    width: max-content;
    height: 30px;
    border-radius: 3px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

    .btn-sm i {
      font-size: 17px;
    }

  .flex {
    display: flex;
  }

  .img {
    width: 100px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.20);
  }

</style>