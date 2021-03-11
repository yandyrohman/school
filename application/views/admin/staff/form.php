<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Staff</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/staff/update/'.$data->id) ?>" method="POST" enctype="multipart/form-data">
      <?php else : ?>
        <form action="<?= base_url('admin/staff/store') ?>" method="POST" enctype="multipart/form-data">
      <?php endif; ?>

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
          <label>NIP</label>
          <input 
            name="teacher_number" 
            class="form-control" 
            type="text" 
            placeholder="Masukan NIP" 
            required
            value="<?= $data->teacher_number ?? '' ?>"
          >
        </div>

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
          <label>Jabatan</label>
          <select name="position" required class="form-control">
            <option value="" hidden>- Pilih Jabatan -</option>
            <option value="a" <?= ($data->position ?? '') == 'a' ? 'selected' : '' ?>>Kepala Sekolah</option>
            <option value="b" <?= ($data->position ?? '') == 'b' ? 'selected' : '' ?>>Wakil Kepala Sekolah</option>
            <option value="c" <?= ($data->position ?? '') == 'c' ? 'selected' : '' ?>>Kepala Jurusan</option>
            <option value="d" <?= ($data->position ?? '') == 'd' ? 'selected' : '' ?>>Guru</option>
            <option value="e" <?= ($data->position ?? '') == 'e' ? 'selected' : '' ?>>Staff TU</option>
            <option value="f" <?= ($data->position ?? '') == 'f' ? 'selected' : '' ?>>Satpam</option>
          </select>
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="gender" required class="form-control">
            <option value="" hidden>- Pilih Jenis Kelamin -</option>
            <option value="L" <?= ($data->gender ?? '') == 'L' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= ($data->gender ?? '') == 'P' ? 'selected' : '' ?>>Perempuan</option>
          </select>
        </div>

        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input 
            type="date" 
            name="birth_date" 
            required 
            class="form-control"
            value="<?= $data->birth_date ?? '' ?>"
          >
        </div>
          
        <div class="form-group">
          <label>Tempat Lahir</label>
          <input 
            name="birth_place" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Tempat Lahir" 
            required
            value="<?= $data->birth_place ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Agama</label>
          <select name="religion" class="form-control" required>
            <option value="" hidden>- Pilih Agama -</option>
            <option value="islam" <?= ($data->religion ?? '') == 'islam' ? 'selected' : '' ?>>Islam</option>
            <option value="protestan" <?= ($data->religion ?? '') == 'protestan' ? 'selected' : '' ?>>Protestan</option>
            <option value="katolik" <?= ($data->religion ?? '') == 'katolik' ? 'selected' : '' ?>>Katolik</option>
            <option value="hindu" <?= ($data->religion ?? '') == 'hindu' ? 'selected' : '' ?>>Hindu</option>
            <option value="budha" <?= ($data->religion ?? '') == 'budha' ? 'selected' : '' ?>>Budha</option>
            <option value="konghucu" <?= ($data->religion ?? '') == 'konghucu' ? 'selected' : '' ?>>Konghucu</option>
          </select>
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input 
            name="address" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Alamat" 
            required
            value="<?= $data->address ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Desa</label>
          <input 
            name="village" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Desa" 
            required
            value="<?= $data->village ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Kecamatan</label>
          <input 
            name="district" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Kecamatan" 
            required
            value="<?= $data->district ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Kabupaten</label>
          <input 
            name="city" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Kabupaten" 
            required
            value="<?= $data->city ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Provinsi</label>
          <input 
            name="province" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama" 
            required
            value="<?= $data->province ?? '' ?>"
          >
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
          <label>Nomor HP</label>
          <input 
            name="phone" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nomor HP" 
            required
            value="<?= $data->phone ?? '' ?>"
          >
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/staff') ?>">BATAL</a>
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