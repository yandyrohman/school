<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Siswa</b>
    </div>
    <div class="card-body">
      <?php if(isset($data->id)) : ?>
        <form action="<?= base_url('admin/student/update/'.$data->id) ?>" method="POST" enctype="multipart/form-data">
      <?php else : ?>
        <form action="<?= base_url('admin/student/store') ?>" method="POST" enctype="multipart/form-data">
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
          <label>NIS</label>
          <input 
            name="student_number" 
            class="form-control" 
            type="text" 
            placeholder="Masukan NIS" 
            required
            value="<?= $data->student_number ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>NISN</label>
          <input 
            name="national_student_number" 
            class="form-control" 
            type="text" 
            placeholder="Masukan NISN" 
            required
            value="<?= $data->national_student_number ?? '' ?>"
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
          <label>Kelas</label>
          <select name="class_id" required class="form-control">
            <option value="" hidden selected>- Pilih Kelas -</option>
            <?php foreach($classes as $class) : ?>
              <option value="<?= $class->id ?>" <?= ($data->class_id ?? '') == $class->id ? 'selected' : '' ?>>
                <?= $class->name ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="gender" required class="form-control">
            <option value="" hidden>- Pilih Jenis Kelamin -</option>
            <option value="L" <?= ($data->gender ?? '') == 'L' ? 'selected' : '' ?> selected>Laki-laki</option>
            <option value="P" <?= ($data->gender ?? '') == 'P' ? 'selected' : '' ?>>Perempuan</option>
          </select>
        </div>

        <div class="form-group">
          <label>Nama Ayah</label>
          <input 
            name="dad_name" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama Ayah" 
            required
            value="<?= $data->dad_name ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Nama Ibu</label>
          <input 
            name="mom_name" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama Ibu" 
            required
            value="<?= $data->mom_name ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input 
            type="date" 
            name="birth_date" 
            required 
            class="form-control"
            value="2000-12-12"
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
            <option value="islam" <?= ($data->religion ?? '') == 'islam' ? 'selected' : '' ?> selected>Islam</option>
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