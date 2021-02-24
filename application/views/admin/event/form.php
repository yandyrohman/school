<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Tambah Pengumuman</b>
    </div>
    <div class="card-body">
      <form action="">

        <div class="form-group">
          <label>Nama Pengumuman</label>
          <input class="form-control" type="text" placeholder="Masukan Nama Pengumuman" required>
        </div>

        <div class="form-group">
          <label>Tulis Pengumuman</label>
          <textarea class="ckeditor" id="ckedtor"></textarea>  
        </div>

        <div class="form-group">
          <label>Status Pengumuman</label><br>
          <input type="radio" name="status" value="active" id="status-active">
          <label for="status-active">Aktif</label>
          <input class="ml-3" type="radio" name="status" value="non-active" id="status-non-active"> 
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