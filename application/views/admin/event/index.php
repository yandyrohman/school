<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Pengumuman</b>
      <a class="btn btn-primary btn-sm" href="<?= base_url('admin/event/create') ?>" style="justify-self: end">
        <i class="material-icons">add</i>
        <span>TAMBAH</span>
      </a>
    </div>
    <div class="card-body">
      <?php if($msg) : ?>
        <?= $msg ?>
      <?php endif; ?>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Status</th>
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
              <td>
                <?php if($data->is_active == 1) : ?>
                  <span class="label label-success label-rounded">AKTIF</span>
                <?php else : ?>
                  <span class="label label-danger label-rounded">NON AKTIF</span>
                <?php endif; ?>
              </td>
              <td class="flex">
                <a class="btn btn-sm btn-primary" href="<?= base_url('admin/event/edit/'.$data->id) ?>">
                  <i class="material-icons">create</i>
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
      window.location = `<?= base_url() ?>admin/event/delete/${id}`
    }
  }
</script>

<style>
  .notif-green {
    background:  #4caf50;
    color: #fff;
    border-radius: 5px;
  }

  .notif-red {
    background:  #f44336;
    color: #fff;
    border-radius: 5px;
  }

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

</style>