<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Sambutan</b>
    </div>
    <div class="card-body">
      <?php if(isset($msg)) : ?>
        <?= $msg ?>
      <?php endif; ?>
      <form action="<?= base_url('admin/about/update') ?>" method="POST">

        <div class="form-group">
          <label>Nama Sekolah</label>
          <input 
            name="title" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama Sekolah" 
            required
            value="<?= $data->title ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Sambutan</label>
          <textarea
            name="text" 
            class="form-control"
            placeholder="Tulis Sambutan" 
            required
          ><?= $data->text ?? '' ?></textarea>
        </div>

        <div class="form-group">
          <label>Link Video Youtube</label>
          <input 
            name="youtube"
            type="text"
            class="form-control"
            placeholder="Telepon"
            required
            value="<?= $data->youtube ?? '' ?>"
          >
        </div>

        <div class="d-flex justify-content-end" style="margin-top: 50px">
          <button class="btn btn-primary">UPDATE SAMBUTAN</button>
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

  .about-img-wrapper {
    width: max-content;
    background: #ddd;
    padding: 10px;
    border: 1px solid #aaa;
    margin-bottom: 10px;
  }

</style>