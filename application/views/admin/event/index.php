<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <b>Pengumuman</b>
      <a class="btn btn-primary btn-sm" href="" style="justify-self: end">
        <i class="material-icons">add</i>
        <span>TAMBAH</span>
      </a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Jadwal UTS Ganjil 2021</td>
            <td>
              <span class="label label-success label-rounded">AKTIF</span>
            </td>
            <td class="flex">
              <a class="btn btn-sm btn-primary" href="#">
                <i class="material-icons">create</i>
              </a>
              <a class="btn btn-sm btn-danger ml-1" href="#">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jadwal UTS Ganjil 2021</td>
            <td>
              <span class="label label-success label-rounded">AKTIF</span>
            </td>
            <td class="flex">
              <a class="btn btn-sm btn-primary" href="#">
                <i class="material-icons">create</i>
              </a>
              <a class="btn btn-sm btn-danger ml-1" href="#">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jadwal UTS Ganjil 2021</td>
            <td>
              <span class="label label-success label-rounded">AKTIF</span>
            </td>
            <td class="flex">
              <a class="btn btn-sm btn-primary" href="#">
                <i class="material-icons">create</i>
              </a>
              <a class="btn btn-sm btn-danger ml-1" href="#">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

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

</style>