<div class="container col-md">
  <form action="<?= BASEURL; ?>/santri/ubah/" method="post">
    <div class="form-group">
      <input type="hidden" name="id" id="id" value="<?= $data['santri']['id'] ?>">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['santri']['nama'] ?>"autocomplete="off" required="">
    </div>

    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['santri']['alamat'] ?>" autocomplete="off" required="">
    </div>

    <div class="form-group">
      <label for="telp">Telp</label>
      <input type="number" class="form-control" id="telp" name="telp" value="<?= $data['santri']['telp'] ?>" autocomplete="off" required="">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $data['santri']['email'] ?>" placeholder="email@example.com">
    </div>

    <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <select class="form-control jurusan" id="jurusan" name="jurusan" value="<?= $data['santri']['jurusan'] ?>">
        <option <?= ($data['santri']['jurusan'] == "Programmer") ? 'selected':""; ?> value="Programmer">Programmer</option>
        <option <?= ($data['santri']['jurusan'] == "Multimedia") ? 'selected':""; ?> value="Multimedia">Multimedia</option>
        <option <?= ($data['santri']['jurusan'] == "Immers") ? 'selected':""; ?>  value ="Immers">Immers</option>
        <option <?= ($data['santri']['jurusan'] == "CEO") ? 'selected':""; ?> value ="CEO">CEO</option>
        <option <?= ($data['santri']['jurusan'] == "Koki") ? 'selected':""; ?> value="Koki">Koki</option>

      </select>
    </div>

    <button type="submit" class="btn btn-warning">Update Data</button>
  </form>
</div>
