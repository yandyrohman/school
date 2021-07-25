<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Profile Sekolah</b>
    </div>
    <div class="card-body">
      <?php if(isset($msg)) : ?>
        <?= $msg ?>
      <?php endif; ?>
      <form action="<?= base_url('admin/profile/update') ?>" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label>Logo</label><br/>
          <div class="d-flex">
            <div class="profile-img-wrapper">
              <img id="logo" style="height: 50px" src="<?= base_url('img/profile/logo.png') ?>">
            </div>
            <div class="ml-3">
              <input type="file" class="form-control" name="logo"/>
              <small class="form-text text-warning">
                * BIARKAN KOSONG JIKA TIDAK INGIN DIUBAH
              </small>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Nama Sekolah</label>
          <input 
            name="name" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Nama Sekolah" 
            required
            value="<?= $data->name ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Tentang Sekolah</label>
          <textarea
            name="text" 
            class="form-control"
            placeholder="Ceritakan tentang sekolah anda" 
            required
          ><?= $data->text ?? '' ?></textarea>
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input 
            name="address"
            type="text"
            class="form-control"
            placeholder="Alamat"
            required
            value="<?= $data->address ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Telepon</label>
          <input 
            name="phone"
            type="text"
            class="form-control"
            placeholder="Telepon"
            required
            value="<?= $data->phone ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>WhatsApp</label>
          <input
            name="wa"
            type="text"
            class="form-control"
            placeholder="WhatsApp"
            required
            value="<?= $data->wa ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Email</label>
          <input 
            name="email"
            type="text"
            class="form-control"
            placeholder="Email"
            required
            value="<?= $data->email ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Waktu Operasional</label>
          <input 
            name="schedule"
            type="text"
            class="form-control"
            placeholder="Waktu Operasional"
            required
            value="<?= $data->schedule ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Facebook</label>
          <input 
            name="facebook"
            type="text"
            class="form-control"
            placeholder="Link Profile Facebook"
            required
            value="<?= $data->facebook ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Youtube</label>
          <input 
            name="youtube"
            type="text"
            class="form-control"
            placeholder="Link Channel Youtube"
            required
            value="<?= $data->youtube ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Instagram</label>
          <input 
            name="instagram"
            type="text"
            class="form-control"
            placeholder="Link Instagram"
            required
            value="<?= $data->instagram ?? '' ?>"
          >
        </div>

        <div class="form-group">
          <label>Twitter</label>
          <input 
            name="twitter"
            type="text"
            class="form-control"
            placeholder="Link Twitter"
            required
            value="<?= $data->twitter ?? '' ?>"
          >
        </div>

        <div class="d-flex justify-content-end" style="margin-top: 50px">
          <button class="btn btn-primary">UPDATE PROFILE</button>
        </div>
      
      </form>
    </div>
  </div>
</div>

<script>
function readURL(input, selector) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $(selector).attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$('input[name="logo"]').change(function() {
  readURL(this, '#logo');
});
</script>

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

  .profile-img-wrapper {
    width: max-content;
    background: #ddd;
    padding: 10px;
    border: 1px solid #aaa;
    margin-bottom: 10px;
  }

</style>