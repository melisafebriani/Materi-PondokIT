<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>


    <div class="row mb-3">
      <div class="col-lg-6">
          <h3>Daftar Santri</h3>
          <button type="button" class="btn btn-warning tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Santri
          </button>
      </div>
    </div>


    <div class="row mb-3">
      <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/santri/cari" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="cari santri.." name="keyword" id="keyword" autocomplete="off">
                  <div class="input-group-append">
                    <span class="btn btn-primary" type="submit" id="tombolCari">Cari</span>
                  </div>
                </div>
            </form>
      </div>
    </div>

        <ul class="list-group">
          <?php foreach( $data['santri'] as $santri ) : ?>
            <li class="list-group-item ">
              <?= $santri['nama']; ?>
                <a href="<?= BASEURL; ?>/santri/hapus/<?= $santri['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?'); ">hapus</a>
                <a href="<?= BASEURL; ?>/santri/getUbah/<?= $santri['id']; ?>" class="badge badge-info float-right ml-1">ubah</a>
                <a href="<?= BASEURL; ?>/santri/detail/<?= $santri['id']; ?>" class="badge badge-info float-right ml-1">detail</a>
              </li>
          <?php endforeach; ?>
        </ul>

    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" role="dialog" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="<?= BASEURL; ?>/santri/tambah/" method="post">
          <div class="form-group">
            <input type="hidden" name="id" id="id">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required="">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" required="">
          </div>

          <div class="form-group">
            <label for="telp">Telp</label>
            <input type="number" class="form-control" id="telp" name="telp" autocomplete="off" required="">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
          </div>
    
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select class="form-control jurusan" id="jurusan" name="jurusan">
            
          </select>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>