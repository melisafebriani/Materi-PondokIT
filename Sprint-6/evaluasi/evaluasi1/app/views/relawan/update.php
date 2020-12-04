<div class="container col-md">
  <form action="<?= BASEURL; ?>/relawan/ubah/" method="post">
    <div class="form-group">
      <input type="hidden" name="id" id="id" value="<?= $data['relawan']['id'] ?>">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['relawan']['nama'] ?>"autocomplete="off" required="">
    </div>


    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $data['relawan']['email'] ?>" placeholder="email@example.com">
    </div>

    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['relawan']['alamat'] ?>" autocomplete="off" required="">
    </div>

    <div class="form-group">
      <label for="kegiatan">Kegiatan</label>
      <select class="form-control kegiatan" id="kegiatan" name="kegiatan" value="<?= $data['relawan']['kegiatan'] ?>">
        <option <?= ($data['relawan']['kegiatan'] == "Kasih Palestina") ? 'selected':""; ?> value="Kasih Palestina">Kasih Palestina</option>
        <option <?= ($data['relawan']['kegiatan'] == "Bencana Alam") ? 'selected':""; ?> value="Bencana Alam">Bencana Alam</option>
        <option <?= ($data['relawan']['kegiatan'] == "Berbagi Nasi") ? 'selected':""; ?>  value ="Berbagi Nasi">Berbagi Nasi</option>
        <option <?= ($data['relawan']['kegiatan'] == "Sedekah Baju") ? 'selected':""; ?> value ="Sedekah Baju">Sedekah Baju</option>
        <option <?= ($data['relawan']['kegiatan'] == "Sedekah Qur'an") ? 'selected':""; ?> value="Sedekah Qur'an">Sedekah Qur'an</option>
         <option <?= ($data['relawan']['kegiatan'] == "Rumah Qur'an") ? 'selected':""; ?> value="Rumah Qur'an">Rumah Qur'an</option>
          <option <?= ($data['relawan']['kegiatan'] == "Santunan Yatim & Dhu'afa") ? 'selected':""; ?> value="Santunan Yatim & Dhu'afa">Santunan Yatim & Dhu'afa</option>

      </select>
    </div>

    <button type="submit" class="btn btn-success">Update Data</button>
  </form>
</div>
