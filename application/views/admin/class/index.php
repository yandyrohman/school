<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Kelas</b>
      <a class="btn btn-primary btn-sm" href="<?= base_url('admin/classs/create') ?>" style="justify-self: end">
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
            <th>Nama Kelas</th>
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
              <td><?= $data->name ?></td>
              <td class="flex">
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
    let msg = `ANDA YAKIN INGIN HAPUS KELAS INI ? JIKA ANDA MENGHAPUSNYA, MAKA DATA KELAS SISWA AKAN BERNILAI NULL !`;
    if(confirm(msg)) {
      window.location = `<?= base_url() ?>admin/classs/delete/${id}`
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

</style>