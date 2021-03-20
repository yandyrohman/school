<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Download Area</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/download/update/'.$data->id) ?>" method="POST">
      <?php else : ?>
        <form action="<?= base_url('admin/download/store') ?>" method="POST">
      <?php endif; ?>

        <div class="form-group">
          <label>Nama File</label>
          <input 
            name="name" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama File" 
            required
            value="<?= $data->name ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Link</label>
          <input 
            name="link" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Link" 
            required
            value="<?= $data->link ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Penjelasan</label><br>
          <textarea 
            name="summary"
            class="form-control" 
            placeholder="Masukan penjelasan"
          ><?= $data->summary ?? '' ?></textarea>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/download') ?>">BATAL</a>
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