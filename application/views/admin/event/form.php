<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Pengumuman</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/event/update/'.$data->id) ?>" method="POST">
      <?php else : ?>
        <form action="<?= base_url('admin/event/store') ?>" method="POST">
      <?php endif; ?>

        <div class="form-group">
          <label>Nama Pengumuman</label>
          <input 
            name="title" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama Pengumuman" 
            required
            value="<?= $data->title ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Tulis Pengumuman</label>
          <textarea 
            name="text" 
            class="ckeditor" 
            id="ckedtor"
          >
            <?= $data->text ?? '' ?>
          </textarea>  
        </div>

        <div class="form-group">
          <label>Status Pengumuman</label><br>
          <input 
            name="is_active" 
            type="radio" 
            value="1" 
            id="status-active"
            <?= ($data->is_active ?? 0) == 1 ? 'checked' : '' ?>
          >
          <label for="status-active">Aktif</label>
          <input 
            class="ml-3" 
            type="radio" 
            name="is_active" 
            value="0" 
            id="status-non-active"
            <?= ($data->is_active ?? 0) == 0 ? 'checked' : '' ?>
          > 
          <label for="status-non-active">Non Aktif</label>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">UMUMKAN</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('event') ?>">BATAL</a>
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