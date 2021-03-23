<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Form Galeri</b>
    </div>
    <div class="card-body">
      <?php if(!isset($data->id)) : ?>
        <form action="<?= base_url('admin/gallery/store') ?>" method="POST" enctype="multipart/form-data">
      <?php else : ?>
        <form id="add" action="<?= base_url('admin/gallery/add/'.($data->id ?? 0 )) ?>" method="POST" enctype="multipart/form-data">
      <?php endif; ?>

      <?php if(!isset($data->id)) : ?>
        <div class="form-group">
          <label>Judul Galeri</label>
          <input 
            name="title" 
            class="form-control" 
            type="text" 
            placeholder="Masukan Judul Galeri" 
            required
          >
        </div>

        <div class="form-group">
          <label>Penjelasan Acara</label><br>
          <textarea 
            name="text"
            class="form-control" 
            placeholder="Ceritakan tentang galeri ini"
          ></textarea>
        </div>

        <div class="d-flex">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/gallery') ?>">BATAL</a>
        </div>

        <small class="text-muted">Anda dapat menambahkan foto setelah menekan tombol submit diatas.</small>

      <?php else : ?>
        <h3><?= $data->title ?></h3>
        <p><?= $data->text ?></p>

        <div style="display: flex; justify-content: center; flex-wrap: wrap" class="pb-5">
          <?php foreach($photos as $photo) : ?>
            <div style="position: relative; width: 100px; height: 100px; margin: 10px" class="img-show">
              <img src="<?= base_url('img/gallery/'.$photo->photo) ?>" style="width: 100%; height: 100%; object-fit: cover"/>
              <div class="img-delete" style="
                display: none;
                position: absolute;
                width: 35%;
                height: 25%;
                top: 0;
                right: 0;
              ">
                <a href="<?= base_url('admin/gallery/remove/'.$photo->gallery_id.'/'.$photo->id.'/'.count($photos)) ?>" class="btn btn-sm btn-danger">
                  <i class="material-icons">clear</i>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
          <div style="position: relative; cursor: pointer; width: 100px; height: 100px; margin: 10px; background: #ccc; display: flex; justify-content: center; align-items: center">
            <label for="photo" style="font-size: 40px; cursor: pointer; width: 100%; height: 100%; margin: 0; display: flex; justify-content: center; align-items: center">+</label>
            <img id="form-img" src="" style="display: none; width: 100%; height: 100%; object-fit: cover"/>
            <input type="file" name="photo" id="photo" style="display: none"/>
            <div id="btn-submit" style="
              position: absolute;
              display: none;
              justify-content: center; 
              bottom: -40px; 
              display: none
            ">
              <button class="btn btn-primary btn-sm">SIMPAN</button>
            </div>
          </div>
        </div>

        <input type="hidden" name="gallery_id" value="<?= $data->id ?>">
        <input type="hidden" name="count" value="<?= count($photos) ?>">
        <div class="d-flex mt-5">
          <a class="btn btn-secondary" href="<?= base_url('admin/gallery') ?>">KEMBALI</a>
        </div>
      <?php endif; ?>

      </form>
    </div>
  </div>
</div>

<script>
  $('#photo').on('change', function() {
    $('#btn-submit').css('display', 'flex');
    $('#form-img').css('display', 'block');
    $('label[for="photo"]').hide();
    readURL(this);
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#form-img').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $('.img-show').on('mouseover', function() {
    $(this).find('.img-delete').css('display', 'block')
  }).on('mouseout', function() {
    $(this).find('.img-delete').css('display', 'none')
  })
</script>

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