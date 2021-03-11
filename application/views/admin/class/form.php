<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Form Kelas</b>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/classs/store') ?>" method="POST">

        <div class="form-group">
          <label>Nama Kelas</label>
          <input 
            name="name" 
            class="form-control" 
            type="text" 
            placeholder="Misal : 7 A atau X RPL 1" 
            required
          >
        </div>

        <div class="form-group">
          <label>Tingkat</label>
          <select name="grade" required class="form-control">
            <option value="" hidden required>- Pilih Tingkat -</option>
            <?php for($i=1; $i<=12; $i++) : ?>
              <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
          </select>
        </div>

        <div class="form-group">
          <label>Jurusan *(jika ada)</label>
          <select name="major_id" class="form-control">
            <option value="0" selected hidden>- Pilih Jurusan -</option>
            <?php foreach($majors as $major) : ?>
              <option value="<?= $major->id ?>"><?= $major->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="d-flex mt-5">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/face') ?>">BATAL</a>
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