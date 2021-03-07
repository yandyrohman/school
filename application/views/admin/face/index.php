<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Pengumuman</b>
      <a class="btn btn-primary btn-sm" href="<?= base_url('admin/face/create') ?>" style="justify-self: end">
        <i class="material-icons">add</i>
        <span>TAMBAH</span>
      </a>
    </div>
    <div class="card-body">
      <?php if(isset($msg)) : ?>
        <?= $msg ?>
      <?php endif; ?>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>

          
          
          <tr>
            <td>1</td>
            <td>
              <img class="img" src="<?= base_url('img/face/1.jpg') ?>">
            </td>
            <td>Judul</td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Aliquid debitis temporibus, ad, exercitationem excepturi placeat ab velit sint nobis reprehenderit
              quibusdam maiores accusantium sit asperiores eveniet quod ullam? Porro, delectus!
            </td>
            <td class="flex">
              <a class="btn btn-sm btn-primary" href="<?= base_url('admin/event/edit/'.'1') ?>">
                <i class="material-icons">create</i>
              </a>
              <a class="btn btn-sm btn-danger ml-1" href="#" onclick="deleteData(<?= '1' ?>)">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>
              <img class="img" src="<?= base_url('img/face/1.jpg') ?>">
            </td>
            <td>Judul</td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Aliquid debitis temporibus, ad, exercitationem excepturi placeat ab velit sint nobis reprehenderit
              quibusdam maiores accusantium sit asperiores eveniet quod ullam? Porro, delectus!
            </td>
            <td class="flex">
              <a class="btn btn-sm btn-primary" href="<?= base_url('admin/event/edit/'.'1') ?>">
                <i class="material-icons">create</i>
              </a>
              <a class="btn btn-sm btn-danger ml-1" href="#" onclick="deleteData(<?= '1' ?>)">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  function deleteData(id) {
    if(confirm('Hapus data ini ?')) {
      window.location = `<?= base_url() ?>face/delete/${id}`
    }
  }
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

  .img {
    width: 100px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.20);
  }

</style>