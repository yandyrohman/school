<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Detail Siswa</b>
    </div>
    <div class="card-body">

        <div class="form-group">
          <label>Foto</label><br/>
          <img src="<?= base_url('img/student/'.$data->photo) ?>" style="width: 100px">
        </div>
        <hr/>

        <div class="form-group">
          <label>NIS</label><br/>
          <b><?= $data->student_number ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>NISN</label><br/>
          <b><?= $data->national_student_number ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Nama</label><br/>
          <b><?= $data->name ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Kelas</label><br/>
          <b>
            <?php if($data->class_name != '') : ?>
              <?= $data->class_name ?>
            <?php else : ?>
              -
            <?php endif; ?>
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
          <label>Nama Ayah</label><br/>
          <b><?= $data->dad_name ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Nama Ibu</label><br/>
          <b><?= $data->mom_name ?></b>
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
          <a class="btn btn-primary mt-2" href="<?= base_url('admin/student') ?>">KEMBALI</a>
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