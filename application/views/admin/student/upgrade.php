<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Naikan Kelas</b>
    </div>
    <div class="card-body">
      <?php if(isset($msg)) : ?>
        <?= $msg ?>
      <?php endif; ?>

      <form action="<?= base_url('admin/student/upgrade') ?>" method="POST">
        
        <table>
          <?php foreach($datas as $dataBefore) : ?>
            <?php if ($dataBefore->major_id != 0) : ?>
              <tr>
                <td>
                  <input class="form-control mb-3" type="text" value="<?= $dataBefore->name ?>" readonly/>
                </td>
                <td>
                  <div class="mb-3">
                    &nbsp;&nbsp;&nbsp;Naik Ke&nbsp;&nbsp;&nbsp;
                  </div>
                </td>
                <td>
                  <select class="form-control mb-3" name="<?= $dataBefore->id ?>" required>
                    <option style="display: none" value="">- pilih kelas -</option>
                    <?php foreach($datas as $dataAfter) : ?>
                      <option value="<?= $dataAfter->id ?>"><?= $dataAfter->name ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>
              </tr>
            <?php endif; ?>
          <?php endforeach; ?>
        </table>

        <div class="d-flex mt-3">
          <button class="btn btn-primary">SUBMIT</button>
          <a class="btn btn-secondary ml-2" href="<?= base_url('admin/student') ?>">BATAL</a>
        </div>
      
      </form>
    </div>
  </div>
</div>