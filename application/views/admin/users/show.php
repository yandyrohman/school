<div class="container-fluid">
  <div class="card" style="width: 600px">
    <div class="card-header">
      <b>Detail User</b>
    </div>
    <div class="card-body">

        <div class="form-group">
          <label>Nama</label><br/>
          <b><?= $data->name ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Username</label><br/>
          <b><?= $data->username ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Email</label><br/>
          <b><?= $data->email ?></b>
        </div>
        <hr/>

        <div class="form-group">
          <label>Role</label><br/>
          <b>
            <?php
              switch($data->role) :
                case 1 : echo 'Administrator'; break;
                case 2 : echo 'Staff TU'; break;
                case 3 : echo 'Staff Umum'; break;
              endswitch;                   
            ?>
          </b>
        </div>
        <hr/>

        <div class="d-flex mt-2">
          <a class="btn btn-primary mr-2" href="<?= base_url('admin/users') ?>">KEMBALI</a>
          <a class="btn btn-success" href="<?= base_url('admin/users/edit/'.$data->id) ?>">EDIT</a>
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