<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Form User</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/users/update/'.$data->id) ?>" method="POST" enctype="multipart/form-data">
      <?php else : ?>
        <form action="<?= base_url('admin/users/store') ?>" method="POST" enctype="multipart/form-data">
      <?php endif; ?>

        <?php if(isset($_GET['err_username'])) : ?>
          <div class="alert alert-danger">Username telah digunakan!</div>
        <?php elseif(isset($_GET['err_password'])) : ?>
          <div class="alert alert-danger">Ulangi password yang sama!</div>
        <?php endif; ?>

        <div class="form-group">
          <label>Nama</label>
          <input 
            name="name" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama" 
            required
            value="<?= $data->name ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Username</label>
          <input 
            name="username" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Username" 
            required
            value="<?= $data->username ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Password</label>
          <?php if(isset($data->id)) : ?>
            <input 
              name="password" 
              class="form-control" 
              type="text" 
              placeholder="Masukan Password" 
              required
              value="<?= $data->password ?? '' ?>"
            >
          <?php else : ?>
            <div class="row">
              <div class="col-6">
                <input 
                  name="password" 
                  class="form-control" 
                  type="text" 
                  placeholder="Masukan Password" 
                  required
                >
              </div>
              <div class="col-6">
                <input 
                  name="password2" 
                  class="form-control" 
                  type="text" 
                  placeholder="Masukan Password Lagi" 
                  required
                >
              </div>
            </div>
          <?php endif; ?> 
        </div>

        <div class="form-group">
          <label>Email</label>
          <input 
            name="email" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Email" 
            required
            value="<?= $data->email ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Role</label>
          <select name="role" required class="form-control">
            <option value="" hidden>- Pilih Role -</option>
            <option value="1" <?= ($data->role ?? '') == '1' ? 'selected' : '' ?>>Administrator</option>
            <option value="2" <?= ($data->role ?? '') == '2' ? 'selected' : '' ?>>Staff TU</option>
            <option value="3" <?= ($data->role ?? '') == '3' ? 'selected' : '' ?>>Staff Umum</option>
          </select>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/users') ?>">BATAL</a>
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