<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Staff & Guru</b>
      <a class="btn btn-primary btn-sm" href="<?= base_url('admin/staff/create') ?>" style="justify-self: end">
        <i class="material-icons">add</i>
        <span>TAMBAH</span>
      </a>
    </div>
    <div class="card-body">
      <?php if(isset($msg)) : ?>
        <?= $msg ?>
      <?php endif; ?>
      
      <div class="row mb-2">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <form class="d-flex">
            <input type="text" class="form-control" name="q" placeholder="Cari Nama Staff" value="<?= $q ?>">
            <?php if($q) : ?>
              <a class="btn btn-sm btn-primary ml-1" style="height: 35px" href="<?= base_url('admin/staff') ?>">
                <i class="material-icons">clear</i>
              </a>
            <?php else : ?>
              <button class="btn btn-sm btn-primary ml-1" style="height: 35px">
                <i class="material-icons">search</i>
              </button>
            <?php endif; ?>
          </form>
        </div>
      </div>
      
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          
          <?php if(count($datas) == 0) : ?>
            <tr>
              <td colspan="5" class="text-center">- data kosong -</td>
            </tr>
          <?php endif; ?>
          
          <?php foreach($datas as $i => $data) : ?>
            <tr>
              <td><?= (($page - 1) * 5) + ($i + 1) ?></td>
              <td>
                <img class="img" src="<?= base_url('img/staff/'.$data->photo) ?>">
              </td>
              <td><?= $data->name ?></td>
              <td>
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
              </td>
              <td class="flex">
                <a class="btn btn-sm btn-success" href="<?= base_url('admin/staff/show/'.$data->id) ?>">
                  <i class="material-icons">visibility</i>
                </a>
                <a class="btn btn-sm btn-primary ml-1" href="<?= base_url('admin/staff/edit/'.$data->id) ?>">
                  <i class="material-icons">create</i>
                </a>
                <a class="btn btn-sm btn-danger ml-1" href="#" onclick="deleteData(<?= $data->id ?>)">
                  <i class="material-icons">delete</i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
      
      <?php if($page) : ?>
        <div class="d-flex justify-content-center">
          <div class="btn-group" role="group">
            <a 
              type="button" 
              class="btn btn-primary btn-sm" 
              href="<?= base_url('admin/staff?page='.(($page - 1) == 0 ? 1 : ($page - 1))) ?>"
            >
              <i class="material-icons">keyboard_arrow_left</i>
            </a>
            <button type="button" class="btn btn-primary btn-sm">Page <?= $page ?></button>
            <a 
              type="button" 
              class="btn btn-primary btn-sm" 
              href="<?= base_url('admin/staff?page='.($page + 1)) ?>"
            >
              <i class="material-icons">keyboard_arrow_right</i>
            </a>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</div>

<script>
  function deleteData(id) {
    if(confirm('Hapus data ini ?')) {
      window.location = `<?= base_url() ?>admin/staff/delete/${id}`
    }
  }
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

  .img {
    width: 70px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.20);
  }

</style>