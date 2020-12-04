<div class="container mt-3">


  <div class="row">
    <div class="col-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
          Tambah Data Relawan
        </button>
    </div>
  </div>


    <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/relawan/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari relawan.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="sumbit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <div class="row">
    <div class="col-6">
          <h3>Nama Relawan Indonesia</h3>
           <ul class="list-group">
             <?php foreach($data['rewn'] as $rewn) : ?> 
           
              <li class="list-group-item"><?= $rewn['nama']; ?>
               <a href="<?= BASEURL; ?>/relawan/hapus/<?= $rewn['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?'); ">hapus</a>
               <a href="<?= BASEURL; ?>/relawan/getUbah/<?= $rewn['id']; ?>" class="badge badge-success float-right ml-1">update</a>
                <a href="<?= BASEURL; ?>/relawan/detail/<?= $rewn['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>

                
              </li>
            </ul>
              <?php endforeach; ?> 
      </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Relawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/relawan/tambah" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>

           <div class="form-group">
              <label for="kegiatan">Jenis Kegiatan</label>
              <select class="form-control" id="kegiatan" name="kegiatan">
                <option value="Kasih Palestina">Kasih Palestina</option>
                <option value="Bencana Alam">Bencana Alam</option>
                <option value="Berbagi Nasi">Berbagi Nasi</option>
                <option value="Sedekah Baju">Sedekah Baju</option>
                <option value="Sedekah Qur'an">Sedekah Qur'an</option>
                <option value="Rumah Qur'an">Rumah Qur'an</option>
                <option value="Santunan Yatim & Dhu'afa">Santunan Yatim & Dhu'afa</option>
               
              </select>
            </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="btn btn-warning">
  <a href="<?= BASEURL; ?>/home/logout">Logout</a>
</div>
