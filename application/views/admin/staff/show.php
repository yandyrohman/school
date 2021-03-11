<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Detail Staff</b>
    </div>
    <div class="card-body">

        <div class="form-group">
          <label>Foto</label><br/>
          <img src="<?= base_url('img/staff/'.$data->photo) ?>" style="width: 100px">
        </div>
        <hr/>

        <div class="form-group">
          <label>NIP</label><br/>
          <b><?= $data->teacher_number ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Nama</label><br/>
          <b><?= $data->name ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Jabatan</label><br/>
          <b>
            <?php
              switch($data->position) :
                case 'a' : echo 'Kepala Sekolah'; break;
                case 'b' : echo 'Wakil Kepala Sekolah'; break;
                case 'c' : echo 'Kepala Jurusan'; break;
                case 'd' : echo 'Guru'; break;
                case 'e' : echo 'Staff TU'; break;
                case 'f' : echo 'Satpam'; break;
              endswitch;                   
            ?>
          </b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Jenis Kelamin</label><br/>
          <b>
            <?php
              switch($data->gender) :
                case 'L' : echo 'Laki-laki'; break;
                case 'P' : echo 'Perempuan'; break;
              endswitch;                   
            ?>
          </b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Tanggal Lahir</label><br/>
          <b><?= $data->birth_date ?></b>
        </div>
        <hr/>
          
        <div class="form-group">
          <label>Tempat Lahir</label><br/>
          <b><?= $data->birth_place ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Agama</label><br/>
          <b><?= strtoupper($data->religion) ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Alamat</label><br/>
          <b><?= $data->address ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Desa</label><br/>
          <b><?= $data->village ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Kecamatan</label><br/>
          <b><?= $data->district ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Kabupaten</label><br/>
          <b><?= $data->city ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Provinsi</label><br/>
          <b><?= $data->province ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Email</label><br/>
          <b><?= $data->email ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Nomor HP</label><br/>
          <b><?= $data->phone ?></b>
        </div>
        <hr/>

        <div class="d-flex">
          <a class="btn btn-primary mt-2" href="<?= base_url('admin/staff') ?>">KEMBALI</a>
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