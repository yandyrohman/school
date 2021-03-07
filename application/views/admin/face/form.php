<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Tampilan Depan</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/face/update/'.$data->id) ?>" method="POST">
      <?php else : ?>
        <form action="<?= base_url('admin/face/store') ?>" method="POST">
      <?php endif; ?>

        <div class="form-group">
          <label>Judul</label>
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
          <label>Gambar</label>
          <input type="file" class="form-control" />
        </div>

        <div class="form-group">
          <label>Text Tampilan</label><br>
          <textarea 
            class="form-control" 
            placeholder="Masukan teks tampilan"
            value="<?= $data->text ?? '' ?>"
          ></textarea>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">TAMBAH</button>
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