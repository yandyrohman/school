<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Extrakurikuler</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/extra/update/'.$data->id) ?>" method="POST" enctype="multipart/form-data">
      <?php else : ?>
        <form action="<?= base_url('admin/extra/store') ?>" method="POST" enctype="multipart/form-data">
      <?php endif; ?>

        <div class="form-group">
          <label>Nama Extrakurikuler</label>
          <input 
            name="title" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama Extrakulikuler" 
            required
            value="<?= $data->name ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Hari Pelaksanaan</label>
          <input 
            name="schedule" 
            class="form-control" 
            type="text" 
            placeholder="Misal : Senin, Selasa, Rabu" 
            required
            value="<?= $data->schedule ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Foto</label>
          <input type="file" class="form-control" name="photo"/>
          <?php if (isset($data->id)) : ?>
            <small class="form-text text-warning">
              * BIARKAN KOSONG JIKA TIDAK INGIN DIUBAH
            </small>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label>Penjelasan</label><br>
          <textarea 
            name="text"
            class="form-control" 
            placeholder="Masukan Penjelasan"
          ><?= $data->text ?? '' ?></textarea>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/extra') ?>">BATAL</a>
        </div>
      
      </form>
    </div>
  </div>
</div>

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