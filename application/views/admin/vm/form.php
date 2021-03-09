<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Form Tambah <?= $type == 'visi' ? 'Visi' : 'Misi' ?></b>
    </div>
    <div class="card-body">
      <form action="<?= base_url('admin/vm/store') ?>" method="POST">

        <div class="form-group">
          <label><?= $type == 'visi' ? 'Visi' : 'Misi' ?></label>
          <input 
            name="value" 
            class="form-control" 
            type="text" 
            placeholder="Masukan <?= $type == 'visi' ? 'Visi' : 'Misi' ?> Sekolah" 
            required
          >
        </div>

        <input type="hidden" name="type" value="<?= $type == 'visi' ? 'visi' : 'misi' ?>">

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/vm/index/'.$type) ?>">BATAL</a>
        </div>
      
      </form>
    </div>
  </div>
</div>

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