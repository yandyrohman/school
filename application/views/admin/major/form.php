<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Jurusan</b>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/major/store') ?>" method="POST" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label>Nama Jurusan</label>
          <input 
            name="name" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Judul Tampilan" 
            required
          >
        </div>

        <div class="form-group">
          <label>Logo Jurusan</label>
          <input type="file" class="form-control" name="photo"/>
          <?php if (isset($data->id)) : ?>
            <small class="form-text text-warning">
              * BIARKAN KOSONG JIKA TIDAK INGIN DIUBAH
            </small>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label>Ceritakan Tentang Jurusan Ini</label><br>
          <textarea 
            name="text"
            class="form-control" 
            placeholder="Ceritakan Tentang Jurusan Ini"
          ></textarea>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/major') ?>">BATAL</a>
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