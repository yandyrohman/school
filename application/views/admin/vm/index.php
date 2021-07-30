<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Visi Misi</b>
      <a 
        class="btn btn-primary btn-sm" 
        href="<?= base_url('admin/vm/create/'.($type == 'visi' ? 'visi' : 'misi')) ?>" 
        style="justify-self: end"
      >
        <i class="material-icons">add</i>
        <span>TAMBAH</span>
      </a>
    </div>
    <div class="card-body">
      <?php if(isset($msg)) : ?>
        <?= $msg ?>
      <?php endif; ?>

      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a 
            class="nav-link <?= $type == 'visi' ? 'active' : '' ?>" 
            href="<?= base_url('admin/vm/index/visi') ?>"
          >Visi</a>
        </li>
        <li class="nav-item">
          <a 
            class="nav-link <?= $type == 'misi' ? 'active' : '' ?>" 
            href="<?= base_url('admin/vm/index/misi') ?>"
          >Misi</a>
        </li>
      </ul>

      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th><?= $type == 'visi' ? 'Visi' : 'Misi' ?></th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($datas as $i => $data) : ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $data->value ?></td>
            <td class="flex">
              <a 
                class="btn btn-sm btn-danger ml-1" 
                href="#" onclick="deleteData(<?= $data->id ?>, '<?= $data->type ?>')"
              >
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>

        <?php if(count($datas) == 0 && $type == 'visi') : ?>
          <tr>
            <td colspan="3" align="center">Belum ada data visi.</td>
          </tr>
        <?php endif; ?>

        <?php if(count($datas) == 0 && $type == 'misi') : ?>
          <tr>
            <td colspan="3" align="center">Belum ada data misi.</td>
          </tr>
        <?php endif; ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  function deleteData(id, type) {
    if(confirm('Hapus data ini ?')) {
      window.location = `<?= base_url() ?>admin/vm/delete/${id}/${type}`
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