<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Prestasi</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/achievment/update/'.$data->id) ?>" method="POST" enctype="multipart/form-data">
      <?php else : ?>
        <form action="<?= base_url('admin/achievment/store') ?>" method="POST" enctype="multipart/form-data">
      <?php endif; ?>

        <div class="form-group">
          <label>Nama Pertandingan</label>
          <input 
            name="title" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Judul Tampilan" 
            required
            value="<?= $data->title ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Lokasi Pertandingan</label>
          <input 
            name="location" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Judul Tampilan" 
            required
            value="<?= $data->location ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Juara Ke</label>
          <input 
            name="rank" 
            class="form-control" 
            type="text" 
            placeholder="Juara Ke" 
            required
            value="<?= $data->rank ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Tahun</label>
          <input 
            name="year" 
            class="form-control" 
            type="number" 
            placeholder="Masukan Tahun" 
            required
            value="<?= $data->year ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Kisah Pertandingan</label><br>
          <textarea 
            name="story"
            class="form-control" 
            placeholder="Ceritakan apa yang terjadi saat pertandingan"
          ><?= $data->story ?? '' ?></textarea>
        </div>

        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="photo"/>
          <?php if (isset($data->id)) : ?>
            <small class="form-text text-warning">
              * BIARKAN KOSONG JIKA TIDAK INGIN DIUBAH
            </small>
          <?php endif; ?>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/achievment') ?>">BATAL</a>
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