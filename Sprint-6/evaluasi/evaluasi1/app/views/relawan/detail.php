<div class="container mt-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['rewn']['nama'];?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['rewn']['email'];?></h6>
      <p class="card-text"><?= $data['rewn']['alamat'];?></p>
      <p class="card-text"><?= $data['rewn']['kegiatan'];?></p>
      <a href="<?= BASEURL; ?>/relawan" class="card-link">Back</a>
      <a href="<?= BASEURL; ?>" class="card-link">Home</a>
    </div>
</div>
</div>